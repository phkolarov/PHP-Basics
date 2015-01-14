<?php
$firstNumber1 = 2;
$secondNumber1 = 5;
$firstNumber2 = 1.567808;
$secondNumber2 = 0.356;
$firstNumber3 = 1234.5678;
$secondNumber3 = 333;

$result = $firstNumber2+$secondNumber2;
$result = number_format((float)$result,2);
?>

<p>$firstNumber + $secondNumber <?=$firstNumber2?> + <?=$secondNumber2?> = <?=$result?></p>