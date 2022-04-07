<?php
//create a class to connect/open the db file

if (isset($_POST['bookId'])){
    $id = $_POST['bookId'];
    
class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }
        $db = new MyDB();

        //
        $sql6 = "SELECT * FROM book_details WHERE id = '$id' LIMIT 1";
        $ret = $db->query($sql6);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $book_id = $row["id"];
            $bookTitles = $row["book_titles"];
            $authors = $row["authors"];
            $publisher= $row["publishers"];
            $bookHint = $row["book_info"];
            $studClass = $row["students_class"];
            $generalPurpose = $row["general_purpose_books"];
            $available = $row["books_availability"];
            $qty = $row["book_quantity"];// this holds the quantity of book for this particular book id 
            $bookLocation = $row["book_location"];

      
           
    

              
    }              

        $sql1 = "DELETE FROM book_details WHERE  id = '$book_id' ";
         $db -> exec($sql1);

         $sql2 = "DELETE FROM names_of_persons WHERE  bookID = '$book_id' ";
        $del= $db -> exec($sql2);
        
          // evaluating the values of book quantity as the script runs
         // $bkqty -= $qty;

         // $sql3 = "UPDATE book_details SET book_quantity = '$bkqty' ";
         //$update = $db->exec($sql3); 

         $sql7 = "SELECT SUM(book_quantity) AS QTY FROM book_details "; //query for sum of total book quantities in the system
         $ret4 = $db->query($sql7);
   
         while($row2 = $ret4->fetchArray(SQLITE3_ASSOC) ){
           $bkqty = $row2["QTY"];// this holds the total book quantity for all the books in the system
         }

      
        echo 'You just deleted book name :<b style="color:red"> '.$bookTitles.'</b> from book records with book ID:<b style="color:red">
         '.$book_id.'</b> and Authors name:<b style="color:red"> '.$authors.'</b> .<b style="color:green"> Total book quantity is automatically updated to:</b>
         <b style="color:blue; font-size:55px"><br> '.$bkqty.'</b>.';
        exit();
    }

?>