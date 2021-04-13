<!DOCTYPE html>
<html>
<head><title>Task 3</title></head>
<body>
<form action="3.php" method="post" enctype="multipart/form-data">
    <input type="text" name="num" size="40" id="num"
           placeholder="Ввадите число, ограничивающее размер слова: ">
    <br>
    <br>
    <input type="file" name="filename">
    <br>
    <br>
    <button type="submit">Отправить</button>
</form>
</body>
</html>
<?php
if ($_FILES["filename"]["size"] > 1024 * 3 * 1024) {
    echo("Размер файла превышает три мегабайта");
    exit;
}
$text = "";
$num = $_POST['num'];

if (!$num){
    die("Сорри, введите ограничение ! ");
}

echo "Массив исходного файла: ";
var_dump($arr1);

foreach ($arr1 as $key => $item) {
    $tmpRez = mb_strlen($item);
    if ($tmpRez > $num) {
        unset ($arr1[$key]);
    }
}

echo "Массив файла-результата со словами не более {$num} букв : ";
var_dump($arr1);

$resText = implode(PHP_EOL, $arr1);

$file = __DIR__ . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . "OUT_" . $_FILES["filename"]["name"];

file_put_contents($file, $resText);

var_dump($_POST);
var_dump($_FILES);
