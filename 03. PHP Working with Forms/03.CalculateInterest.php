<html>
<head>
    <style>


    </style>
    <title>Calculate Interest</title>
</head>
<body>

<form method="post">
    <span>Enter Amount </span><input type="text" name="amount"><br>
    <input type="radio" name=currency value="1">USD
    <input type="radio" name=currency value="2">EUR
    <input type="radio" name=currency value="3">BGR
    <br>
    <span>Compound Interest Amount</span><input type="text" name="comp">
    <br>
    <select name="time">
        <option>6 Months</option>
        <option>1 Year</option>
        <option>2 Years</option>
        <option>5 Years</option>
    </select>
    <input type="submit">
</form>


<?php
if (isset($_POST["amount"]) && isset($_POST["currency"]) && isset($_POST["comp"]) && isset($_POST["time"])) {

    $sixM = 6;
    $oneYear = 12;
    $twoYears = 24;
    $fiveYears = 60;

    $compinter = ((int)$_POST["comp"] / 12) + 100;
    $currency = "";
    $calc = 0;

    if($_POST["currency"]=="1"){
        $currency="$";
    }
    else if($_POST["currency"]=="2"){
        $currency="€";
    }
    else if($_POST["currency"]=="3") {
        $currency=" lev";
    }


        if ($_POST["time"] == "6 Months") {

        $var = (int)$_POST["amount"];
        $result = $_POST["amount"];


        for ($i = 0; $i < $sixM; $i++) {
            $result *= ($compinter / 100);

        }

        echo round($result, 2).$currency;


    }
    else if($_POST["time"]== "1 Year") {

        $var = (int)$_POST["amount"];
        $result = $_POST["amount"];


        for ($i = 0; $i < $oneYear; $i++) {
            $result *= ($compinter / 100);

        }

        echo round($result, 2).$currency;
    }

    else if($_POST["time"]== "2 Years") {

        $var = (int)$_POST["amount"];
        $result = $_POST["amount"];


        for ($i = 0; $i < $twoYears; $i++) {
            $result *= ($compinter / 100);

        }

        echo round($result, 2).$currency;
    }


    else if($_POST["time"]== "5 Years") {

        $var = (int)$_POST["amount"];
        $result = $_POST["amount"];


        for ($i = 0; $i < $fiveYears; $i++) {
            $result *= ($compinter / 100);

        }

        echo round($result, 2).$currency;
    }
}
?>
</body>
</html>