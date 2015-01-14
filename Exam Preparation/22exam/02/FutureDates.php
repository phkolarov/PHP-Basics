<?php


date_default_timezone_set('UTC');

$numberString = $_GET['numbersString'];
$text = $_GET['dateString'];

$replacedWords = preg_replace('/\d*[A-Za-z]+\d*[A-Za-z]*\d*/', "", $numberString);

preg_match_all('/\d+/',$replacedWords,$arrNums);

$sumed = 0;
foreach ($arrNums[0] as $num) {

    $sumed+=$num;
}
$revnum = strrev($sumed);

preg_match_all('/\b[\d+]{4}-1*\0*[1-9]{2}-[0-3][0-9]\b/',$text,$dates);

if(!empty($dates[0])){


echo "<ul>";
foreach ($dates[0] as $date) {

    $NewDate = date('Y-m-d', strtotime($date . " $revnum days"));
    echo "<li>";
    echo htmlspecialchars($NewDate);
    echo "</li>";

}
echo "</ul>";
}

else{
echo "<p>No dates</p>";
}


