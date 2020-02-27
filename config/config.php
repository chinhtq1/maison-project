<?php

return [
    'users_admin_perpage' => env('USERS_ADMIN_PERPAGE', 100),

    'colors' => [
        0 => 'danger',
        1 => 'success',
        2 => 'warning',
        3 => 'primary',
        4 => 'default',
        5 => 'info',
        6 => 'dark',
    ],

    'boolean-colors' => [
        0 => 'warning',
        1 => 'success',
    ],

    'is_public' => [
        0 => 'Chưa xuất bản',
        1 => 'Đã xuất bản'
    ],

    'DATE_TIME_VN' => [
        'day_of_the_week' => [

        ],
    
        'year' => "Năm ",
        'month' => "Tháng ",
        'day' => " "
    ],


    'article' => [
        'thumbnail_size' => [
            0 => [
                'width' => 500,
                'height' => 300
            ],

            1 => [
                'width' => 300,
                'height' => 300
            ]
        ],

        'picture_size' => [
            0 => [
                'width' => 1028,
                'height' => 514
            ],
            
            1 => [
                'width' => 1028,
                'height' => 1028
            ]
        ]
    ],

    'slides' => [
        'types' => [
            0 => "Slide chữ",
            1 => "Slide ảnh"
        ],
        'default' => [
            'image_default_width' => 1000,
            'image_default_height' => 500,
        ]
        ],

        'sections' => [
            'section1','section2','section3','section4','section5','section6','section7','section8'
        ],


];
