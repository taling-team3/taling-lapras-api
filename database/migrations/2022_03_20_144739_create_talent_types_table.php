<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_types', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['VOD', 'Online', 'Offline', 'Best', 'Recommend', 'eBook'])->default('Best');
            $table->integer('is_show')->default(true);
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
        Schema::dropIfExists('talent_types');
    }
}
