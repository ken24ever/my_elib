<?php
 $infoDisplay = "";
  class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }

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





        }

?>