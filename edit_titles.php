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
if(  isset($_POST["bukIDs"]) &&  isset($_POST["txt"]) && isset($_POST["columnNns"]) ) {
// assign local variables for the posted variables
    $bkID = $_POST["bukIDs"];
    $text = $_POST["txt"];
    $columnName = $_POST["columnNns"];  

    $sql = "SELECT * FROM book_details  WHERE id = $bkID  LIMIT 1";
      $ret = $db->query($sql);
      while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $book_id = $row["id"];  
        $qty = $row["book_quantity"];
        $bookTitles = $row["book_titles"];

      }//END OF WHILE LOOP


      if (   $_POST["columnNns"] == "bookTitles"    ){
	   
        $sql2 = "UPDATE book_details SET book_titles ='$text' WHERE id = '$book_id' "; // query the p
        $update2= $db -> exec($sql2);

      }//end of if (   $_POST["columnNn"] == "quantity"    )

      echo "<b style='color:blue; font-size:16px'>Book Title With Name
       <strong style='color:red; font-size:22px; font-weight:bold; font-family:Adobe Fangsong Std R'> 
       <b style='color:green; font-size:30px'>".$bookTitles."</b></strong> <br> 
      Was Successfully Updated. </strong>";
      exit();
      
}//end of if isset

?>