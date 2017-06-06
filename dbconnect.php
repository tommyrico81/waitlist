<?php

$errors = 0;

if($errors == 0){
	$DBConnect = @mysql_connect("127.11.212.2:3306","adminB7KGkJq","kYH5FefMBe4t","waitlistDB");
	
	if($DBConnect === FALSE) {
		
		echo "<p>Unable to connect to the database server. " .
               "Error code " . mysql_errno() . ": " .
               mysql_error() . "</p>\n";	
	} else {
          $DBName = "waitlistDB";
          $result = @mysql_select_db($DBName, $DBConnect);
          if ($result === FALSE) {
               echo "<p>Unable to select the database. " .
                    "Error code " . mysql_errno($DBConnect) . 
                    ": " . mysql_error($DBConnect) . "</p>\n";
               ++$errors;
		  }
	}
}


?>
