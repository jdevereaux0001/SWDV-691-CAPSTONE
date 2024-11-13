<html>
<body>
<?php
$carprice = array('2015 Ferrari California' => 115000, '2001 Lamborghini Diablo' => 230000, '2007 Porsche 911 Turbo' => 106000, '2011 Bugati Veyron' => 1900000, '2019 Pagani Huayra Roadster' => 3400000);
asort($carprice);
foreach($carprice as $car => $price)
{
echo ("The price of " . $car . " is " . $price . "<br>");
$reasonableOffer = $price * 0.9;
echo ("A reasonable price for " . $car . " is " . $reasonableOffer . "<br>");
}
$car = $_GET["car"];
$offer = $_GET["offer"];
echo ("Your offer of " . $offer . " for the " . $car . " car is being reviewed by our Sales team." . "<br>")
?>
</body>
</html>