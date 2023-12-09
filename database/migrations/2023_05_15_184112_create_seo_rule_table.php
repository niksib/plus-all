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
        Schema::create('seo_rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('status')->default(0);
            $table->string('url')->index();
            $table->timestamps();
        });

        Schema::create('seo_rules_lang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seo_rule_id');
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 500)->nullable();
            $table->string('meta_keywords', 500)->nullable();

            $table->string('social_name')->nullable();
            $table->string('social_image')->nullable();
            $table->string('social_link')->nullable();
            $table->string('social_description', 500)->nullable();
            $table->string('social_site_name')->nullable();

            $table->string('lang', 2);

            $table->foreign('seo_rule_id')
                ->references('id')
                ->on('seo_rules')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unique(['seo_rule_id', 'lang']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo_rules');
        Schema::dropIfExists('seo_rules_lang');
    }
};
