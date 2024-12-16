<?php
// database connection code
// $con = mysqli_connect('server', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3306', 'root', '1Master01','vtt');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT * FROM admin";

	$result = mysqli_query($conn, $sql1);
    
    $details = mysqli_fetch_array($result);

    $savedAdminID = $details["adminID"];

var_dump($details);


$result1 = $conn->query($sql1);

?>