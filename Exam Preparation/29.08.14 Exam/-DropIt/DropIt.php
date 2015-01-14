<?php


$text = $_GET['text'];
$minFontInput = (int)$_GET['minFontSize'];
$maxFontInput = (int)$_GET['maxFontSize'];
$step = $_GET['step'];
$textLenght = strlen($text);

$fontArr = [];
$counter  = $minFontInput;
$checker = true;

for($i=0;$i<$textLenght;$i++){

    $fontArr[] = $counter;
    $counter+=$step;
        if($counter>$maxFontInput){
            $fontArr[] = $counter;
            break;
        }


}




var_dump($fontArr);

