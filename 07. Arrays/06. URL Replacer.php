<!DOCTYPE >
<html>
<head>

    <title>URL replacer</title>

    <style>
        input{
            margin: 5px;
        }
    </style>
</head>
<body>


<form method="get">

    <textarea name="input"></textarea><br/>

    <input type="submit">


</form>

<?php

if (isset($_GET['input'])) {

    $inputArr =  $_GET['input'];

   $arr = preg_replace('/<a href/', '[URL',$inputArr);
    $inputArr=$arr;
    $arr2 = preg_replace('/<\/a>/', '[/URL]',$inputArr);
    $inputArr=$arr2;

    echo $inputArr;

}

?>

</body>
</html>