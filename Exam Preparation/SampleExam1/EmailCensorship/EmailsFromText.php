<?php

$text = $_GET['text'];
$textBanned = $_GET['blacklist'];



$bannedList = preg_split('/[\n\r]+/',$textBanned);
//preg_match_all('/\b[A-Za-z\d\+\_\-]+@[A-Za-z\d\-]+\.[A-Za-z\d-\.]+\b/',$text,$emails );


$bannedList = array_filter($bannedList);

foreach ($bannedList as $d => $mail) {

    if(strpos($text,$mail)){
        $repeater = strlen($mail);
        $stars = str_repeat("*",$repeater);
        $text = preg_replace("/$mail/",$stars,$text);
        unset($bannedList[$d]);
    }
}

$newArray = array_values($bannedList);

foreach ($newArray as $dig => $mail) {

    $var = '*';
    $pos = strpos($mail,$var);

    if($pos==0){

       $domain = substr($mail,2,strlen($mail));

        $newArray[$dig] = $domain;
        $pattern = "/\b[A-Za-z\d\+\_\-]+@[A-Za-z\d\-]+\.$domain\b/";
        preg_match_all($pattern,$text,$newText);
        $stars = str_repeat("*",strlen($newText[0][0]));
        $text = preg_replace($pattern,$stars,$text);

   }

}

preg_match_all('/\b[A-Za-z\d\+\_\-]+@[A-Za-z\d\-]+\.[A-Za-z\d-\.]+\b/',$text,$unfindedLinks);


foreach ($unfindedLinks[0] as $mail) {

    $link = "<a href=\"mailto:$mail\">$mail</a>";
    if(strpos($text,$mail)>=0){

       $text = preg_replace("/$mail/",$link,$text);

    }

}
echo "<p>".$text."</p>";
