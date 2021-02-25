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
<h1>
    <?php echo "Menu: "; ?>

</h1>
<h2>
    <ul>
        <li><a href="/page_1.html">Text 1</a></li>
        <li><a href="/page_2.html">Text 2</a></li>
        <ul>
            <li><a href="/sub_menu_1.html">Sub menu 1</a></li>
            <li><a href="/sub_menu_2.html">Sub menu 2</a></li>
            <li><a href="/sub_menu_3.html">Sub menu 3</a></li>
            <li><a href="/sub_menu_4.html">Sub menu 4</a></li>
        </ul>
        <li><a href="/page_3.html">Text 3</a></li>
        </li>

        <?php
        $menu = array(
            'page_1' => array(
                'text' => 'TEXT 1',
                'url' => 'page_1.html',
                'children' => array()
            ),
            'page_2' => array(
                'text' => 'TEXT 2',
                'url' => 'page_2.html',
                'children' => array(
                    'sub_menu_1' => array(
                        'text' => 'Sub menu 1',
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
                'text' => 'TEXT 3',
                'url' => 'page_3.html',
                'children' => array()
            )
        );
        foreach ($menu as $item): ?>
        <?php endforeach; ?>
</h2>
</body>


</h2>
</body>

