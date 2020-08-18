<?php

use App\Models\Link;

return [
    'title'   => 'Đề xuất tài nguyên',
    'single'  => 'Đề xuất tài nguyên',

    'model'   => Link::class,

    // 访问权限判断
    'permission'=> function()
    {
        // 只允许站长管理资源推荐链接
        return Auth::user()->hasRole('Founder');
    },

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title'    => 'Tên',
            'sortable' => false,
        ],
        'link' => [
            'title'    => 'Liên kết',
            'sortable' => false,
        ],
        'operation' => [
            'title'  => 'Quản lý',
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'title' => [
            'title'    => 'Tên',
        ],
        'link' => [
            'title'    => 'Liên kết',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => 'ID thẻ',
        ],
        'title' => [
            'title' => 'Tên',
        ],
    ],
];
