<?php

$menuArray = [
    [
        'title' => 'Home',
        'link' => '/',
    ],
    [
        'title' => 'About',
        'link' => '/about-us'
    ],
    [
        'title' => 'Products',
        'link' => '/catalog',
        'children' => [
            [
                'title' => 'Phones',
                'link' => '/catalog/phones'
            ],
            [
                'title' => 'TV',
                'link' => '/catalog/tv'
            ],
            [
                'title' => 'MP3',
                'link' => '/catalog/mp3'
            ],
        ],
    ],
    [
        'title' => 'Contacts',
        'link' => '/contacts','children' => [
        [
            'title' => 'Phones',
            'link' => '/catalog/phones'
        ],
        [
            'title' => 'TV',
            'link' => '/catalog/tv'
        ],
        [
            'title' => 'MP3',
            'link' => '/catalog/mp3'
        ],
    ],
    ],
];

$html = '<ul>';
function echoMenu($menuArray) {

    foreach($menuArray as $menu) {
        echo "<li><a href='{$menu['link']}'>{$menu['title']}</a>";

        if(array_key_exists('children', $menu)) {
            echo '<ul>';

            echoMenu($menu['children']);
            echo '</ul>';
        }
        echo '</li>';
    }
}

echo '<ul>';
echoMenu($menuArray);
echo '</ul>';

$html .= '</ul>';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= $html ?>
</body>
</html>
