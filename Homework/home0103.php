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
        'link' => '/contacts',
    ],
];
function recursiveMenu($menuArray)

{
$html = '<ul>';

    foreach ($menuArray as $item)
    {
        if (is_array($item)) {
            $html .= recursiveMenu($item);
        } else {
            $html .= "<li><a href='{$menuArray['link']}'>{$menuArray['title']}</a></li>";
        }
    }
    $html .= '</ul>';
    return $html;
}
echo recursiveMenu($menuArray);
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
</body>
</html>

