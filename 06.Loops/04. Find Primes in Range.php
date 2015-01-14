<html>
<head>
<title>Find Prime in Range</title>
</head>
<body>


<form method="get">

    <label>Starting Index</label>
    <input type="number" name="snum">
    <label>End</label>
    <input type="number" name="enum">
    <input type="submit">

</form>

<?php

function primeChecker($number){

    $checker = gmp_prob_prime(@$number);

    if($checker== 1 || $checker==2){
        return true;
    }
    else{
        return false;
    }

//    for($i=2;$i<$number;$i++){
//
//        if(is_int($number/$i)){
//         return false;
//        }
//
//    }

}

if(isset($_GET['snum'])&& isset($_GET['enum'])){






    for($i=$_GET['snum'];$i<=$_GET['enum'];$i++){

        $cheker = primeChecker($i);

        if($cheker== false){
            echo $i." ";
        }
        else{

            echo "<b>$i</b> ";

        }

    }




}
?>




</body>



</html>