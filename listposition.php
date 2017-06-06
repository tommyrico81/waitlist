<?php
include 'dbconnect.php';

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

$DBConnect = @mysql_connect("127.11.212.2:3306","adminB7KGkJq","kYH5FefMBe4t","waitlistDB");
	
	if($DBConnect === FALSE){
		
		echo "<p>Unable to connect to the database.</p>" .
		"<p>Error code " . mysql_errno() . "</p>";	
	} else {
		
		$DBName = "waitlistDB";
		if(!@mysql_select_db($DBName, $DBConnect)){
			
			echo "<p>There are no entries available</p>";	
		} 
		else {
			$TableName = 'infant';
			$SQLstring = "SELECT * FROM $TableName";
			$QueryResult = @mysql_query($SQLstring, $DBConnect);
			
			if(mysql_fetch_assoc($QueryResult) !== FALSE){
				while(($Row = mysql_fetch_assoc($QueryResult)) !== FALSE) {
				
			 	
					
					
				}
			}
			else {
				echo "<p>There are no entries within this list</p>";
			}
		}
	}

include 'dbdisconnect.php';
?>