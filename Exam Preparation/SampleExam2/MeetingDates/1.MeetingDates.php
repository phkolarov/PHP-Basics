<?php

date_default_timezone_set ( 'UTC' );

$startDate = $_GET['dateOne'];
$endDate = $_GET['dateTwo'];

$dateOne = new DateTime($startDate);
$dateTwo = new DateTime($endDate);

$thursdays = [];

($dateOne>$dateTwo)? $dateOne=$dateTwo:$dateOne = new DateTime($startDate) ;
if($dateOne==$dateTwo){
    $dateTwo = new DateTime($startDate);
}



while($dateOne<=$dateTwo){

    $day = $dateOne->format('N');
    if($day == "4") {
        $thursdays[] = $dateOne->format('d-m-Y');
    }
        $dateOne->modify('1 day');


}


if(!empty($thursdays)){
    echo "<ol>";
    foreach ($thursdays as $thursday) {
        echo "<li>$thursday</li>";
    }
    echo "</ol>";

}
else{
    echo "<h2>No Thursdays</h2>";
}