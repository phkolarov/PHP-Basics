<?php

date_default_timezone_set ( 'UTC' );

$text = $_GET['text'];

preg_match_all('/\s*([A-Za-z\s\-]+)%\s*([A-Za-z\s\-\.]+);\s*(\d{2}-\d{2}-\d{4})-(.*)/',$text,$splitedElements,PREG_SET_ORDER);

var_dump($text);
foreach ($splitedElements as $arrays) {


    $trimedArr = array_map('trim',$arrays);
    unset($trimedArr[0]);

    //Get month
    $trimedArr= array_values($trimedArr);
    $date = new DateTime($trimedArr[2]);
    $date =  $date->format('F');

    //Get text
    $text = substr($trimedArr[3],0,100)."...";


    echo  "<div>\n";
    echo  '<b>Topic:</b>'.' <span>'.htmlspecialchars($trimedArr[0])."</span>\n";
    echo  '<b>Author:</b>'.' <span>'.htmlspecialchars($trimedArr[1])."</span>\n";
    echo  '<b>When:</b>'.' <span>'.$date."</span>\n";
    echo  '<b>Summary:</b>'.' <span>'.htmlspecialchars($text)."</span>\n";
    echo "</div>\n";



}

