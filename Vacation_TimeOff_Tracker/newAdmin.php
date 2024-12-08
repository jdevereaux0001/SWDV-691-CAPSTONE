<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3306', 'root', '1Master01','VTT');

// get the post records
$txtAdminID = $_POST['txtAdminID'];

// database insert SQL code
$sql = "INSERT INTO 'admin' ('adminID') VALUES ('$txtAdminID')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Admin record successfully inserted";
}

?>