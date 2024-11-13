<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '1Master01','Blazing_Trails');

// get the post records
$txtUsername = $_POST['txtUsername'];
$txtPassword = $_POST['txtPassword'];
$txtRePassword = $_POST['txtRePassword'];
$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtPrimaryPhone = $_POST['txtPrimaryPhone'];
$txtAltPhone = $_POST['txtAltPhone'];
$txtPrimaryEmail = $_POST['txtPrimaryEmail'];
$txtEmergencyContactName = $_POST['txtEmergencyContactName'];
$txtEmergencyPhone = $_POST['txtEmergencyPhone'];
$txtEmergencyEmail = $_POST['txtEmergencyEmail'];
$txtMailingList = $_POST['txtMailingList'];

// database insert SQL code
$sql = "INSERT INTO `BT_account` (`username`, `password', 'rePassword', firstName`, `lastName`, `priPhoneNum`, `altPhoneNum`, `emailAddr`, 'emergencyContact, 'emergencyPhone', 'emergencyEmail', mailingList') VALUES ('$txtUsername', '$txtPassword', '$txtRePassword', '$txtFirstName', '$txtLastName', '$txtPrimaryPhone', '$txtAltPhone', '$txtPrimaryEmail', '$txtEmergencyContactName', '$txtEmergencyPhone', '$txtEmergencyEmail', '$txtMailingList')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Account Record Inserted";
}

?>