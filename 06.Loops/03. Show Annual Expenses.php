<html>
<head>
    <title>Show Annual Expenses</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
        }


    </style>
</head>
<body>


<form method="get">

    <label>Enter Number of Years:</label>
    <input type="text" name="years">
    <input type="submit" value="Show Costs">


</form>

<?php
if (isset($_GET['years']) && is_numeric($_GET['years'])):?>

    <table>
        <tr>
            <th>Year
            </td>
            <th>January</th>
            <th>February</th>
            <th>Match</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Total</th>
        </tr>

        <?php

        $curYear = 2014;
        $sum = 0;

        for ($i = 0; $i < $_GET['years']; $i++) {


            echo "<tr>
                    <td>$curYear</td>";


            for($l=0;$l<12;$l++){
                $randomEx = rand(300, 1000);
                echo "<td>$randomEx</td>";
                $sum+=$randomEx;

            }
            echo "<td>$sum</td></tr>";
            $sum =0;
            $curYear--;
        }

        ?>
    </table>

<?php
endif
?>
</body>
</html>
