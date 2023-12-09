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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('group', 255)->nullable()->index();
            $table->string('image', 255)->nullable();
            $table->unsignedInteger('sorting_position')->nullable();
            $table->unsignedTinyInteger('status')->default(0);
            $table->unsignedTinyInteger('nofollow')->default(0);
            $table->timestamps();
        });

        Schema::create('links_lang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('link_id')->index();
            $table->string('title', 255)->nullable();
            $table->string('url', 255)->nullable();
            $table->string('lang', 2)->index();

            $table->foreign('link_id')
                ->references('id')
                ->on('links')
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
        Schema::dropIfExists('links');
        Schema::dropIfExists('links_lang');
    }
};
