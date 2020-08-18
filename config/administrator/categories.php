<?php

use App\Models\Category;

return [
    'title'   => 'Phân loại',
    'single'  => 'Phân loại',
    'model'   => Category::class,

    // 对 CRUD 动作的单独权限控制，其他动作不指定默认为通过
    'action_permissions' => [
        // 删除权限控制
        'delete' => function () {
            // 只有站长才能删除话题分类
            return Auth::user()->hasRole('Founder');
        },
    ],

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title'    => 'Tên',
            'sortable' => false,
        ],
        'description' => [
            'title'    => 'Miêu tả',
            'sortable' => false,
        ],
        'operation' => [
            'title'  => 'Quản lý',
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'name' => [
            'title' => 'Tên',
        ],
        'description' => [
            'title' => 'Miêu tả',
            'type'  => 'textarea',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => 'Thể loại ID',
        ],
        'name' => [
            'title' => 'Tên',
        ],
        'description' => [
            'title' => 'Miêu tả',
        ],
    ],
    'rules'   => [
        'name' => 'required|min:1|unique:categories'
    ],
    'messages' => [
        'name.unique'   => 'Tên danh mục bị trùng lặp trong cơ sở dữ liệu, vui lòng chọn tên khác.',
        'name.required' => 'Vui lòng đảm bảo tên có ít nhất một ký tự',
    ],
];
