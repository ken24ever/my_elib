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
        $rowsPerPage = 10;
        $p = ($page*$rowsPerPage);

        if ( $page == 0 || $page == "") {
          $page = 1;
        }
    
        $sql1 = "SELECT  COUNT(id) AS totalBooks FROM names_of_persons";
      $ret1 = $db->query($sql1);
      while($row4 = $ret1->fetchArray(SQLITE3_ASSOC) ){
        $TotalBooks= $row4["totalBooks"];
      
     }//end of while loop
     
     
      $sql = "SELECT * FROM names_of_persons ORDER BY id DESC LIMIT ".$p.", ".$rowsPerPage." ";
      $ret = $db->query($sql);
       $infoDisplay .='<div class="table-responsive">
      <table class="table table-hover table-bordered table-striped  table-responsive-sm "
      id="t01">
      <thead>
             <tr>
             <th ><center> ID </center></th> 
           <th ><center>FIRST NAME </center></th> 
       <th ><center> LAST NAME</center></th>
       <th ><center>CLASS LEVEL</center></th>
      <th> <center>BOOKS TITLES</center> </th>
      <th> <center>TIME AND DATE</center> </th>
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
     $infoDisplay .= '<tbody>
   
   <td align="center" class="user_acess_level" data-id1="'.$rec_id.'" ><font size="2">'. $rec_id .'</font></td>
  <td align="center"  class="user_name" data-id2="'.$rec_id.'"><font size="5">'.$firsNm.'</font></td>
   <td align="center"  class="user_password" data-id3="'.$rec_id.'"><font size="5">'.$lastNm.'</</font></td>
   <td align="center" class="date_created" data-id4="'.$rec_id.'"><font size="2">'.$studClass.'</font></td>
  <td align="center"  class="last_login_date" data-id5="'.$rec_id.'"><font size="2">'.$bookTitles.'</font></td>
  <td align="center"  class="timeDisp" data-id6="'.$rec_id.'"><font size="2">'.$bkTime.'</font></td>
  
  ';
   

      }
   
  
      $infoDisplay .= '</tbody>
      <tfoot>
      <tr align="center"><td></td><td></td><td><font size="4"> TOTAL BOOKS BOOKED AT THE MOMENT: <b style="color:green; font-size:28px">('.$TotalBooks.')</b></font></td></td><td align="center">
      </td> <td></td> <td></td></tr>
      
      
      </tfoot>
      </table></div>';
       
      
      $check = ($page * $rowsPerPage);
      $limits = $TotalBooks/$rowsPerPage;
      $limits = ceil ($limits);
      
            if ($_REQUEST['p'] > 1){
              $previousPageLinks = $_REQUEST['p']-1 ;
              $previousPageLinks .= '<ul class="pagination">
          
      <li><span style="cursor:pointer" onclick="loadData1('.$previousPageLinks.');">Previous</span></li>
           </ul>';
           echo  $previousPageLinks ;
            }

            if (  $TotalBooks > $check ){
              $nextPageNum = $_REQUEST['p']+1 ;
              $nextPageLinks .= '<ul class="pagination">
          
                  <li><span style="cursor:pointer; " onclick="loadData1('.$nextPageNum.');">Next</span></li>
                                 
                               </ul>';
                               echo  $nextPageLinks ;
    
            }
    
           
    
            for ($i=1; $i<=$limits; $i++) {

              
              
            if ($i == $_REQUEST['p'] ){

                  echo '<strong style=" font-size:14px;
                  padding:0px 4px; font-family:tahoma; color:white; background-color:lightGreen;
                  border-radius:40px; 
                  ">'.$i.'</strong>';
                  

            }else{
              echo '<span class="linksNav" onclick="loadData1('.$i.');"> '.$i.' </span>';
              if ($i == 10 || $i == 20 || $i == 30){
                echo "<br/>";
          }
            }
    
            
          }// end of for loop

      echo $infoDisplay;

?>