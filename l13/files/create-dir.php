<?php

$directoryName = $_POST['directoryName'] ?? null;// ?? zameneaet isset kotorii provereaet esti li kliuci v massive

if (!$directoryName){
    exit('Directory name is required');
}
$rout = __DIR__ . '/storage/' . $directoryName;

$userDir = $_POST['dir'] ?? '';

if ($userDir) {
    $rout .= "{$userDir}/";
}
$rout .= $directoryName;

if(is_dir($rout)) {
    $message = sprintf('Directory "%s" already exists', $directoryName);// %s peremennaia vnutri stroki
    exit($message);
}
 $isDirCreated = mkdir($rout);

if (!$isDirCreated) {
    $message = sprintf('Directory "%s" was not created', $directoryName);
    exit($message);
}

header("Location: index.php?rout={$userDir}");

