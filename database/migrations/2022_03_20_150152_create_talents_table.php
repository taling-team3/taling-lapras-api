<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('talent_type_id');
            $table->string('name');
            $table->text('msg_notice');
            $table->text('msg_summary');
            $table->text('msg_target');
            $table->text('msg_tutor');
            $table->text('msg_description');
            $table->text('msg_caution');
            $table->text('msg_progress');
            $table->integer('view_counts');
            $table->integer('like_counts');
            $table->boolean('is_show')->default(true);
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
        Schema::dropIfExists('talents');
    }
}
