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
                'name'=> 'content', 
                'rules' => 'required',           
            ]
        ]
    ],

    'section-2' => [
        'template' => 'section-2',
        'title' => 'Block 2',
        'desc' => '',
        'icon' => 'fas fa-cog',

        'elements' => [
            [
                'type' => 'textarea-editor',
                'name' => 'title',
                'label' => 'Tiêu đề',
                'rules' => 'required',
            ],
            [
                'type' => 'textarea-editor',
                'name' => 'description',
                'label' => 'Mô tả',
                'rules' => 'required',
            ],
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'time_format',
                'label' => 'Time format',
                'rules' => 'string',
                'class' => 'w-auto px-2',
                'options' => [
                    'g:i a' => date('g:i a') . ' (12-hour format)',
                    'g:i:s A' => date('g:i A') . ' (12-hour format)',
                    'G:i' => date("G:i"). ' (24-hour format)',
                    'h:i:s a' => date("h:i:s a") . ' (12-hour with leading zero)',
                    'h:i:s A' => date("h:i:s A")
                ],
                'value' => 'g:i a'
            ],
            [
                'type' => 'select',
                'data' => 'string',
                'name' => 'timezone',
                'label' => 'Timezone',
                'class' => 'w-auto px-2',
                'rules' => 'string',
                'options' => array_combine(
                    DateTimeZone::listIdentifiers(DateTimeZone::ALL),
                    DateTimeZone::listIdentifiers(DateTimeZone::ALL)
                ),
                'value' => config('app.timezone', 'UTC')
            ]
        ]
    ],
];