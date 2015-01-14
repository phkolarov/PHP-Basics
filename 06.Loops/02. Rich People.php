<html>
<head>
    <title>Rich People's Problems</title>
    <style>

        #wrap {
            width: 400px;
        }

        table {
            margin-left: 100px;
        }

        table, th, td, tr {
            border: 1px solid black;

        }


    </style>
</head>
<body>

<div id="wrap">
    <form method="post" name="richy">

        <label for="input">Enter cars</label>
        <input type="text" name="input">
        <input type="submit" value="Show result">

    </form>



    <?php

    $patternt = '/[A-Za-z]+/';
    if (isset($_POST['input'])) {

        echo " <table>
        <tr>
            <th>CAR</th>
            <th>COLOR</th>
            <th>COUNT</th>

        </tr>";


        preg_match_all($patternt, $_POST['input'], $output);
        $rezult = [];

        foreach ($output[0] as $var) {

            array_push($rezult, $var);

        }


        foreach ($rezult as $out) {

            $colors = ['shit', 'yellow', 'black', 'red', 'blue', 'grey'];


            $num = rand(1, 5);
            $num = rand(1, 5);

            $cars = htmlentities($out);
            $color = htmlentities($colors[$num]);
            $count =  htmlentities($num);

            echo "<tr>
                        <td> $cars   </td>
                        <td> $color  </td>
                        <td>  $count</td>
                </tr>";

        }
    }

    echo "</table>";
    ?>

</div>


</body>
</html>