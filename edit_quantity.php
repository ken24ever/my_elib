<?php

$bkID = "";
 $text = "";
 $columnName ="";

class MyDB extends SQLite3
{
    function __construct()
    {
         $this->open('database.db');
    }
}
$db = new MyDB();
if(  isset($_POST["bukID"]) &&  isset($_POST["text"]) && isset($_POST["columnNn"]) ) {
// assign local variables for the posted variables
    $bkID = $_POST["bukID"];
    $text = $_POST["text"];
    $columnName = $_POST["columnNn"];  

    $sql = "SELECT * FROM book_details  WHERE id = $bkID  LIMIT 1";
      $ret = $db->query($sql);
      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $book_id = $row["id"];  
        $qty = $row["book_quantity"];
        $bookTitles = $row["book_titles"];

      }//END OF WHILE LOOP

      $add_qty = $text - $qty;
      $new_quantity = $qty + $add_qty;

      if (   $_POST["columnNn"] == "quantity"    ){
	   
        $sql2 = "UPDATE book_details SET book_quantity='$new_quantity' WHERE id = '$book_id' "; // query the p
        $update2= $db -> exec($sql2);

      }//end of if (   $_POST["columnNn"] == "quantity"    )

      echo "<b style='color:blue; font-size:16px'>Book Quantity With Name <strong style='color:red; font-size:22px; font-weight:bold; font-family:Adobe Fangsong Std R'> ".$bookTitles."</strong> <br> 
      Was Successfully Updated. <br> New value added <strong style='color:red; font-size:16px; font-weight:bold;'>
       ".$add_qty."</strong>, old value <strong style='color:red; font-size:16px; font-weight:bold;'> 
       ".$qty."</strong>, new quantity <strong style='color:red; font-size:16px; font-weight:bold;'> 
       ".$new_quantity."</b> </strong>";
      exit();
      
}//end of if isset

?>