<?php


$childName = $_GET['childName'];
$present = $_GET['wantedPresent'];

$riddles = preg_split('/;/', $_GET['riddles']);

$rChildName = preg_replace("/ /", "-",$childName );

$childCount = strlen($childName);
$riddleCount = count($riddles);

$snum = $childCount%$riddleCount;
$numOfRiddle = 0;


if($snum==0){

    $numOfRiddle = $riddleCount-1;
}
else{
    $numOfRiddle = $snum-1;
}


$presentOut = htmlspecialchars($present);
$riddlesOut = htmlspecialchars($riddles[$numOfRiddle]);

echo "\$giftOf".htmlspecialchars($rChildName)." = $[wasChildGood] ? '$presentOut' : '$riddlesOut';";