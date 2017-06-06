<?php include 'dbconnect.php';?>

<?php

$_TableName = $_POST['classroom'];

$_cfname = $_POST['cfname'];
$_clname = $_POST['clname'];
$_dob = $_POST['dob'];

$_pfname = $_POST['pfname'];
$_plname = $_POST['plname'];
$_email = $_POST['email'];
$_phone = $_POST['phone'];

$_startDate = $_POST['startdate'];


if($_cfname === "" || $_clname === "" || $_startDate === ""){
	
		header("Refresh: 2; url=\"http://newchildapp-ncsdev.rhcloud.com/waitlist.php\"");
		echo "<p>Please enter all fields<br>";


	} else {

		$SQLstring = "INSERT INTO $_TableName VALUES('\N','$_cfname','$_clname','$_dob','$_pfname','$_plname','$_email','$_phone','$_startDate');";
		$QueryResult = @mysql_query($SQLstring, $DBConnect);
		header("Refresh: 3; url=\"http://newchildapp-ncsdev.rhcloud.com");
		echo "<p>Thank you!<br>";
		echo "<p>" . $_cfname . " has been added to the waitlist.<br>";
		echo "<p>Your desired start date is " . $_startDate . "<br>";
}

if($QueryResult === FALSE){
	
	echo "<p>Unable to upload data. Error code " .
               mysql_errno($DBConnect) . ": " . 
               mysql_error($DBConnect) . "</p>\n";
          ++$errors;
}

?>

<?php include 'dbdisconnect.php';?>


<!-- create table pretot(new_id int NOT NULL PRIMARY KEY AUTO_INCREMENT, cfname char(30), clname char(30), dob char(10), pfname char(30), plname char(30), email char(30), phone char(15), startdate char(10)); -->
