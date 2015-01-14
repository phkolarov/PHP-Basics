<?php


$text = $_GET['text'];
$key = $_GET['key'];

$splittedKey = preg_split("//", $key,-1,PREG_SPLIT_NO_EMPTY);
$firstElement = $splittedKey[0];
$lastElement = $splittedKey[count($splittedKey)-1];

$pattern = $firstElement;


for($i=1;$i<=strlen($key)-1;$i++){

    if(ctype_digit($key[$i])){
        $pattern= $pattern.'\d*';

    }
    elseif(ctype_upper($key[$i])){
        $pattern= $pattern.'[A-Z]*';
    }
    elseif(ctype_lower($key[$i])){
        $pattern=  $pattern.'[a-z]*';
    }
    else{
        $pattern= $pattern."\\$key[$i]";
    }

}

$pattern = $pattern.$lastElement;


$pattern = $pattern.'(.{2,6})'.$pattern;

//var_dump($pattern);
//$pattern = $pattern.$lastElement;


$pattern = '/'.$pattern.'/';
preg_match_all($pattern, $text, $words);


$newText = implode('',$words[1]);


echo $newText;
