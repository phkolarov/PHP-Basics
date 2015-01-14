<html>
<head>
<title>World Mapping</title>
    <style>
        table, tr,td{
            border: 1px solid black;
        }

        table{
            background-color: grey;
        }

    </style>
</head>
<body>

<form method="get">

    <textarea type="text" name="input"></textarea>
    <input type="submit" value="Count Words">


    <table>

    <?php

    if(isset($_GET['input'])){
    $pattern = '/\w+/';


    preg_match_all($pattern,$_GET['input'],$output );

        $arrUnique = array_unique($output[0], SORT_STRING);
        $arrUnique = array_map('strtolower',$arrUnique);
        $output[0] = array_map('strtolower',$output[0]);


        foreach ($arrUnique as $someVar) {
            $counter = 0;

            for($i=0;$i<count($output[0]);$i++){

                if($someVar==$output[0][$i]){


                    $counter++;
                }

            }
            echo "<tr><td>$someVar</td><td>$counter</td></tr>";
            $counter=0;

        }


    }

    ?>
    </table>

</form>
</body>
</html>