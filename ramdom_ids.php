<?php
 //$infoDisplay = "";
 if (isset($_POST['ID'])  ) {
 
    //assign the posted variables to local variables
$bookID= $_POST['ID']; //

 class MyDB extends SQLite3
 {
     function __construct()
     {
          $this->open('database.db');
     }
 }
 $db = new MyDB();

 $sql = "UPDATE random_ids SET randomised_ids = '$bookID' WHERE name = 'name' ";
 $db->exec($sql);
 }//end of if 

 ?>
