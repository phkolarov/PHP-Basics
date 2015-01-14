<html>
<head>
    <title>Print Tags</title>
</head>
<body>


<form method="post">
<p>Enter Tags:</p>

<input type="text" name="tags">

<input type="submit">
</form>


<?php




if(isset($_POST['tags'])){

$result = list() = explode(",", $_POST['tags']);

    $count = 0;
  foreach($result as $val){

      $element = trim($val);
      echo $count.": ".$element."<br>";
      $count++;

    }


}
?>


</body>
</html>
