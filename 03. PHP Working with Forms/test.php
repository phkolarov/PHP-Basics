<?php
// get host name from URL
preg_match_all('/\w+/',
    "http://www.php.net/index.html", $matches);
//$host = $matches[1];
echo var_dump($matches);
// get last two segments of host name
//preg_match('/[^.]+\.[^.]+$/', $host, $matches);
//echo "domain name is: {$matches[0]}\n";
//echo var_dump($matches)
?>