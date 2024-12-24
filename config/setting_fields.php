<?php

return [
    'app' => [
        'title' => 'General',
        'desc' => '',
        'icon' => 'menu-icon tf-icons bx bx-cog',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_name_ar', // unique name for field
                'label' => 'Name', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => config('app.name') // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_name_en', // unique name for field
                'label' => 'English Name', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => config('app.name') // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_description_ar', // unique name for field
                'label' => 'Description', // you know what label it is
                'rules' => 'nullable|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_description_en', // unique name for field
                'label' => 'English Description', // you know what label it is
                'rules' => 'nullable|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'instagram_token', // unique name for field
                'label' => 'Instagram Token', // you know what label it is
                'rules' => 'nullable|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'int', // data type, string, int, boolean
                'name' => 'instagram_posts_count', // unique name for field
                'label' => 'Instagram Posts Count', // you know what label it is
                'rules' => 'nullable|integer', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 6 // default value if you want
            ],
        ]
    ],

    'media' => [

        'title' => 'Social Media',
        'desc' => '',
        'icon' => 'menu-icon tf-icons bx bx-user-pin',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'youtube',
                'label' => 'youtube',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'x',
                'label' => 'x',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'instagram',
                'label' => 'Instagram',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ],

            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'linkedin',
                'label' => 'linkedin',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'telegram',
                'label' => 'telegram',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'tiktok',
                'label' => 'tiktok',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'snapchat',
                'label' => 'snapchat',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'whatsapp',
                'label' => 'whatsapp',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ],
        ]
    ],

    'contact' => [

        'title' => 'Contact Account',
        'desc' => '',
        'icon' => 'menu-icon tf-icons bx bx-user-pin',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'email',
                'label' => 'Email',
                'rules' => 'nullable|string|email',
                'class' => '',
                'value' => ''

            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'phone',
                'label' => 'Phone Number',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ]
        ]
    ],

    'logo' => [

        'title' => 'Logo',
        'desc' => '',
        'icon' => 'menu-icon tf-icons bx bx-user-pin',

        'elements' => [
            [
                'type' => 'file',
                'data' => 'file',
                'name' => 'logo',
                'label' => 'Logo',
                'rules' => 'nullable|image',
                'class' => '',
                'value' => '',
                'dimension' => 'logo',

            ],
            [
                'type' => 'file',
                'data' => 'file',
                'name' => 'icon',
                'label' => 'Icon',
                'rules' => 'nullable|image',
                'class' => '',
                'value' => '',
                'dimension' => 'icon',

            ]
        ]
    ],

    // 'video' => [

    //     'title' => 'Video',
    //     'desc' => '',
    //     'icon' => 'menu-icon tf-icons bx bx-user-pin',

    //     'elements' => [
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'video',
    //             'label' => 'Video',
    //             'rules' => 'nullable|string',
    //             'class' => 'col-12',
    //             'value' => '',
    //             // 'dimension' => 'contact_image',

    //         ],
    //     ]
    // ],

    'footer' => [

        'title' => 'Footer',
        'desc' => '',
        'icon' => 'menu-icon tf-icons bx bx-user-pin',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'footer_ar',
                'label' => 'Footer',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'footer_en',
                'label' => 'English Footer',
                'rules' => 'nullable|string',
                'class' => '',
                'value' => ''

            ]
        ]
    ],
    'profile' => [

        'title' => 'Profile',
        'desc' => '',
        'icon' => 'menu-icon tf-icons bx bx-file',

        'elements' => [
            [
                'type' => 'file',
                'data' => 'file',
                'name' => 'profile_file_ar',
                'label' => 'Profile',
                'rules' => 'nullable|file|mimes:pdf',
                'class' => '',
                'value' => ''

            ],
            [
                'type' => 'file',
                'data' => 'file',
                'name' => 'profile_file_en',
                'label' => 'Profile en',
                'rules' => 'nullable|file|mimes:pdf',
                'class' => '',
                'value' => ''

            ],
        ]
    ],
];