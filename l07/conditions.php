<?php

$age = 18;
if ($age >= 18) {
    echo 'OK';
} else {
    echo 'Fail';
}
echo PHP_EOL;

//bez figurnih skobok toliko esli 1 uslovie, togda srabotaet, esli bolishe 1 uslovia to oshibka vidast
if ($age >= 18)
    echo 'OK';
elseif ($age = 33)
    echo 'Very ok';
else
    echo 'Fail';
echo PHP_EOL;

//esli cistii php cod to tak ne nado pisati s endif na kontze i : posle uslovia, citobi vivesti html kuski
if ($age >= 18):
    echo 'OK';
elseif ($age == 33):
    echo 'Very ok';
else:
    echo 'Fail';
endif;

echo PHP_EOL;

echo $age >= 18 ? 'ÓK' : 'FAIL';// ternarnik, ukorocennaia versia else/if
echo PHP_EOL;

echo $age = 33 ? 'Jesus' : ($age >= 18 ? 'ÓK' : 'FAIL');//vlojennii ternarniik i bolishe tak delati nelizea, no esli esti skobociki to srabotaet
echo PHP_EOL;

// Homework, na vihode otvet 1,2,3; v $x nado zapisati 1 skalearnoe znachenie
$x = 1;
if($x == 1) {
    echo 1;
}
if($x == 2) {
    echo 2;
}
if($x == 3) {
    echo 3;
}

//polnotzennii calculator, vse operatzii