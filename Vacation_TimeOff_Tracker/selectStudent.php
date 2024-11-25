<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '1Master01','VTT');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT * FROM student WHERE home_id = '$txtMaryvilleID'";

	$result = mysqli_query($sql1, $conn);
    
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

echo($savedStudentID, $savedFirstName, $savedStartDate, $savedVacationHrs, $savedSickHrs, $savedPersonalHrs);

?>