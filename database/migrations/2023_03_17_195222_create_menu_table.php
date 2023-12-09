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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('group')->index();
            $table->unsignedInteger('sorting_position')->nullable();
            $table->unsignedTinyInteger('status');
            $table->timestamps();
        });

        Schema::create('menu_lang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id')->index();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->text('child')->nullable();
            $table->string('lang', 2)->index();
            $table->timestamps();

            $table->foreign('menu_id')
                ->references('id')
                ->on('menu')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
        Schema::dropIfExists('menu_lang');
    }
};
