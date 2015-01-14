<?php

$input = 1234;


for($i=1;$i<=$input;$i++){
    $result;
    if($i<10){
        $result=true;
    }
    else {
        $result = truer($i);
    }
    if($result==true){
        echo $i."<br>";
    }

    else continue;

}

function truer($input){

    $splited = str_split($input, 1);

    $checker = true;

    for($i=0;$i<count($splited);$i++){

        for($k=$i+1;$k<count($splited);$k++){

            if($splited[$i]==$splited[$k]){

                $checker = false;
            }

        }

    }

    if($checker==true){
        return true;
    }
    else return false;

}

?>