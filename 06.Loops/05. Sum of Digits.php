<html>
<head>
<title>Sum Of Digits</title>
    <style>
        table, td,tr{
            border: 1px solid black;
        }

    </style>
</head>
<body>


<form method="get">
    <label>Input String</label>
    <input type="text" name="input">
    <input type="submit">
</form>


<table>
<?php

if(isset($_GET['input'])){

    $pattern = '/\w+/';


preg_match_all($pattern, $_GET['input'], $output);


    foreach ($output[0] as $someVar) {
        if(is_numeric($someVar)){

           $digits = str_split($someVar);
            $sum = 0;



            foreach ($digits as $someVar2) {

                $sum+=(int)$someVar2;

            }

            echo "<tr>
                        <td>$someVar</td>
                        <td>$sum</td>

                        </tr>";
            $sum=0;
        }

        else {
            echo "<tr><td>$someVar</td><td>i cannot sum that</td></tr>";
        }

}


}
?>
</table>


</body>
</html>