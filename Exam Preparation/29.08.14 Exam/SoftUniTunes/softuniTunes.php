<?php



$text = $_GET['text'];
$artist = $_GET['artist'];
$property = $_GET['property'];
$order = $_GET['order'];
$lines = preg_split('/[\n\r]+/',$text);

$artistLinesArray = lines($lines,$artist);

$newArray = [];
$count = 0;


foreach ($artistLinesArray as $key =>$line) {

    $splitedArr = preg_split("/\|/",$line);

    $splitedArr =array_map('trim', $splitedArr);
    $artists = artistSort($splitedArr[2]);
    $rating =(double)($splitedArr[4]);

    $newArray[$key]['name'] = $splitedArr[0];
    $newArray[$key]['genre'] = $splitedArr[1];
    $newArray[$key]['artists'] = $artists;
    $newArray[$key]['downloads'] = $splitedArr[3];
    $newArray[$key]['rating'] = $rating;

}




foreach ($newArray as $key => $row) {

    $mid[$key]  = $row["$property"];
    echo $mid[$key]."<br>";

}

if(!empty($artistLinesArray)) {

    $order == "ascending" ?
        array_multisort($mid, SORT_ASC, $newArray) :
        array_multisort($mid, SORT_DESC, $newArray);
}

echo "<table>\n";
echo "<tr><th>Name</th><th>Genre</th><th>Artists</th><th>Downloads</th><th>Rating</th></tr>\n";

foreach ($newArray as $elements) {

    echo "<tr>";
    echo "<td>".htmlspecialchars($elements['name'])."</td>";
    echo "<td>".htmlspecialchars($elements['genre'])."</td>";
    echo "<td>".htmlspecialchars($elements['artists'])."</td>";
    echo "<td>".htmlspecialchars($elements['downloads'])."</td>";
    echo "<td>".htmlspecialchars($elements['rating'])."</td>";
    echo "</tr>\n";
}
echo "</table>\n";


//Sort Artists Names
function artistSort($artists){

    $unArtists = preg_split("/,/",$artists);
    $trimedArr = array_map('trim',$unArtists);
    sort($trimedArr,SORT_NATURAL );
    $sortedArtistss = implode(', ',$trimedArr);

    return $sortedArtistss;
}


//Find Songs With Artist
function lines($array,$artist){

    foreach ($array as $keys => $line) {
        if(strpos($line,$artist)==0 ||strpos($line,$artist)==false){

            unset($array[$keys]);
        }
    }
    return $array;

}