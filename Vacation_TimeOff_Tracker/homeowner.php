<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '1Master01','home_owner');

// get the post records
$txtHomeID = $_POST['txtHomeID'];
$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtAddress1 = $_POST['txtAddress1'];
$txtAddress2 = $_POST['txtAddress2'];
$txtCity = $_POST['txtCity'];
$txtState = $_POST['txtState'];
$txtZipcode5 = $_POST['txtZipcode5'];
$txtUsername = $_POST['txtUsername'];

// database insert SQL code
$sql = "INSERT INTO `home_owner` (`home_id`, `first_name`, `last_name`, `address1`, `address2`, `city`, `state`, `zipcode5`, `username`) VALUES ('$txtHomeID', '$txtFirstName', '$txtLastName', '$txtAddress1', '$txtAddress2', '$txtCity', '$txtState', '$txtZipcode5', '$txtUsername')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Home Owner Record Inserted";
}

?>