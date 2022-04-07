<?php
$status = "";
$admin_id= "";
$admin_pass="";

if ( isset($_POST["adminId"]) && isset($_POST["passWord"]) ){

//assign the posted variables to local variables    
$adminID = $_POST["adminId"];
$adminPassword = $_POST["passWord"];
if ($adminID =="" && $adminPassword ==""){

    $status .= "<strong style='color:red'> Login Failed, Empty Credentials <a href='admin.php'><button class='btn btn-info'>Go Back </button> </a> </strong>";
      
        }//end of if inner construct
        else{
class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }
        $db = new MyDB();

        // query Dbase for admin credentials to assertain its validity
        $sql = "SELECT * FROM administrator where admin101 = '".$adminID."' AND password101 ='".$adminPassword."' ";
        $ret = $db->query($sql);
        while($row = $ret -> fetchArray(SQLITE3_ASSOC) ){
           $admin_id = $row["admin101"];
           $admin_pass = $row["password101"];
        }//end of while
      
        if (($admin_id !=  $adminID) &&  ($admin_pass != $adminPassword) ){

            $status .= "<strong style='color:red'> Login Failed, Wrong Crecentials! <a href='admin.php'><button class='btn btn-info'>Go Back </button> </a> </strong>";
        }else if ( ($admin_id ==  $adminID) &&  ($admin_pass == $adminPassword) ){

            $status .= "<strong style='color:green'>Login Success</strong>";
            header("location:dashboard.php");
        }
        echo $status;
    }//end of if  else inner construct
 
}//end of if construct 

?>