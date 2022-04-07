<?php
//create a class to connect/open the db file

if (isset($_POST['id'])){
    $id = $_POST['id'];
    
class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }
        $db = new MyDB();

        //
        $sql6 = "SELECT * FROM names_of_persons WHERE id = '$id' LIMIT 1";
        $ret = $db->query($sql6);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $rec_id =  $row["id"];
            $book_id = $row["bookID"];
            $bookTitles = $row["booksBooked"];
            $firsNm = $row["firstName"];
            $lastNm= $row["lastName"];
            $studClass = $row["classLevel"];
            $bkTime = $row["time_details"];

      
           
        $sql7 = "SELECT book_quantity,book_titles, book_location, authors FROM book_details
         WHERE id = '$book_id'  LIMIT 1"; // query the person
        $ret4 = $db->query($sql7);
  
        while($row2 = $ret4->fetchArray(SQLITE3_ASSOC) ){
          $bkqty = $row2["book_quantity"];
          $bktitles = $row2["book_titles"];
          $bookLoc = $row2["book_location"];
          $auth = $row2["authors"];
        }

              
    }              

        $sql1 = "DELETE FROM names_of_persons WHERE  id = '$rec_id' ";
         $db -> exec($sql1);
        
          // evaluating the values of book quantity as the script runs
          $bkqty = ++$bkqty;
          $sql3 = "UPDATE book_details SET book_quantity = '$bkqty' WHERE id ='$book_id'";
         $update = $db->exec($sql3); 


      
        echo 'You deleted this name :<b style="color:red"> '.$firsNm.' '.$lastNm.'</b> from booked list with book title:<b style="color:red">
         '.$bktitles.'<b style="color:green"> and book\'s quantity is automatically updated to:</b>
         <b style="color:blue; font-size:55px"><br> '.$bkqty.'</b></b>.';
        exit();
    }

?>