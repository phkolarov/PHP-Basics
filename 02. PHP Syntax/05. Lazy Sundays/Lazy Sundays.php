<?php

$curMonth = date("m")." ";

for($i=1;$i<=31;$i++){

    $day = $i." ";
    $month = $curMonth;
    $year = date("Y")." ";

    $date = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date($i), date("Y")) , 1 );


    if($date=='Sunday'){

        echo $day."-".$month."-".$year."<br><br>";

    }

}
?>