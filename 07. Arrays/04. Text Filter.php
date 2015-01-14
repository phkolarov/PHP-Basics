<!DOCTYPE >
<html >
<head>

    <title>Text Filter</title>
    <style>
        textarea{
            width: 300px;
            height: 100px;
        }
    </style>
</head>
<body>


<form method="get">

    <textarea name="input" placeholder="INPUT YOUR TEXT"></textarea><br/><br/>
    <input type="text" name="ban" placeholder="BAN TAGS">
    <input type="submit">



</form>

<?php


if(isset($_GET['input'])&& isset($_GET['ban'])){

    $pattern = '/\w+/';

    preg_match_all($pattern,$_GET['input'],$splited);
    preg_match_all($pattern,$_GET['ban'],$splited2);


    $allText = $_GET['input'];

    foreach ($splited2[0] as $someVar) {



                $newphrase = str_replace($someVar, "*****", $allText);
        $allText = $newphrase;
            }


    echo $allText;

}


?>

</body>
</html>