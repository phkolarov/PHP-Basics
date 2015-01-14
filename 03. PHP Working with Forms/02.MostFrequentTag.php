<html>
<head>
    <title>Most Frequent Tag</title>
</head>
<body>


<form method="post">
    <p>Enter Tags:</p>

    <input type="text" name="tags">

    <input type="submit">
</form>


<?php

if (isset($_POST['tags'])) {

    $result = list() = explode(",", $_POST['tags']);

    $count = 0;
    //    echo var_dump($somevar);
    $somevar = [];
    foreach ($result as $val) {
        $val = trim($val);
        $somevar[] = $val;
    }

    $unique = array_values(array_unique($somevar));
    $totalRezult = [];

    for ($i = 0; $i < sizeof($unique); $i++) {
        for ($k = 0; $k < sizeof($somevar); $k++) {

            if ($unique[$i] == $somevar[$k]) {
                $count++;

            }
        }

        $totalRezult[$unique[$i]] = $count;
        $count = 0;
    }

    $count2 = 0;
    $mostFrequenceWord = "";
    arsort($totalRezult);
    foreach ($totalRezult as $x => $x_value) {
        $count2++;
        echo "$x = $x_value times<br>";
        if ($count2 == 1) {
            $mostFrequenceWord = $x;
        }
    }

    echo "<br>The Most Frequence Tag is: " . $mostFrequenceWord;
}



?>
</body>
</html>
