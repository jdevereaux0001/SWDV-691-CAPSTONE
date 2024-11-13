<html>
//  Week 6 - Assignment 3
//  The purpose of this PHP script is to show the many uses of arithmetic operators
//  that PHP has to offer.
<body>
<?php
$currWeight = $_GET["weight"];
$lessWeight = $currWeight - 20;
$moreWeight = $currWeight + 20;
$divWeight = $currWeight / 20;
$remWeight = $currWeight % 20;
$multWeight = $currWeight * 20;
$moonWeight = $currWeight * 0.165;
$jupiterWeight = $currWeight * 2.53;
$celsiusTemp = (($currWeight - 32) * 0.55555556);

echo ("Your current weight is " . $currWeight);
echo ("If you lost 20 pounds, you would weigh " . $lessWeight);
echo ("If you gained 20 pounds, you would weigh " . $moreWeight);
echo ("If you divided your weight by 20 pounds, you would weigh " . $divWeight);
echo ("The remainder after dividing your weight by 20 pounds is " . $remWeight);
echo ("If you multiplied your weight by 20 pounds, you would weigh " . $multWeight);
echo ("On the Moon, you would weigh " . $moonWeight);
echo ("On Jupiter, however, you would weigh " . $jupiterWeight);
echo ("If your weight was a temperature in Fahrenheit, it would be converted into Celsius as " . $celsiusTemp);
?>
</body>
</html>