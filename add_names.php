<?php
//initialise variable displayMessg
$displayMessg = "";

if (isset($_POST['first_name']) && isset($_POST['last_name'])  && 
isset($_POST['class_level'])
) {

//assign the posted variables to local variables
$firstNm = $_POST['first_name']; // 
$lastNm = $_POST['last_name']; // 
$classLv = $_POST['class_level']; // 
//$bookID =$_POST['book_id']; // 

//create a class to connect/open the db file
class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }
        $db = new MyDB();

        if ( empty($firstNm) && empty($lastNm)  && empty($classLv) )
        {

          return false;
        }else{

        $sql1 = "SELECT randomised_ids  FROM random_ids WHERE name= 'name'  LIMIT 1"; // query the person
        $ret1 = $db->query($sql1);
  
        while($row1 = $ret1->fetchArray(SQLITE3_ASSOC) ){
          $randomIDs = $row1["randomised_ids"];
  
        }

        $sql = "SELECT book_quantity,book_titles FROM book_details WHERE id = '$randomIDs'  LIMIT 1"; // query the person
        $ret = $db->query($sql);
  
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
          $bkqty = $row["book_quantity"];
          $bktitles = $row["book_titles"];
        }
          // evaluating the values of book quantity as the script runs
          $bkqty = --$bkqty;
          $sql3 = "UPDATE book_details SET book_quantity = '$bkqty' WHERE id ='$randomIDs'";
           $db->exec($sql3);
          $date= date("d-m-y");
          $time = date("h:i:s");
        $sql2 = "INSERT INTO names_of_persons (firstName, lastName, booksBooked, bookID,
               classLevel, time_details) VALUES 
               ('$firstNm','$lastNm','$bktitles','$randomIDs','$classLv', ' $date  $time')"; // query the person
               $insert2 = $db-> exec($sql2);

              

        $displayMessg .= "Details Added Successfully!";
        echo $displayMessg ;

      }//end of inner if else 

}//end of if isset 


?>