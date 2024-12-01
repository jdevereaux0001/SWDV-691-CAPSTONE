<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'jdevro', '1Master01','vtt');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// get the post records
$txtStudentID = $_POST['txtStudentID'];
$txtTimeoffDate = $_POST['txtTimeoffDate'];
$txtTimeoffCd = $_POST['txtTimeoffCd'];
$txtTimeoffHrs = $_POST['txtTimeoffHrs'];
$txtApprovalReq = $_POST['txtApprovalReq'];
$txtManagerID = $_POST['txtManagerID'];

// database insert SQL code
$sql = "INSERT INTO 'timeoff' ('studentID', 'timeoffDate', 'timeoffCd', 'timeoffHrs', 'approvalReq', 'managerID') VALUES ('$txtStudentID', '$txtTimeoffDate', '$txtTimeoffCd', '$txtTimeoffHrs', '$txtApprovalReq', '$txtManagerID')";

$result1 = $conn->query($sql1);

?>