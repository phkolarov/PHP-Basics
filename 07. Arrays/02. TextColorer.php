<!DOCTYPE >
<html>
<head>

    <title>Text Colorer</title>
</head>
<body>

<form method="get">
<textarea name="input"></textarea>
<input type="submit">
</form>

<?php

if(isset($_GET['input'])){



    $pattern = '/\w/';

    preg_match_all($pattern,$_GET['input'], $regexed);


    foreach ($regexed[0] as $someChar) {

        $numChar = ord($someChar);
      //  echo $numChar;
        if($numChar%2==0){
            echo "<span style='color: red'>$someChar </span>";
        }
        else{

            echo "<span style='color: blue'>$someChar </span>";

        }


    }

}


?>
</body>
</html>