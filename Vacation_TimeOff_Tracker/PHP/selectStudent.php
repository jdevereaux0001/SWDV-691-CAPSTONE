<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// database connection code
// $con = mysqli_connect('server', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3306', 'root', '1Master01','vtt');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT * FROM student WHERE studentID = '624627'";

	$result = mysqli_query($conn, $sql1);
    
    $details = mysqli_fetch_array($result);

    $savedStudentID = $details["studentID"];
    $savedFirstName = $details["firstName"];
    $savedLastName = $details["lastName"];
    $savedStartDate = $details["startDate"];
    $savedEmail = $details["email"];
    $savedVacationHrs = $details["vacationHrs"];
    $savedSickHrs = $details["sickHrs"];
    $savedPersonalHrs = $details["personalHrs"];

var_dump($details);


$result1 = $conn->query($sql1);

?>