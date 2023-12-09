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
        Schema::create('view_blocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('status')->default(0);
            $table->string('key')->unique();
            $table->timestamps();
        });

        Schema::create('view_blocks_lang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('view_block_id')->index();
            $table->string('description', 255)->nullable();
            $table->text('content', 255)->nullable();
            $table->string('lang', 2)->index();

            $table->foreign('view_block_id')
                ->references('id')
                ->on('view_blocks')
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
        Schema::dropIfExists('view_blocks');
    }
};
