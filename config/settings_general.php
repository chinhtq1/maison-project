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
        'title' => 'App',
        'desc' => 'All the general settings for application.',
        'icon' => 'fas fa-rocket',

        'elements' => [
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'app-name',
                    'label' => 'App Name',
                    'rules' => 'required|min:2|max:50'
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'phone',
                    'label' => 'Phone',
                    'rules' => 'required|min:2|max:50'
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'seo-title',
                    'label' => 'Seo Title',
                    'rules' => 'required|min:2|max:50'
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'seo-description',
                    'label' => 'Seo Description',
                    'rules' => 'required|min:2|max:50'
                ],
            ]
    ],
    'logo' => [
        'template' => "section-common",
        'title' => 'Logo',
        'desc' => 'All the general settings for application.',
        'icon' => 'fas fa-rocket',
        'elements' => [
            [
                'type' => 'image',
                'name' => 'images[shotcut-icon]',
                'label' => 'Shotcut Icon',
                'desc' => 'Kích thước chuẩn: 32x32',
                'width' => 32,
                'height' => 32,
            ],
            [
                'type' => 'image',
                'name' => 'images[logo-desktop]',
                'label' => 'Logo bản desktop',
                'desc' => 'Kích thước chuẩn: 200x50',
                'width' => 200,
                'height' => 50,
            ],
            [
                'type' => 'image',
                'name' => 'images[logo-mobile]',
                'label' => 'Logo bản mobile',
                'desc' => 'Kích thước chuẩn: 120x30',
                'width' => 120,
                'height' => 30,
            ],
            [
                'type' => 'image',
                'name' => 'images[logo-poem]',
                'label' => 'Logo phần thơ',
                'desc' => 'Kích thước chuẩn: 80x80',
                'width' => 80,
                'height' => 80,
            ],
            [
                'type' => 'image',
                'name' => 'images[logo-footer]',
                'label' => 'Logo phần footer',
                'desc' => 'Kích thước chuẩn: 160x40',
                'width' => 160,
                'height' => 40,
            ],
        ],
        


    ],
    'banner' => [
        'template' => "section-common",
        'title' => 'Banner',
        'desc' => 'All the general settings for application.',
        'icon' => 'fas fa-rocket',

        'elements' => [
            [
                'type' => 'image',
                'name' => 'images[banner-desktop]',
                'label' => 'Banner bản Desktop',
                'desc' => 'Kích thước chuẩn: 1920x1100',
                'width' => 1920,
                'height' => 1100,
            ],
            [
                'type' => 'image',
                'name' => 'images[banner-logo]',
                'label' => 'Banner bản mobile',
                'desc' => 'Kích thước chuẩn: 750x840',
                'width' => 750,
                'height' => 840,
            ],


        ]
    ],


];