<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

function lookupStudent($txtMaryvilleID)
  {
    $servername = "localhost";
    $username = "jdevro";
    $password = "1Master01";

// Create connection
    $conn = new mysqli($servername, $username, $password);

// Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
//connect to database
//    $connection = mysqli_connect("localhost", "jdevro", "1Master01", "VTT", "3306");

//run the store proc
    $result = mysqli_query("SELECT * FROM student WHERE studentID = '$txtMaryvilleID'");    
//    $result = mysqli_query($connection, "SELECT * FROM student WHERE studentID = '$txtMaryvilleID'");
    
    $row = mysqli_fetch_row($result);

    $savedStudentID = $row["studentID"];
    $savedFirstName = $row["firstName"];
    $savedLastName = $row["lastName"];
    $savedStartDate = $row["startDate"];
    $savedEmail = $row["email"];
    $savedVacationHrs = $row["vacationHrs"];
    $savedSickHrs = $row["sickHrs"];
    $savedPersonalHrs = $row["personalHrs"];

    echo($row);

    return $row;
  }
  mysqli_close($conn);

?>