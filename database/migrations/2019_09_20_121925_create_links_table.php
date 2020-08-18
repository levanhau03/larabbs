<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('Mô tả tài nguyên')->index();
            $table->string('link')->comment('Liên kết tài nguyên')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('links');
    }
}
