<html>
<head>
    <title>Get Form Data</title>
</head>
<body>
<form action="" method="get">
    <input type="text" placeholder="Name.." name="name"/><br/>
    <input type="text" placeholder="age" name="age"/><br/>
    <input type="radio" name="sex" value="male"  checked /> Male <br/>
    <input type="radio" name="sex" value="female"/> Female <br/>
    <input type="submit"/>
</form>
</body>
</html>

<?php

    if(isset($_GET["name"], $_GET["age"], $_GET["sex"])) {
        $name = htmlspecialchars($_GET["name"]);
        $age = htmlspecialchars($_GET["age"]);
        $sex = htmlspecialchars($_GET["sex"]);
        echo "My name is $name. I am $age years old. I am $sex.";

    }
?>