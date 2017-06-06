<html lang="us">
<head>
<?php include 'header.php'; ?>
</head>
<body>

<div id="l1">
<div id="l2">
<h2 style="text-align: center;">Early Horizon Waitlist</h2>
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

$TableName = $_POST['classroom'];

/*echo $TableName;*/

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
		
			$SQLstring = "SELECT * FROM $TableName";
			$QueryResult = @mysql_query($SQLstring, $DBConnect);
			
			/*if(mysql_fetch_assoc($QueryResult) !== FALSE){*/
				while(($Row = mysql_fetch_assoc($QueryResult)) !== FALSE) {
				
			 	
					
					echo "<div id='infobox'>";
					
					echo "<div id='databox'>";
					echo "Child Name: {$Row['cfname']} {$Row['clname']}<br>";
					echo "Parent Name: {$Row['pfname']} {$Row['plname']}<br>";
					echo "Phone: {$Row['phone']}<br>";
					echo "Email: {$Row['email']}<br>";
					echo "Start Date: {$Row['startdate']}<br>";
					echo "</div>";
					
					echo "<div id='managebox'>";
					echo "<form method='POST' action='deletechild.php'>";
					echo "<input type='submit' value='Delete'/>";
					echo "<input type='hidden' name='classroom' value= $TableName /> ";
					echo "<input type='hidden' name='cfname' value='{$Row['cfname']}'/> ";
					echo "<input type='hidden' name='clname' value='{$Row['clname']}'/> ";
					echo "<input type='hidden' name='id' value='{$Row['new_id']}'/> ";
					echo "</form>";
					echo "</div>";
					
					echo "</div>";
					
					
				}
			/*}
			else {
				echo "<p>There are no entries within this list</p>";
			}*/
		}
	}
?>
<?php include 'dbdisconnect.php'; ?>

</body>
<?php include 'footer.php'; ?>

</html>
