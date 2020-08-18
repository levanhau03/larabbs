<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    public function up()
    {
        $categories = [
            [
                'name'        => 'Chia sẻ',
                'description' => 'Chia sẻ sáng tạo, chia sẻ khám phá',
            ],
            [
                'name'        => 'Hướng dẫn',
                'description' => 'Kỹ năng phát triển, các gói mở rộng được đề xuất, v.v.',
            ],
            [
                'name'        => 'Hỏi & Đáp',
                'description' => 'Hãy thân thiện và giúp đỡ lẫn nhau',
            ],
            [
                'name'        => 'Thông báo',
                'description' => 'Thông báo trang web',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
}
