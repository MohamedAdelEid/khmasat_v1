<?php

return [
    [
        'icon' => '<path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>',
        'title' => "الصفحة الرئسية",
        'route' => "admin.dashboard",
        'active' => "lls"
    ],
    [
        'icon' => '<path
                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                    </path>',
        'title' => 'العقارات',
        'active' => 'admin/properties*',
        'childItems' => [
            [
                'title' => 'اضافة عقار جديد',
                'route' => 'properties.create',
                'active' => 'admin/properties/create'
            ],
            [
                'title' => 'العقارات',
                'route' => 'properties.index',
                'active' => 'admin/properties'
            ]
        ]
    ]
];