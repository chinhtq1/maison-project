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

    'section-1' => [
        'template' => 'section-1',
        'title' => 'Block 1',
        'desc' => '',
        'icon' => 'fas fa-cog',

        'elements' => [
            [
                'type' => 'textarea-editor',
                'name'=> "section1[content]", 
                // 'rules' => 'required',           
            ]
        ]
    ],

    'section-2' => [
        'template' => 'section-2',
        'title' => 'Block 2',
        'desc' => '',
        'icon' => 'fas fa-cog',
        'class' => "row",

        'elements' => [
            [
                'type' => 'textarea-editor',
                'name' => 'section2[title]',
                'label' => 'Tiêu đề',
                'rules' => 'required',
                'class-root' => 'col-12'
            ],
            [
                'type' => 'textarea-editor',
                'name' => 'section2[description]',
                'label' => 'Mô tả',
                'rules' => 'required',
                'class-root' => 'col-12'
            ],

            [
                'type' => 'number',
                'name' => 'section2[num-1]',
                'label' => 'Tổng diện tích quy hoạch dự án',
                'rules' => 'required',
                'class-root' => 'col-6'

            ],
            [
                'type' => 'number',
                'name' => 'section2[num-2]',
                'label' => 'Mật độ xây dựng',
                'rules' => 'required',
                'class-root' => 'col-6'
            ],
            [
                'type' => 'number',
                'name' => 'section2[num-3]',
                'label' => 'Diện tích các lô dất',
                'rules' => 'required',
                'class-root' => 'col-6'
            ],
            
            [
                'type' => 'number',
                'name' => 'section2[num-4]',
                'label' => 'Diện tích đường nội bộ và tiện ích dự án',
                'class-root' => 'col-6',
                'rules' => 'required',
            ],
            [
                'type' => 'number',
                'name' => 'section2[num-5]',
                'label' => 'Diện tích đất ở',
                'rules' => 'required',
                'class-root' => 'col-6'
            ],
            [
                'type' => 'image',
                'name' => 'section2[images][0]',
                'label' => 'Hình ảnh nhỏ',
                'desc' => 'Kích thước chuẩn: 400x400',
                'width' => 400,
                'height' => 400,
                'class-root' => 'col-12 '
            ],

            [
                'type' => 'image',
                'name' => 'section2[images][1]',
                'width' => 700,
                'height' => 700,
                'desc' => 'Kích thước chuẩn: 700x700',
                'label' => 'Hình ảnh lớn',
                'class-root' => 'col-12 '
            ],
            [
                'type' => 'select-model.slide-select',
                'name' => 'section2[slides][0][title]',
                'label' => 'Chọn slide',
                'class-root' => 'col-12 '
            ]


        ]
    ],

    'section3' => [
        'template' => 'section-3',
        'title' => 'Block 3',
        'desc' => '',
        'icon' => 'fas fa-cog',

        'elements' => [
            [
                'type' => 'textarea-editor',
                'name' => 'section3[title]',
                'label' => 'Tiêu đề',
                // 'rules' => 'required',
                'class-root' => 'col-12'
            ],
            [
                'type' => 'textarea-editor',
                'name' => 'section3[description]',
                'label' => 'Mô tả',
                // 'rules' => 'required',
                'class-root' => 'col-12'
            ],
            [
                'type' => 'text',
                'name' => 'section3[link]',
                'label' => 'Link bản đồ vị trí',
                // 'rules' => 'required',
                'class-root' => 'col-12'
            ],
            [
                'type' => 'image',
                'name' => 'section3[images][0]',
                'label' => 'Hình ảnh',
                'desc' => 'Kích thước chuẩn: 300x600',
                'width' => 300,
                'height' => 600,
                'class-root' => 'col-12 '
            ],
        ]
    ],
    'section-4' => [
        'template' => 'section-4',
        'title' => 'Block 4',
        'desc' => '',
        'icon' => 'fas fa-cog',

        'elements' => [
            [
                'type' => 'textarea-editor',
                'name' => 'section4[title]',
                'label' => 'Tiêu đề',
                'rules' => 'required',
                'class-root' => 'col-12'
            ],
            [
                'type' => 'textarea-editor',
                'name' => 'section4[description]',
                'label' => 'Mô tả',
                'rules' => 'required',
                'class-root' => 'col-12'
            ],
            [
                'type' => 'image',
                'name' => 'section4[images][0]',
                'label' => 'Hình ảnh',
                'desc' => 'Kích thước chuẩn: 1200x800',
                'width' => 1200,
                'height' => 800,
                'class-root' => 'col-12 '
            ],
        ]
    ],
    'section-5' => [
        'template' => 'section-5',
        'title' => 'Block 5',
        'desc' => '',
        'icon' => 'fas fa-cog',

        'elements' => [
            [
                'type' => 'textarea-editor',
                'name' => 'section5[title]',
                'label' => 'Tiêu đề',
                'rules' => 'required',
                'class-root' => 'col-12'
            ],
            [
                'type' => 'textarea-editor',
                'name' => 'section5[description]',
                'label' => 'Mô tả',
                'rules' => 'required',
                'class-root' => 'col-12'
            ],
            [
                'type' => 'image',
                'name' => 'section5[images][0]',
                'label' => 'Hình ảnh',
                'desc' => 'Kích thước chuẩn: 1000x750',
                'width' => 1000,
                'height' => 750,
                'class-root' => 'col-12 '
            ],
            [
                'type' => 'select-model.slide-select',
                'name' => 'section5[slides][0][title]',
                'label' => 'Chọn slide',
                'class-root' => 'col-12 '
            ]
        ]
    ],
    'section-6' => [
        'template' => 'section-6',
        'title' => 'Block 6',
        'desc' => 'Giữ Ctrl khi bạn muốn chọn nhiều bài viết',
        'icon' => 'fas fa-cog',

        'elements' => [
            [
                'type' => 'select-model.article-select',
                'name' => 'section6[articles]',
                'label' => 'Chọn bài viết',
                'rules' => 'required',
                'class-root' => 'col-12'
            ],
        ]
    ],
    'section-7' => [
        'template' => 'section-7',
        'title' => 'Block 7',
        'desc' => '',
        'icon' => 'fas fa-cog',

        'elements' => [
            [
                'type' => 'select-model.slide-select',
                'name' => 'section7[slides][0][title]',
                'label' => 'Chọn Slide chữ',
                'rules' => 'required',
                'class-root' => 'col-12'
            ],
        ]
    ],
    'section-8' => [
        'template' => 'section-8',
        'title' => 'Block 8',
        'desc' => "",
        'icon' => 'fas fa-cog',

        'elements' => [
            [
                'type' => 'image',
                'name' => 'section8[images][0]',
                'label' => 'Hình ảnh chính',
                'desc' => 'Kích thước chuẩn: 650x650',
                'width' => 650,
                'height' => 650,
                'class-root' => 'col-6'
            ],
            [
                'type' => 'select-model.slide-select',
                'name' => 'section8[slides][0][title]',
                'label' => 'Slide đại diện cho ảnh chính',
                'class-root' => 'col-6'
            ],
            [
                'type' => 'image',
                'name' => 'section8[images][1]',
                'label' => 'Hình ảnh thứ 2',
                'desc' => 'Kích thước chuẩn: 300x300',
                'width' => 300,
                'height' => 300,
                'class-root' => 'col-6 '
            ],
            [
                'type' => 'select-model.slide-select',
                'name' => 'section8[slides][1][title]',
                'label' => 'Slide đại diện cho ảnh thứ 2',
                'class-root' => 'col-6'
            ],
            
            [
                'type' => 'image',
                'name' => 'section8[images][2]',
                'label' => 'Hình ảnh thứ 3',
                'desc' => 'Kích thước chuẩn: 300x300',
                'width' => 300,
                'height' => 300,
                'class-root' => 'col-6 '
            ],
            [
                'type' => 'select-model.slide-select',
                'name' => 'section8[slides][2][title]',
                'label' => 'Slide đại diện cho ảnh thứ 3',
                'class-root' => 'col-6 '
            ],
            [
                'type' => 'image',
                'name' => 'section8[images][3]',
                'label' => 'Hình ảnh thứ 4',
                'desc' => 'Kích thước chuẩn: 300x300',
                'width' => 300,
                'height' => 300,
                'class-root' => 'col-6 '
            ],
            [
                'type' => 'select-model.slide-select',
                'name' => 'section8[slides][3][title]',
                'label' => 'Slide đại diện cho ảnh thứ 4',
                'class-root' => 'col-6'
            ],
            [
                'type' => 'image',
                'name' => 'section8[images][4]',
                'label' => 'Hình ảnh thứ 5',
                'desc' => 'Kích thước chuẩn: 300x300',
                'width' => 300,
                'height' => 300,
                'class-root' => 'col-6 '
            ],
            [
                'type' => 'select-model.slide-select',
                'name' => 'section8[slides][4][title]',
                'label' => 'Slide đại diện cho ảnh thứ 5',
                'class-root' => 'col-6 '
            ],

        ]
    ],
];