<html>
<head>

</head>
<body>

<?php
function palindrome($string){

    $revString = strrev($string);

    if($string== $revString){
        return true;
    }
    else {
        return false;
}
}

?>



<form method="get">

<input type="text" name="input">
    <input type="radio" id="pali"  name="value" value="palindrom" >
    <label for="pali">Check Palindrome</label>

    <input type="radio" id="rese" name="value" value="reverse" >
    <label for="rese">Reverse string</label>

    <input type="radio" id="sp" name="value" value="split" >
    <label for="sp">Split</label>

    <input type="radio" id="hash" name="value" value="hash" >
    <label for="hash">Hash string</label>

    <input type="radio" id="shuffle" name="value" value="shuffle" >
    <label for="shuffle">Shuffle String</label>

<input type="submit">


</form>

<?php
if(isset($_GET['input'])&& isset($_GET['value'])){



    if($_GET['value']=='palindrom'){

       $checker = palindrome($_GET['input']);
        if($checker==true){
            echo $_GET['input']." is palindrome!";
        }
        else{
            echo $_GET['input']." is not palindrome!";
        }
    }
    elseif($_GET['value']=='reverse'){

        $revString = strrev($_GET['input']);
        echo $revString;

    }

    elseif($_GET['value']=='split'){

        $splited = str_split($_GET['input']);

        foreach ($splited as $someVar) {

            echo $someVar." ";

        }

    }

    elseif($_GET['value']=='hash'){

        $hashed = crypt($_GET['input']);
        echo $hashed;
    }

    elseif($_GET['value']=='shuffle'){

        $splited = str_split($_GET['input']);

        asort($splited);

        foreach ($splited as $someVar) {

            echo $someVar;
        }


    }


}




?>











</body>
</html>