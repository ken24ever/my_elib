<?php
 $infoDisplay = "";
 $TotalBooks ="";
  //initialise variable displayMessg


if (isset($_POST['firstName']) || isset($_POST['lastName']) || isset($_REQUEST['p'])) {

//assign the posted variables to local variables
$frstName= $_POST['firstName']; // firstname
$lstName= $_POST['lastName']; // lastname
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

     $sql1 = "SELECT  COUNT(firstName) AS numOfFirst, COUNT(lastName) AS numOfLast FROM names_of_persons WHERE firstName LIKE '%$frstName%' OR lastName LIKE '%$lstName%' ";
     $ret1 = $db->query($sql1);
     while($row4 = $ret1->fetchArray(SQLITE3_ASSOC) ){
       $numOfFirstNames= $row4["numOfFirst"];
     
    }//end of while loop

        // querying for the title of books in the system based on what is typed into the system
        $sql = "SELECT * FROM names_of_persons WHERE firstName LIKE '%$frstName%' OR lastName LIKE '%$lstName%'
         ORDER BY id DESC  LIMIT ".$p." , ".$rowsPerPage." ";
        $ret = $db->query($sql);
    
     $infoDisplay .= "<center><strong style='color:green; font-family:tahoma; font-size:15px;'>System Found
     <b style='color:red; font-family:tahoma; font-size:18px;'> (".$numOfFirstNames.")</b> 
      Searched Result(s) For <b style='color:red; font-family:tahoma; font-size:18px;'>' ".$frstName .' '. $lstName." '
      </b></strong></center>";
     

       $infoDisplay .='<div class="table-responsive shadow_border"> 
      <table class="table table-hover table-bordered table-striped 
       table-responsive-sm table-condensed " id="t01">
      <thead>
      <tr>
      <th ><center> ID </center></th> 
    <th ><center>FIRST NAME </center></th> 
<th ><center> LAST NAME</center></th>
<th ><center>CLASS LEVEL</center></th>
<th> <center>BOOKS TITLES</center> </th>
<th> <center>BOOKS AUTHORS</center> </th>
<th> <center>BOOK SHELF </center> </th>
<th> <center>TIME AND DATE</center> </th>
<th> <center><b style="color:red">DELETE</b></center> </th>
    </tr>
</thead>
';

      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $rec_id =  $row["id"];
        $book_id = $row["bookID"];
        $bookTitles = $row["booksBooked"];
        $firsNm = $row["firstName"];
        $lastNm= $row["lastName"];
        $studClass = $row["classLevel"];
        $bkTime = $row["time_details"];
   
        
        $sql = "SELECT book_quantity,book_titles, book_location, authors FROM book_details WHERE id = '$book_id'  LIMIT 8"; // query the person
        $ret4 = $db->query($sql);
  
        while($row2 = $ret4->fetchArray(SQLITE3_ASSOC) ){
          $bkqty = $row2["book_quantity"];
          $bktitles = $row2["book_titles"];
          $bookLoc = $row2["book_location"];
          $auth = $row2["authors"];
        }
       

    
      
     $infoDisplay .= '<tbody>
     <tr> 
      <td align="center" class="bookId" data-id1="'.$rec_id.'" ><font size="2">'. $rec_id .'</font></td>
     <td align="center"  class="FirstName" data-id2="'.$rec_id.'"><font size="5">'.$firsNm.'</font></td>
      <td align="center"  class="lastName" data-id3="'.$rec_id.'"><font size="5">'.$lastNm.'</</font></td>
      <td align="center" class="classLevel" data-id4="'.$rec_id.'"><font size="2">'.$studClass.'</font></td>
     <td align="center"  class="bookTitle" data-id5="'.$rec_id.'"><font size="2">'.$bookTitles.'</font></td>
     <td align="center"  class="bookAuth" data-id6="'.$rec_id.'"><font size="2">'.$auth.'</font></td>
     <td align="center"  class="bookLocation" data-id7="'.$rec_id.'"><font size="2">'.$bookLoc.'</font></td>
     <td align="center"  class="timeDisp" data-id8="'.$rec_id.'"><font size="2">'.$bkTime.'</font></td>
     <td align="center"  class="del" data-id9="'.$rec_id.'"><b class="btn btn-danger" id="btnForDel"><font size="4">X</font></b></td>
     </tr>
  ';
   

      }
   
  
      $infoDisplay .= '</tbody>
      </table></div>';

      $check = ($page * $rowsPerPage);
      $limits = $numOfFirstNames/$rowsPerPage;
      $limits = ceil ($limits);
      
            if ($_REQUEST['p'] > 1){
              $previousPageLinks = $_REQUEST['p']-1 ;
              $previousPageLinks .= '<ul class="pagination">
          
      <li><span style="cursor:pointer"  class="p" data-id9="'.$previousPageLinks.'">Previous</span></li>
           </ul>';
           echo  $previousPageLinks ;
            }

    
     
        if (  $numOfFirstNames > $check ){
          $nextPageNum = $_REQUEST['p']+1 ;
          $nextPageLinks .= '<ul class="pagination">
      
              <li><span style="cursor:pointer;"  class="p" data-id9="'.$nextPageNum.'">Next</span></li>
                             
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
          echo '<span class="linksNav p" data-id9="'.$i.'" >  '.$i.'</span>';
      
        }// end of if else stat
      
       
        
      }// end of for loop
     
     
    }//end of first if control statement

    echo $infoDisplay;


?>