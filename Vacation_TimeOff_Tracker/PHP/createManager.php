<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3306', 'root', '1Master01','VTT');

// get the post records
$txtUserID = $_POST['txtUserID'];
$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtEmail = $_POST['txtEmail'];

// database insert SQL code
$sql = "INSERT INTO 'manager' ('managerID', 'firstName', 'last_name', 'email') VALUES ('$txtUserID', '$txtFirstName', '$txtLastName', '$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Manager account successfully created";
}

?>