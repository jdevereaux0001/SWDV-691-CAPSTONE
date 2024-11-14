<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '1Master01','VTT');

// get the post records
$txtStudentID = $_POST['txtStudentID'];
$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$txtDegreeName = $_POST['txtDegreeName'];
$txtstartDate = $_POST['txtstartDate'];
$txtgradDate = $_POST['txtgradDate'];
$txtprofName = $_POST['txtprofName'];
$txtIntTravel = $_POST['txtIntTravel'];
$txtDomTravel = $_POST['txtDomTravel'];
$txtResorts = $_POST['txtResorts'];
$txtBeach = $_POST['txtBeach'];
$txtGaming = $_POST['txtGaming'];
$txtReading = $_POST['txtReading'];
$txtRoughingIt = $_POST['txtRoughingIt'];
$txtFishing = $_POST['txtFishing'];
$txtOptIn = $_POST['txtOptIn'];

// Insert into VTT.student table
$sql = "INSERT INTO 'student' ('studentID', 'firstName', 'lastName', 'startDate', 'email', 'vacationHrs', 'sickHrs', 'personalHrs') VALUES ('$txtStudentID', '$txtFirstName', '$txtLastName', '$txtStartDate', '$txtEmail', '$txtVacationHrs', '$txtSickHrs', '$txtPersonalHrs')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Student account successfully inserted";
}
// Insert into VTT.preferences table
$sql = "INSERT INTO 'preferences' ('studentID', 'optin', 'intTravel', 'domTravel', 'resorts', 'beach', 'gaming', 'reading', 'roughingIt', 'fishing') VALUES ('$txtStudentID', '$txtOptIn', '$txtIntTravel', '$txtDomTravel', '$txtResorts', '$txtBeach', '$txtGaming', '$txtReading', '$txtRoughingIt', '$txtFishing')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Student preferences successfully inserted";
}

?>