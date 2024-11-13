<html>
<body>
<?php
$carprice = array('2015 Ferrari California' => 115000, '2001 Lamborghini Diablo' => 230000, '2007 Porsche 911 Turbo' => 106000, '2011 Bugati Veyron' => 1900000, '2019 Pagani Huayra Roadster' => 3400000);
asort($carprice);
foreach($carprice as $car => $price)
{
echo ("The price of " . $car . " is " . $price . "<br>");
$reasonableOffer = $price * 0.9;
echo ("A reasonable offer for the " . $car . " is " . $reasonableOffer . "<br>");
}

$car = $_GET["car"]; 
$price = $carprice[$car][0]
$reasonableOffer = $price * 0.9;
echo ("A reasonable offer for the " . $car . " selected is " . $reassonableOffer . "<br>");

switch ($_GET["offer"])
{
    case 0:
        echo ("Please enter a valid offer.");
        break;
    case < $reasonablePrice:
        echo ("Please enter a more reasonable offer.");
        break;
    case >= $reasonablePrice:
        echo ("You have submitted a reasonable offer.  Our Sales team will be in touch!");
        break;
    default:
        echo ("Our Sales Team will review your offer and get back with you shortly!");
        break;
}
?>
</body>
</html>