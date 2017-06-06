<?php include 'dbconnect.php';?>

<?php

$_TableName = $_POST['classroom'];


$_cfname = $_POST['cfname'];
$_clname = $_POST['clname'];
$_id = $_POST['id'];

/*echo $_cfname . '<br>';
echo $_id . '<br>';
echo $_TableName . '<br>';*/



$SQLstring = "DELETE FROM $_TableName WHERE new_id = $_id";
$QueryResult = @mysql_query($SQLstring, $DBConnect);
	header("Refresh: 3; url=\"http://newchildapp-ncsdev.rhcloud.com/viewlist.php");
	echo "<p>" . $_cfname . " " . $_clname . " has been successfully deleted from the waitlist.<br>";
	

if($QueryResult === FALSE){
	
	echo "<p>Unable to upload data. Error code " .
               mysql_errno($DBConnect) . ": " . 
               mysql_error($DBConnect) . "</p>\n";
          ++$errors;
}

?>

<?php include 'dbdisconnect.php';?>


<!-- create table pretot(new_id int NOT NULL PRIMARY KEY AUTO_INCREMENT, cfname char(30), clname char(30), dob char(10), pfname char(30), plname char(30), email char(30), phone char(15), startdate char(10)); -->
