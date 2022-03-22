<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThumbnailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumbnails', function (Blueprint $table) {
            $table->id();
            $table->string('url')->comment('파일 경로');
            $table->string('alt')->comment('파일 이름');
            $table->string('href')->nullable()->comment('클릭 시 이동할 페이지');
            $table->integer('is_order')->comment('공개 순서');
            $table->boolean('is_show')->default(true)->comment('공개 여부');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thumbnails');
    }
}
