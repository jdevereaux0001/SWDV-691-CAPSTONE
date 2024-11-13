<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '1Master01','Blazing_Trails');

// get the post records
$txtUsername = $_POST['txtUsername'];
$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtPhoneNum = $_POST['txtPrimaryPhone'];
$txtEmailAddr = $_POST['txtPrimaryEmail'];
$txtCommentBox = $_POST['txtCommentBox'];
$txtContactMe = $_POST['txtContactMe'];
$txtContactVia = $_POST['txtContactVia'];

// database insert SQL code
$sql = "INSERT INTO `BT_contact_us` (`username`, `firstName', 'lastName', telephone`, `email`, `comments`, `contactMe`, `contactVia`) VALUES ('$txtUsername', '$txtFirstName', '$txtLastName', '$txtPhoneNum', '$txtEmailAddr', '$txtCommentBox', '$txtContactMe', '$txtContacVia')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Us Record Inserted";
}

?>