<?php
$rout = __DIR__ . '/storage/';
$userDir = $_POST['dir'] ?? '';
if ($userDir) {
    $rout .= "{$userDir}/";
}
$fileData = reArrayFiles($_FILES['file']);
if (empty($fileData[0]['tmp_name'])) {
    exit('Files are required');
}
$allowedTypes = [
    'image/jpeg',
    'image/png',
    'image/gif',
    'application/zip',
];

$errors = [];
