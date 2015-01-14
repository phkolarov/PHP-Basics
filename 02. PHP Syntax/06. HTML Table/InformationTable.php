<?php

$name = "Gosho";
$phone = "0882-321-423";
$age = "24";
$adress = "Hadji Dimitar";

$name2 = "Pesho";
$phone2 = "0884-888-888";
$age2 = "67";
$adress2 = "Suhata Reka";

?>


<html>
<head>

<style>
table,th, td{
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
}

    table th{
        background-color: orange;
        text-align: left;
    }

table td{
    text-align: right;
}
</style>

</head>

<body>

<table>
<tr>
    <th>Name</th>
    <td><?=$name?></td>
</tr>

<tr>
    <th>Phone Number</th>
    <td><?=$phone?></td>
</tr>

<tr>
    <th>Age</th>
    <td><?=$age?></td>
</tr>

<tr>
    <th>Address</th>
    <td><?=$adress?></td>
</tr>
</table>
</body>
</html>