<?php

date_default_timezone_set('UTC');


$name = $_GET['name'];
$egn = $_GET['pin'];

$gender = $_GET['gender'];
$checkSumNums = [2,4,8,5,10,9,7,3,6];

$outPutArray = [];

preg_match_all('/[A-Z][a-z]+/', $name, $fullName);

if(count($fullName[0])!=2 || strlen($egn)!= 10){

    echo "<h2>Incorrect data</h2>";
    die;
}

preg_match('/(\d{2})(\d{2})(\d{2})/',$egn,$bDate);
unset($bDate[0]);
$bDate= array_values($bDate);


if($bDate[1]>12&& $bDate[1]<21){
    echo "<h2>Incorrect data</h2>";
    die;
}
elseif($bDate[1]>32 && $bDate[1]<41){
    echo "<h2>Incorrect data</h2>";
    die;
}

elseif($bDate[1]<1 || $bDate[1]>52){
    echo "<h2>Incorrect data</h2>";
    die;
}

elseif($bDate[1]>20 && $bDate[1]<33){

    $bdFormat = $bDate[2]."-".($bDate[1]-20)."-"."18".$bDate[0];

    $birthDate = DateTime::createFromFormat('d-m-Y',$bdFormat);

}
elseif($bDate[1]>40 && $bDate[1]<53){
        $month = $bDate[1]-40;
    if($month<10){
        $month = "0".$month;
    }

    $bdFormat = $bDate[2]."-".($bDate[1]-40)."-"."20".$bDate[0];

    $birthDate = DateTime::createFromFormat('d-m-Y',$bdFormat);

}
elseif($bDate[1]>0 && $bDate[1]<13){

    $bdFormat = $bDate[2]."-".$bDate[1]."-".$bDate[0];

    $birthDate = DateTime::createFromFormat('d-m-y',$bdFormat);

}

preg_match('/\d{2}\d{2}\d{2}(\d{3})/',$egn,$genderNum);



$result = checkSumChecker($egn,$checkSumNums);
if($result==false){
    echo "<h2>Incorrect data</h2>";
    die;
}


$outPutArray['name']=$name;
$outPutArray['gender']=$gender;
$outPutArray['pin']=$egn;

$totalRezult = json_encode($outPutArray);

echo $totalRezult;





function checkSumChecker($fulEGN,$checkSums){

    $result = 0;
    $somestr ="";


for($i=0;$i<strlen($fulEGN)-1;$i++){

    $result += $fulEGN[$i]*$checkSums[$i];
    $somestr = $somestr."$i";
}
    $count = $fulEGN[strlen($fulEGN)-1];
   if($result%11==$count || $result== $count){
       return true;
   }
   elseif($result%11==10 && $count==0){
       return false;

   }

    else {
        return false;
    }

}






