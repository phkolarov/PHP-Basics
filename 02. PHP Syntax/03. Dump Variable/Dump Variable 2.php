<?php
$input="hello";
$input=15;
$input=1.234;
$input=array(1,2,3);
$input=(object)[2,34];
?>

<?php if(is_numeric($input)): ?>

<p><?= var_dump($input)?></p>

<?php else: ?>

    <p><?= gettype($input)?></p>
<?php endif; ?>
