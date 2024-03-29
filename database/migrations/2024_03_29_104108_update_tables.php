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
        Schema::table('leads', function (Blueprint $table) {
            $table->string('edrpoy', 255)->nullable();
            $table->string('company', 255)->nullable();
        });

        Schema::table('banners', function (Blueprint $table) {
            $table->string('edrpoy', 255)->nullable();
            $table->string('company_rep', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
