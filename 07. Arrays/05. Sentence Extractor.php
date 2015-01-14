<!DOCTYPE>
<head>

    <title>Sentence Extractor</title>
    <style>
        input{
            margin: 5px;
        }
    </style>
</head>
<body>

<form method="get">

    <textarea name="input"></textarea><br/>

    <input type="text" name="word">
    <input type="submit">


</form>





<?php

if (isset($_GET['input']) && isset($_GET['word'])) {
    if (!empty($_GET['input']) && !empty($_GET['word'])) {


        $pattern = '/\s*[^.!?]+[.!?]/';
        $word = $_GET['word'];
        preg_match_all($pattern, $_GET['input'], $textArr);

        for ($i = 0; $i < count($textArr[0]); $i++) {
            $somevar = preg_match_all("/$word/", $textArr[0][$i]);

            if ($somevar == 2) {
                echo $textArr[0][$i] . "<br/l>";
            }


        }


        $somevar = preg_match_all("/$word/", $textArr[0][0]);

        echo var_dump($somevar);

    }


}

?>

</body>
</html>