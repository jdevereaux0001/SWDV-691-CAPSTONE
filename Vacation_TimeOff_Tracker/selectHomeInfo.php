<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '1Master01','home_info');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT * FROM home_info WHERE home_id = '$txtHomeID'";

	$result = mysqli_query($sql1, $conn);
    
    $details = mysqli_fetch_array($result);

    $homeID = $details["home_id"];
    $location = $details["location"];
    $room = $details["room"];
    $placement = $details["placement"];
    $material = $details["material"];
    $brand = $details["brand"];
    $color = $details["color"];
    $purchaseStore = $details["purchase_store"];
    $purchaseDate = $details["purchase_date"];
    $purchaseStoreZip5 = $details["purchase_store_zip5"];
    $purchaseWebsite = $details["purchase_store_website"];
    
var_dump($details);


$result1 = $conn->query($sql1);

echo($homeID);

?>