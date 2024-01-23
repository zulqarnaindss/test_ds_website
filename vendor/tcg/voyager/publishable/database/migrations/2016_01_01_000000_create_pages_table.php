<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use TCG\Voyager\Models\Page;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('title');
            $table->string('banner')->nullable();
            $table->string('banner_logo')->nullable();
            $table->string('banner_logo_alt')->nullable();
            $table->string('banner_alt')->nullable();
            $table->text('top_overview_section')->nullable();
            $table->text('colorfull_box_section')->nullable();
            $table->text('plus_section')->nullable();
            $table->text('blue_background_section')->nullable();
            $table->text('parallel_images_text_section')->nullable();
            $table->text('last_overview_section')->nullable();
            $table->text('dashboard_section')->nullable();
            $table->text('slug')->unique();
            $table->text('slug_basic')->unique();
            $table->text('meta_description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
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
        Schema::drop('pages');
    }
}
