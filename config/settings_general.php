<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Settings
    |--------------------------------------------------------------------------
    |
    | In here you can define all the settings used in your app, it will be
    | available as a settings page where user can update it if needed
    | create sections of settings with a type of input.
    */
    'app' => [
        'template' => "section-common",
        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'fas fa-rocket',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_name',
                'label' => 'App Name',
                'rules' => 'required|min:2|max:50'
            ],
            [
                'type' => 'image',
                'name' => 'shortcut icon',
                'label' => 'Hình ảnh nhỏ',
                'desc' => 'Kích thước chuẩn: 400x400',
                'width' => 64,
                'height' => 64,
                'class-root' => 'col-12 '
            ],
            [
                'type' => 'image',
                'name' => 'logo',
                'label' => 'Hình ảnh nhỏ',
                'desc' => 'Kích thước chuẩn: 400x400',
                'width' => 64,
                'height' => 64,
                'class-root' => 'col-12 '
            ],
        ]
    ]
];