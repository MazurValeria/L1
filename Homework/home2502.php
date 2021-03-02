<?php

$menu = [
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

$html = '<ul>';
function buildMenu($menu, $children=false)
{
    foreach($menu as $id => $properties){
        foreach($properties as $key => $value){
            if(is_array($value))
            {
                $children= buildMenu($value, true);
            }
            else{
                $children = NULL;
                $$key = $value;
            }
        }
    }
    return $menu . "</ul>n";
    $menu .= "<li>$title<a/>$children</li>n";
}
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
