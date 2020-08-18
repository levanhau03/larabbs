<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index()->comment('Tên');
            $table->text('description')->nullable()->comment('Miêu tả');
            $table->integer('post_count')->default(0)->comment('Số bài viết');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
