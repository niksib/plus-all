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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 255)->unique();
            $table->string('name', 255);
            $table->text('images')->nullable();
            $table->unsignedTinyInteger('status')->default(0);
            $table->timestamps();
        });

        Schema::create('sliders_lang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('slider_id')->index();
            $table->text('content')->nullable();
            $table->string('lang', 2)->index();

            $table->foreign('slider_id')
                ->references('id')
                ->on('sliders')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }
};
