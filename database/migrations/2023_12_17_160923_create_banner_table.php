<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('bg_color');
            $table->string('border_color');
            $table->unsignedTinyInteger('dark_theme');
            $table->string('image')->nullable();
            $table->integer('width');
            $table->integer('height');
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
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
        Schema::dropIfExists('banner');
    }
};
