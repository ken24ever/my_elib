<?php
//initialise variable displayMessg
$displayMessg = "";

if (isset($_POST['bkTitle']) && isset($_POST['authName'])  && 
isset($_POST['pubName']) && 
isset($_POST['bukHint']) && 
isset($_POST['selClass']) && 
isset($_POST['selCat']) ) {

//assign the posted variables to local variables
$book_title = $_POST['bkTitle']; // 
$authors = $_POST['authName']; // 
$publisherName = $_POST['pubName']; // 
$bookInfo =$_POST['bukHint']; // 
  $selectClassLevel= $_POST['selClass']; //
$selectCategory = $_POST['selCat']; //
$booksQuantity = $_POST['bkQty']; //
$booksShelve = $_POST['bkShelve']; //


//create a class to connect/open the db file
class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }
        $db = new MyDB();

       
        if ( $_POST['selCat'] == 'classesBk'  ) {

          
              
               $sql1 = "INSERT INTO book_details (book_titles, authors, publishers, book_info, students_class,
                general_purpose_books, books_availability, book_quantity, book_location) VALUES 
               ('$book_title','$authors','$publisherName', '$bookInfo', 
               '$selectClassLevel', '', '', '$booksQuantity', '$booksShelve')"; // query the person
               $insert1 = $db-> exec($sql1);
                
     }//inner if construct for $selectCategory
     
     elseif ($_POST['selCat'] == 'generalBks'){
     
     
      $sql2 = "INSERT INTO book_details (book_titles, authors, publishers, 
      book_info, students_class, general_purpose_books, books_availability,  book_quantity, book_location) VALUES 
      ('$book_title','$authors','$publisherName', '$bookInfo', '', '$selectCategory', '', '$booksQuantity', '$booksShelve')"; // query the person
      $insert2 = $db-> exec($sql2);

     
     }//end of elseIf construct

                   
         
       

    
        $displayMessg  .="Upload was a success!";
        
        echo "<strong style='color:green; font-family:tahoma;'>".$displayMessg."</strong>";
     exit();


}//end of if 
else{
     $displayMessg  .="Upload was not successful!";
     echo "<strong style='color:red; font-family:tahoma;'>".$displayMessg."</strong>";
}








?>