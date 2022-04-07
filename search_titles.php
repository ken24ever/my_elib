<?php
 $infoDisplay = "";
 $TotalBooks ="";

  //initialise variable displayMessg


if (isset($_POST['searchedBook']) || isset($_REQUEST['p'])) {

//assign the posted variables to local variables
$searchedBookTitle = $_POST['searchedBook']; // 
$page;
$nextPageNum ;
$previousPageLinks;
$nextPageLinks="";


  class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }
        $db = new MyDB();

        $page = ($_REQUEST['p']);
        $rowsPerPage = 8;
        $p = ($page*$rowsPerPage);

        if ( $page == 0 || $page == "") {

          $page = 1;
        }
    
      // querying for the title of books in the system based on what is typed into the system
     $sql = "SELECT * FROM book_details WHERE book_titles  LIKE '%$searchedBookTitle%' LIMIT ".$p." , ".$rowsPerPage."";
     $ret = $db->query($sql);

     $sql1 = "SELECT  COUNT(book_titles) AS numOfTitles FROM book_details WHERE book_titles LIKE '%$searchedBookTitle%' ";
     $ret1 = $db->query($sql1);
     while($row4 = $ret1->fetchArray(SQLITE3_ASSOC) ){
       $numOfTitle= $row4["numOfTitles"];
     
    }//end of while loop
    
     $infoDisplay .= "<p><strong style='color:green; font-family:tahoma; font-size:15px;'>System Found
     <b style='color:red; font-family:tahoma; font-size:18px;'> (".$numOfTitle.")</b> 
      Searched Result(s) For <b style='color:red; font-family:tahoma; font-size:18px;'>' ".$searchedBookTitle." '</b></strong></p>";
     

       $infoDisplay .='<div class="table-responsive shadow_border"> 
      <table class="table table-hover table-bordered table-striped  table-responsive-sm table-condensed " 
      id="t01">
      <thead>
      <tr>
    <th ><center>BOOK TITLES</center></th> 
<th ><center> AUTHORS</center></th>
<th ><center> PUBLISHERS</center></th>
 <th ><center>BOOK INFORMATION</center> </th> 
<th><center> CLASS LEVEL </center></th> 
<th><center> BOOKS TYPE </center></th>
<th> <center> BOOKS AVAILABILITY </center> </th>
<th> <center> QUANTITY </center> </th>
<th> <center>BOOKS LOCATION </center> </th>
<th> <center><b style="color:red"> DELETE BOOK </b></center> </th>
    </tr>
</thead>
';

      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $book_id = $row["id"];
        $bookTitles = $row["book_titles"];
        $authors = $row["authors"];
        $publisher= $row["publishers"];
        $bookHint = $row["book_info"];
        $studClass = $row["students_class"];
        $generalPurpose = $row["general_purpose_books"];
        $available = $row["books_availability"];
        $qty = $row["book_quantity"];
        $bookLocation = $row["book_location"];


        /// to cut long text short
			$string = strip_tags($bookHint);
			if (strlen($string) > 20){
				//truncate
				$stringCut = substr($string, 0, 19);
        $endPoint = strrpos($stringCut,'');
        $continueReading = substr($string,  19);
				
				
				//$string = $endPoint? substr($stringCut,0,$endPoint) : substr($stringCut,0 );
        $string = $stringCut.'<button class="a btn btn-info" data-toggle="collapse" data-target=".demo"  >Read More</button>
        <div id="" class="demo collapse">
'.$continueReading.'
<button class="b btn btn-info" data-toggle="collapse" data-target=".demo"  >Collapse</button>
</div>
        
        ';
				
				


				
			}
   
        // set up conditions for availability
      if ($studClass == ""){
        $row["students_class"] ="<em style='color:red'><strong class='classNotAssigned'>Class Not Specified For This Book!</strong></em>";

    }
    if ($generalPurpose == ""){
      $row["general_purpose_books"]="<em style='color:blue'><em style='color:red'><strong class='blinkDirection'><--</strong></em>Book is assigned to this class level</em>";
    }

    if ($generalPurpose == "generalBks"){
      $row["general_purpose_books"]="GENERAL";
    }

    if ($qty > 0){
      $available='<button class="btn btn-default" id="avail"  data-toggle="modal" data-target="#myModal" ><b style="color:green" >AVAILABLE</b></button>';
    }else if ($qty <= 0){
      $available='<button class="btn btn-danger" disabled><b style="color:white" >BOOKED</b></button>';
    }
      
     $infoDisplay .= '<tbody>
   
   <td align="center" class="bookTitles" data-id1="'.$row["id"].'" contenteditable ><font size="5">'.$row["book_titles"].'</font></td>
  <td align="center"  class="bookAuthors" data-id2="'.$row["id"].'"><font size="2">'.$row["authors"].'</font></td>
   <td align="center"  class="booksPublisher" data-id3="'.$row["id"].'"><font size="2">'.$row["publishers"].'</</font></td>
   <td align="center" class="bookHint" data-id4="'.$row["id"].'"><font size="2">'.$string.'</font></td>
  <td align="center"  class="classLevels" data-id5="'.$row["id"].'"><font size="2">'.$row["students_class"].'</font></td>
  <td align="center"  class="bookType" data-id6="'.$row["id"].'"><font size="2">'.$row["general_purpose_books"].'</font></td>
  <td align="center" class="bookAvailability" data-id7="'.$row["id"].'"><font size="2">'.$available.'</font></td>
  <td align="center" class="book_quantity" data-id8="'.$row["id"].'" contenteditable ><font size="4">
  <a href="#" data-toggle="tooltip" data-placement="left" title="You Can Edit This Content!" class= "links">
  '.$qty.'</a></font></td>
  <td align="center" class="book_location" data-id9="'.$row["id"].'"><font size="2">'.$bookLocation.'</font></td>
  <td align="center" ><button class="anchor del_ btn btn-danger" data-id11="'.$row["id"].'"><font size="7">X</font></button></td>
 
  ';
   

      }
   
  
      $infoDisplay .= '</tbody>
      </table></div>';
     
      $check = ($page * $rowsPerPage);
      $limits = $numOfTitle/$rowsPerPage;
      $limits = ceil ($limits);
      
            if ($_REQUEST['p'] > 1){
              $previousPageLinks = $_REQUEST['p']-1 ;
              $previousPageLinks .= '<ul class="pagination">
          
      <li><span style="cursor:pointer"  class="p1" data-id10="'.$previousPageLinks.'">Previous</span></li>
           </ul>';
           echo  $previousPageLinks ;
            }

    
     
        if (  $numOfTitle > $check ){
          $nextPageNum = $_REQUEST['p']+1 ;
          $nextPageLinks .= '<ul class="pagination">
      
              <li><span style="cursor:pointer;"  class="p1" data-id10="'.$nextPageNum.'">Next</span></li>
                             
                           </ul>';
                           echo  $nextPageLinks ;

        }

       

        for ($i=1; $i<=$limits; $i++) {

        if ($i == $_REQUEST['p'] ){
                 
              echo '<strong style=" font-size:14px;
              padding:0px 4px; font-family:tahoma; color:white; background-color:lightGreen;
              border-radius:40px; 
              "> '.$i.' </strong>';
        }else{
          echo '<span class="linksNav p1" data-id10="'.$i.'" >  '.$i.'</span>';
      
        }// end of if else stat
      
       
        
      }// end of for loop
     

    }//end of first if control statement

    echo $infoDisplay;

?>