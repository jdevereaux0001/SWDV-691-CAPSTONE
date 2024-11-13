<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '1Master01','home_user');

// get the post records
$txtUserID = $_POST['txtUserID'];
$txtPassword = $_POST['txtPassword'];
$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtPrimaryPhone = $_POST['txtPrimaryPhone'];
$txtAltPhone = $_POST['txtAltPhone'];
$txtEmergencyContactName = $_POST['txtEmergencyContactName'];
$txtEmergencyPhone = $_POST['txtEmergencyPhone'];
$txtEmergencyEmail = $_POST['txtEmergencyEmail'];
$txtMemberSince = $_POST['txtMemberSince'];
$txtMailingList = $_POST['txtMailingList'];

// database insert SQL code
$sql = "INSERT INTO `home_user` (`userid`, `password`, `first_name`, `last_name`, `primary_phone`, `alt_phone`, `emergency_contact_name`, `emergency_phone`, 'emergency_email', `member_since`, 'mailing_list') VALUES ('$txtUserID', '$txtPassword', '$txtFirstName', '$txtLastName', '$txtPrimaryPhone', '$txtAltPhone', '$txtEmergencyContactName', '$txtEmergencyPhone', '$txtEmergencyEmail', 'current_date', '$txtMailingList')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Home User Record Inserted";
}

?>