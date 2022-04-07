<?php
 $infoDisplay = "";
 $nextPageLinks = "";
 $previousPageLinks = "";

  class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }
        $db = new MyDB();

     

        $page = $_REQUEST['p'];
        $rowsPerPage = 8;
        $p = ($page*$rowsPerPage);

        if ( $page == 0 || $page == "") {

          $page = 1;
        }

        $sql1 = "SELECT  COUNT(id) AS totalBooks, SUM(book_quantity) AS QTY FROM book_details";
      $ret1 = $db->query($sql1);
      while($row4 = $ret1->fetchArray(SQLITE3_ASSOC) ){
        $TotalBooks= $row4["totalBooks"];
        $TotalQtyOfBooks= $row4["QTY"];
      
     }//end of while loop

      $sql = "SELECT * FROM book_details ORDER BY id DESC LIMIT ".$p." , ".$rowsPerPage."  ";
      $ret = $db->query($sql);
       $infoDisplay .='<div class="table-responsive">
      <table class="table table-hover table-bordered  table-responsive-sm  table-condensed "
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
      <th> <center>BOOKS QUANTITY </center> </th>
      <th> <center>BOOKS LOCATION </center> </th>
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
      }//end of if (strlen($string) > 20)

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
          $available='<button class="btn btn-default" data-toggle="modal" data-target="#myModal" id="dataAvail"><b style="color:green" >AVAILABLE</b></button>';
        }else if ( $qty <= 0){
          $available='<button class="btn btn-danger" data-toggle="modal" data-target="#myModal" disabled ><b style="color:white" >BOOKED</b></button>';
        }
          

     $infoDisplay .= '<tbody>
   
   <td align="center" class="book_titles" data-id1="'.$row["id"].'" ><font size="3">'.$row["book_titles"].'</font></td>
  <td align="center"  class="authors" data-id2="'.$row["id"].'"><font size="2">'.$row["authors"].'</font></td>
   <td align="center"  class="publishers" data-id3="'.$row["id"].'"><font size="2">'.$row["publishers"].'</</font></td>
   <td align="center" class="book_info" data-id4="'.$row["id"].'"><font size="2">'.$string.'</font></td>
  <td align="center"  class="students_class" data-id5="'.$row["id"].'"><font size="2">'.$row["students_class"].'</font></td>
  <td align="center"  class="general_purpose" data-id6="'.$row["id"].'"><font size="2">'.$row["general_purpose_books"].'</font></td>
  <td align="center" class="avalability" data-id7="'.$row["id"].'" ><font size="2">'.$available.'</font></td>
  <td align="center" class="quantity" data-id8="'.$row["id"].'" contenteditable><font size="4">
  <a href="#" data-toggle="tooltip" data-placement="left" title="You Can Edit This Content!" class= "links">
  '.$qty.' </a></font></td>
  <td align="center" class="book_location" data-id9="'.$row["id"].'"><font size="2">'.$bookLocation.'</font></td>
  ';
   

      }
   
  
      $infoDisplay .= '</tbody>
      <tfoot>
      <tr align="center"><td><font size="4">BOOKS IN THE SYSTEM: <b style="color:green; font-size:28px; font-family:Birch Std">('.$TotalBooks.') </b></font></td> <td></td><td></td><td></td><td></td><td> </td><td><td>TOTAL QUANTITY: <b style="color:red; font-size:28px; font-family:Birch Std"> ('.$TotalQtyOfBooks.')</b></td></td><td align="center">
      </td> </tr>
      
      
      </tfoot>
      </table></div>';
      
      $check = ($page * $rowsPerPage);
      $limits = $TotalBooks/$rowsPerPage;
      $limits = ceil ($limits);
      
            if ($_REQUEST['p'] > 1){
              $previousPageLinks = $_REQUEST['p']-1 ;
              $previousPageLinks .= '<ul class="pagination">
          
      <li><span style="cursor:pointer" onclick="loadData('.$previousPageLinks.');">Previous</span></li>
           </ul>';
           echo  $previousPageLinks ;
            }

    
     
        if (  $TotalBooks > $check ){
          $nextPageNum = $_REQUEST['p']+1 ;
          $nextPageLinks .= '<ul class="pagination">
      
              <li><span style="cursor:pointer; " onclick="loadData('.$nextPageNum.');">Next</span></li>
                             
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
          echo '<span class="linksNav" onclick="loadData('.$i.');">  '.$i.'</span>';
          if ($i == 10|| $i == 20 || $i == 30){
            echo "<br/>";
      }
        }// end of if else stat
      
        
      }// end of for loop
      
      echo $infoDisplay;
      
      //echo $limits ;
?>