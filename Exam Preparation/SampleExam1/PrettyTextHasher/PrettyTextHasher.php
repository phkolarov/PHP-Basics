<?php



$text = $_GET['text'];
$hashValue = $_GET['hashValue'];
$font = $_GET['fontSize'];
$fontStyle = $_GET['fontStyle'];

if($fontStyle=="bold") {
    $outStyle = "font-weight:$fontStyle";
}
else{
    $outStyle = "font-style:$fontStyle";
}

echo "<p style=\"font-size:$font;$outStyle;\">";

for($i=0,$k=1;$i<strlen($text);$i++,$k++){

        if($k%2!=0){
           $charNum = chr(ord($text[$i])+$hashValue);

            echo $charNum;

        }
        else{
            $charNum = chr(ord($text[$i])-$hashValue);

            echo $charNum;

        }

}
echo "</p>";