<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CV Generator</title>
    <style>
        form{
            width: 350px;
        }

        form input{
            margin: 4px;
        }
    </style>
</head>
<body>


<form method="post">
    <fieldset>
        <legend> Personal information</legend>

        <input type="text" placeholder="First Name" name="fname"><br>
        <input type="text"placeholder="Last Name" name="lname"><br>
        <input type="text"placeholder="Email" name="email"><br>
        <input type="text"placeholder="Phone Number" name="phone"><br>
        <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female<br>
        <span>Birth Date</span><br>
        <input type="date" value="mm/dd/yy" name="bdate"><br>
        <span> Nationality</span><br>
        <select name="nationality">
            <option value="bulgarian">Bulgarian</option>
            <option value="makedonoid">Makedonoid</option>
            <option value="Egypt">Egypt</option>
        </select>
    </fieldset>

    <fieldset>
        <legend> Last Work Position</legend>
        <span>Company Name</span>
        <input type="text" placeholder="" name="lwork"><br>
        <span>From</span>
        <input type="date"  name="fdate"><br>
        <span>To</span>
        <input type="date"  name="tdate"><br>

        </select>
    </fieldset>

    <fieldset>
    <legend>Computer Skills</legend>
    <span>Programing Languages</span>
    <input type="text" name="planguages">
    <select name="level">
    <option value="beginer">Beginer</option>
    <option value="expert">Expert</option>
    </select><br>
    <input type="button" name="paddlang" id="paddlang" value="Add">
    <input type="button" name="premlang" id="premlang" value="Remove">


    </fieldset>


    <fieldset>
    <legend>Other Skills</legend>
    <span>Languages</span>
    <input type="text" name="planguages">
    <select name="compre">
    <option value="none">Comprehension</option>
    <option value="advanced">advanced</option>
    </select>
    <select name="reading">
    <option value="none">Reading</option>
    <option value="advanced">advanced</option>
    </select>
    <select name="writing">
    <option value="none">Writing</option>
    <option value="advanced">advanced</option>
    </select><br>
    <input type="button" name="addlang" id="addlang" value="Add">
    <input type="button" name="remlang" id="remlang" value="Remove"><br>
    <span>A</span><input type="checkbox">
    <span>B</span><input type="checkbox">
    <span>C</span><input type="checkbox">

    </fieldset>
    <input type="button" onClick="location.href='05.CVlfile.php'" value="Submit">

</form>
</body>
</html>

<?php

if(isset($_POST['fname'])&& isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['phone'])
    &&isset($_POST['gender'])&&isset($_POST['bdate'])&&isset($_POST['nationality'])&&isset($_POST['lwork'])
    &&isset($_POST['fdate'])&&isset($_POST['tdate']) ){

    session_start();
    $_SESSION['fname']=$_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] =$_POST['phone'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['bdate'] = $_POST['bdate'];
    $_SESSION['nationality' ] = $_POST['nationality'];
    $_SESSION['lwork'] = $_POST['lwork'];
    $_SESSION['fdate'] = $_POST['fdate'];
    $_SESSION['tdate']= $_POST['tdate'];
    $_SESSION['planguages'] = $_POST['planguages'];
    $_SESSION['level'] = $_POST['level'];
    $_SESSION['planguages'] = $_POST['planguages'];
    $_SESSION['compre'] = $_POST['compre'];
    $_SESSION['reading'] = $_POST['reading'];
    $_SESSION['writing']= $_POST['writing'];

    preg_match_all('/\w+/',$_POST['fname'], $matches);
$somevar = $matches;



}
?>
