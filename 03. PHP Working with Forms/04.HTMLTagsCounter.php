<html>
<head>
    <title>HTML Tags Counter</title>
</head>
<body>

<div id="div1"></div>
<form method="post">
Enter HTML tags:<br>

<input type="text" name="inputTag">
<input type="submit">
</form>
</body>
</html>


<?php

$htmlTags = ['html', 'head', 'body', 'div', 'span', 'title',
    'link', 'meta', 'style', 'p', 'h1', 'h2', 'h3', 'h4', 'h5',
    'h6', 'strong', 'em', 'abbr', 'acronym', 'address', 'bdo',
    'blockquote', 'cite', 'q', 'code', 'ins', 'del', 'pre', 'i',
    'samp', 'br', 'a', 'img', 'area', 'ul', 'ol', 'li', 'dl',
    'dt', 'dd', 'table', 'tr', 'td', 'th', 'tbody', 'thead',
    'tfoot', 'caption', 'form', 'input', 'textarea', 'select',
    'option', 'button', 'label', 'legend', 'script', 'hr', 'b',];

session_start();
$checker = false;
if(isset($_POST['inputTag'])) {

    foreach ($htmlTags as $value) {

        if ($value == $_POST['inputTag']) {

            $_SESSION['count']++;
            $checker=true;

        }

    }


if($checker == true) {
    echo "<h1>Valid HTML Tag</h1>";
    echo "<h1>Score:" . $_SESSION['count'] . "</h1>";
}
else {

    echo "<h1>Invalid HTML Tag</h1>";
    echo "<h1>Score:" . $_SESSION['count'] . "</h1>";

}

}

?>