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
            $table->foreignId('tutor_id')->constrained('tutors');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('talent_type_id')->constrained('talent_types');
            $table->string('name')->comment('강의 이름');
            $table->text('msg_notice')->comment('클래스 전 숙지');
            $table->text('msg_summary')->comment('클래스 요약');
            $table->text('msg_target')->comment('이런 분들이 들으면 좋아요.');
            $table->text('msg_tutor')->comment('튜터님을 소개합니다.');
            $table->text('msg_description')->comment('어떤 클래스 인가요?');
            $table->text('msg_caution')->comment('클래스 유의사항');
            $table->text('msg_progress')->comment('클래스는 이렇게 진행됩니다.');
            $table->integer('view_counts')->default(0)->comment('조회수 수');
            $table->integer('like_counts')->default(0)->comment('찜/좋아요 수');
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
        Schema::dropIfExists('talents');
    }
}
