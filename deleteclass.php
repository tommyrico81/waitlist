<?php include 'dbconnect.php';?>

<?php

$_TableName = $_POST['classroom'];

echo $_TableName . '<br>';

$SQLstring = "DROP TABLE $_TableName;";
$QueryResult = @mysql_query($SQLstring, $DBConnect);
	header("Refresh: 3; url=\"http://newchildapp-ncsdev.rhcloud.com/selectlist.php");
	echo "<p>" . $_TableName . " has been deleted.<br>";
	

if($QueryResult === FALSE){
	
	echo "<p>Unable to upload data. Error code " .
               mysql_errno($DBConnect) . ": " . 
               mysql_error($DBConnect) . "</p>\n";
          ++$errors;
}

?>

<?php include 'dbdisconnect.php';?>