<?php


$board = $_GET['board'];


$boardRows = preg_split('/\//', $board);


$arrayPiece = ['B', 'H', 'K', 'P', 'Q', 'R'];
$jsonarr = array("B"=>"Bishop" ,"H"=>"Horseman","K"=>"King","P"=>"Pawn","Q"=>"Queen","R"=>"Rook");
$JSONOUT = [];
$text = implode(",", $boardRows);

foreach ($arrayPiece as $element) {

       $count = substr_count($text,$element);
    if($count!=0){
        $var = $jsonarr["$element"];
        $JSONOUT[$var]=$count;
        }
}




$checkTable = boardChecker($boardRows);

if($checkTable==true){

    echo "<table>";
    foreach ($boardRows as $line) {
        $lineArr = preg_split("/-/", $line, -1, PREG_SPLIT_NO_EMPTY);
        echo "<tr>";
        foreach ($lineArr as $symbols) {
            echo "<td>$symbols</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo json_encode($JSONOUT);

}

else{
    echo "<h1>Invalid chess board</h1>";
}


function boardChecker($boardRows)
{
$kaleko="";
    $counter = count($boardRows);

    if ($counter != 8) {
        return false;
    }

    foreach ($boardRows as $line) {
        $lineArr = preg_split("/-/", $line, -1, PREG_SPLIT_NO_EMPTY);
        if (count($lineArr) != 8) {
            return false;
        }

        foreach ($lineArr as $symbol) {
            $arrayPieceSumed = "BHKPQR ";

            $check = strpos($arrayPieceSumed, $symbol);
            if($check!== false){
            $kaleko.=$check." ";}
            else return false;

        }

    }

    return true;
}

