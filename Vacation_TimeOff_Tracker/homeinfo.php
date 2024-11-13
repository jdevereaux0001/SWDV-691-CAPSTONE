<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '1Master01','home_info');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT * FROM Cantiere WHERE home_id = '$txtHomeID'";

	$result = mysqli_query($sql1, $conn);
    
    $details = mysqli_fetch_array($result);

    $savedNomeCantiere = $details["nomeCantiere"];
    $savedCodiceCommessa = $details["codiceCommessa"];
    $savedIndirizzoCantiere = $details["indirizzoCantiere"];

var_dump($details);


$result1 = $conn->query($sql1);

echo($nomeCantiere);

?>