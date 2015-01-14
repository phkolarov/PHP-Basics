<?php
date_default_timezone_set('UTC');

$firstDate = $_GET['dateOne'];
$secondDate = $_GET['dateTwo'];

$holyDays = $_GET['holidays'];
$holyDays = preg_split('/[\n\r]+/',$holyDays);
foreach ($holyDays as $key => $holy) {

    $trimed = trim($holy);
    $holyDays[$key]=$trimed;
}


$dateOne = new DateTime($firstDate);
$dateTwo = new DateTime($secondDate);

$diff = $dateOne->diff($dateTwo);
$diffDays = $diff->days;

$arrDates = [];


for($i=0;$i<=$diffDays;$i++){

    $mdate = $dateOne->format('d-m-Y');
    array_push($arrDates,$mdate);
    $dateOne->modify('+1 day');



}


foreach ($arrDates as $key =>$date) {
        $var= $date;
    foreach ($holyDays as $holy) {
        if($var==$holy){
            unset($arrDates[$key]);
        }
        elseif(isWeekend($date)){
            unset($arrDates[$key]);
        }

    }
}

if(count($arrDates)!=0) {
    echo "<ol>";
    foreach ($arrDates as $outDate) {
        echo "<li>$outDate</li>";
    }
    echo "</ol>";
}
else{
    echo "<h2>No workdays</h2>";
}

function isWeekend($date) {
    return (date('N', strtotime($date)) >= 6);
}

