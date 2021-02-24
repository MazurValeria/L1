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
<?php
$menu = array(
    'page_1' => array(
        'text' => 'page 1',
        'url' => 'page_1.html',
        'children' => array()
    ),
    'page_2' => array(
        'text' => 'page 2',
        'url' => 'page_2.html',
        'children' => array(
            'sub_menu_1' => array(
                'text' => 'sub menu 1',
                'url' => 'sub_menu_1.html',
                'children' => array(
                    'sub_menu_1_2' => array(
                        'text' => 'sub menu 12',
                        'url' => 'sub_menu_1_2.html',
                        'children' => array()
                    )
                )
            ),
            'sub_menu_2' => array(
                'text' => 'sub menu 2',
                'url' => 'sub_menu_2.html',
                'children' => array()
            ),
            'sub_menu_3' => array(
                'text' => 'sub menu 3',
                'url' => 'sub_menu_3.html',
                'children' => array()
            ),
            'sub_menu_4' => array(
                'text' => 'sub menu 4',
                'url' => 'sub_menu_4.html',
                'children' => array()
            )
        )
    ),
    'page_3' => array(
        'text' => 'page 3',
        'url' => 'page_3.html',
        'children' => array()
    )
);

<ul>
<li><a href="/link1">Text 1</a></li>
<li><a href="/link2">Text 2</a></li>
<li>
 Text 3
 <ul>
 <li><a href="/link3_1">Text 3.1</a></li>
  <li><a href="/link3_2">Text 3.2</a></li>
</ul>
</li>
</ul>