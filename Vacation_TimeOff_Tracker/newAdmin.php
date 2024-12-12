<?php
$servername = "localhost";
$username = "root";
$password = "1Master01";
$dbname = "vtt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to insert data
$sql = "INSERT INTO admin (adminID) VALUES ('$txtAdminID')";

if (mysqli_query($conn, $sql)) {
    echo "Admin record created successfully";
} else {
    echo "Admin record failed with error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>