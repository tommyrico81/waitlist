<html lang="us">
<head>
<?php include 'header.php'; ?>
</head>
<body>
<?php include 'dbconnect.php';?>

<?php

$_TableName = $_POST['classname'];

echo $_TableName;

	$SQLstring = "CREATE TABLE $_TableName(new_id int NOT NULL PRIMARY KEY AUTO_INCREMENT, cfname char(30), clname char(30), dob char(10), pfname char(30), plname char(30), email char(30), phone char(15), startdate char(10));";
	$QueryResult = @mysql_query($SQLstring, $DBConnect);
	header("Refresh: 3; url=\"http://newchildapp-ncsdev.rhcloud.com/selectlist.php");
	echo "<p>" . $_TableName . " successfully created<br>";

if($QueryResult === FALSE){
	echo "<p>Unable to upload data. Error code " .
               mysql_errno($DBConnect) . ": " . 
               mysql_error($DBConnect) . "</p>\n";
          ++$errors;
}
?>

<?php include 'dbdisconnect.php';?>

<!-- create table pretot(new_id int NOT NULL PRIMARY KEY AUTO_INCREMENT, cfname char(30), 
clname char(30), dob char(10), pfname char(30), plname char(30), email char(30), 
phone char(15), startdate char(10)); -->

</body>
<?php include 'footer.php'; ?>
</html>

