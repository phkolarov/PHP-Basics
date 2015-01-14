<html>
<head>
    <title>Square Root Sum</title>
    <style>
        table,th, td, tr{
            border: 1px solid black;
            text-align: left;
        }

    </style>
</head>

<body>


<table>
    <tr>
        <th>Number</th>
        <th>Square</th>

    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
    </tr>
    <?php

    $sum;
    $square = 0;

    for($i=2;$i<=100;$i+=2){

        $sqrt = round(sqrt($i),2);
        $square += $sqrt;

        echo        "<tr>
            <td>$i</td>
            <td>$sqrt</td>
            </tr>";


    }

    ?>
    <tr>
        <th>Total:</th>
        <td><?=$square?></td>

    </tr>

</table>


</body>

</html>


