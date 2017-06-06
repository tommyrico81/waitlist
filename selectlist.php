<html lang="us">
<head>
<?php include 'header.php'; ?>
</head>
<body>

<div id="l1">
<div id="l2">
<h2 style="text-align: center;">Early Horizon Waitlist</h2>

<?php include 'dbconnect.php';?>

<?php

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
			$SQLstring = "SELECT table_name FROM information_schema.tables where table_schema='waitlistDB';";
			$QueryResult = @mysql_query($SQLstring, $DBConnect);
			
	
				while(($Row = mysql_fetch_assoc($QueryResult)) !== FALSE) {	
				
					echo "<div id='infobox'>";
					echo "<div id='databox'>";
					echo "<form method='POST' action='viewlist.php'>";
					echo "{$Row['table_name']}<br>";
					echo "<input type='hidden' name='classroom' value='{$Row['table_name']}'/> ";
					echo "<input id='button' class='button' name='viewlist' type='submit' value='View List'/>";
					echo "</form>";
					echo "</div>";
			
					
					echo "<div id='managebox'>";
					echo "<form method='POST' action='deleteclass.php'>";
					echo "<input type='submit' value='Delete'/>";
					echo "<input type='hidden' name='classroom' value='{$Row['table_name']}'/> ";
					echo "</form>";
					echo "</div>";
					echo "</div>";
					
				}		
		}
	}
?>
<?php	
				
		echo "<div id='accordion'>
			  <h3>Add Classroom</h3>
			  <form method='POST' action='createclass.php'>
			  <label>Class Name</label>
	          <input id='classname' type='text' size='20' name='classname'/>
			  <input id='button' class='button' name='createclass' type='submit' value='Add Class'/>
		  	  </form>
			  </div>";

	
	
?>
<?php include 'dbdisconnect.php'; ?>

</body>
<?php include 'footer.php'; ?>

</html>