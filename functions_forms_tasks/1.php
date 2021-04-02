<!DOCTYPE html>
<html>
<head><title>Task 1</title></head>
<body>
<form action="" method="get">
    <textarea name="Text1"></textarea>
    <textarea name="Text2"></textarea>
    <input type="submit">
</form>
</body>
</html>
<?php
function getCommonWords($a, $b)
{
    $words = array();
    $a = explode(" ", $a);
    foreach ($a as $k) {
        if (strstr($b, $k)) {
            $words[] = $k;
        }
    }
    return $words;
}
if ($_GET) {
    var_dump(getCommonWords($_GET['Text1'], $_GET['Text2']));
}