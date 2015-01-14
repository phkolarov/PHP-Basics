<!DOCTYPE>
<html>
<head>
    <title>Sidebar Builder</title>
    <style>
        input{
          margin: 5px;
        }

        .menu{
            margin: 15px;

            font-family: Helvetica;
            border: 1px solid black;
            border-radius: 15px ;
            width: 200px;
            padding: 5px;
            background: -webkit-linear-gradient(lightblue, cornflowerblue);
        }

        .underliner{

            width: 205px;
            border-bottom: 2px solid black;
        }

        p{
            margin: 0;
            font-weight: bold;
            font-size: 23px;
        }

        ul li {
            list-style-type: circle;
            text-decoration: underline;
        }
    </style>
</head>
<body>



<form method="get">
    <label> Categories:</label>
    <input type="text" name="input1">
    <br/>

    <label> Tags:</label>
    <input type="text" name="input2">
    <br/>

    <label> Months:</label>
    <input type="text" name="input3">
    <br/>

    <input type="submit" value="Generate">

</form>


<?php

if(isset($_GET['input1'])&& isset($_GET['input1']) && isset($_GET['input1'])){


    $pattern = '/\w+/';

    preg_match_all($pattern,$_GET['input1'],$categories);
    preg_match_all($pattern,$_GET['input2'],$tags);
    preg_match_all($pattern,$_GET['input3'],$months);


    echo "<div class='menu'><div class='underliner'><p>Categories</p></div><ul>";
    foreach ($categories[0] as $catVal) {

        echo "<li>$catVal</li>";

    }
    echo "</ul></div>";

    echo "<div class='menu'><div class='underliner'><p>Tags</p></div><ul>";
    foreach ($tags[0] as $catVal) {

        echo "<li>$catVal</li>";

    }
    echo "</ul></div>";

    echo "<div class='menu'><div class='underliner'><p>Months</p></div><ul>";
    foreach ($months[0] as $catVal) {

        echo "<li>$catVal</li>";

    }
    echo "</ul></div>";

}



?>

</body>
</html>