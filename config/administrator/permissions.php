<?php

use Spatie\Permission\Models\Permission;

return [
    'title'   => 'Thẩm quyền',
    'single'  => 'Thẩm quyền',
    'model'   => Permission::class,

    'permission' => function () {
        return Auth::user()->can('manage_users');
    },

    // 对 CRUD 动作的单独权限控制，通过返回布尔值来控制权限。
    'action_permissions' => [
        // 控制『新建按钮』的显示
        'create' => function ($model) {
            return true;
        },
        // 允许更新
        'update' => function ($model) {
            return true;
        },
        // 不允许删除
        'delete' => function ($model) {
            return false;
        },
        // 允许查看
        'view' => function ($model) {
            return true;
        },
    ],

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title'    => 'Đánh dấu',
        ],
        'operation' => [
            'title'    => 'Quản lý',
            'sortable' => false,
        ],
    ],

    'edit_fields' => [
        'name' => [
            'title' => 'Đánh dấu (vui lòng sửa đổi cẩn thận)',

            // 表单条目标题旁的『提示信息』
            'hint' => 'Việc sửa đổi nhận dạng cơ quan sẽ ảnh hưởng đến lệnh gọi của mã, vui lòng không thay đổi nhẹ.'
        ],
        'roles' => [
            'type' => 'relationship',
            'title' => 'Danh vọng',
            'name_field' => 'name',
        ],
    ],

    'filters' => [
        'name' => [
            'title' => 'Đánh dấu',
        ],
    ],
];
