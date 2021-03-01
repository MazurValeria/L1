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
for($i = 0; $i < count($menu); $i++) {
    if (array_key_exists('children', $menu[$i])) {
        $html .= "<li>";
        $html .= "<a href='{$menu[$i]['link']}'>{$menu[$i]['title']}</a>";
        $html .= "<ul>";
        for($k = 0; $k < count($menu[$i]['children']); $k++) {
            $html .= "<li><a href='{$menu[$i]['children'][$k]['link']}'>{$menu[$i]['children'][$k]['title']}</a></li>";
        }
        $html .= "</ul>";
        $html .= "</li>";
    } else {
        $html .= "<li><a href='{$menu[$i]['link']}'>{$menu[$i]['title']}</a></li>";
    }
}
$html .= '</ul>';

?>
