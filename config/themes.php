<?php

return [
    'default' => 'custom',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default',
        ],
        'custom' => [
            'views_path' =>'resources/themes/default/customviews',
            'assets_path' => 'public/themes/default/myassets',
            'name' => 'Customtheme',

        ],


        // 'bliss' => [
        //     'views_path' => 'resources/themes/bliss/views',
        //     'assets_path' => 'public/themes/bliss/assets',
        //     'name' => 'Bliss',
        //     'parent' => 'default'
        // ]


    ],
];
