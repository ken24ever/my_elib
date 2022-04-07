<?php

class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }
        $db = new MyDB();
        $sql1 = "SELECT  COUNT(classLevel) AS numOfjssThree FROM names_of_persons WHERE classLevel = 'jssThree' ";
        $ret1 = $db->query($sql1);
        while($row4 = $ret1->fetchArray(SQLITE3_ASSOC) ){
          $TotalClass= $row4["numOfjssThree"];
        
       }//end of while loop

       echo $TotalClass;


?>