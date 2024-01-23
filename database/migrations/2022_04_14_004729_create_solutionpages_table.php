<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutionpages', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image_logo')->nullable();
            $table->string('banner_image_paragraph')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_heading')->nullable();
            $table->string('banner_image_button')->nullable();
            $table->string('overview_heading')->nullable();
            $table->string('overview_paragraph')->nullable();
            $table->string('overview_image')->nullable();
            $table->string('paragraph')->nullable();
            $table->string('list_1')->nullable();
            $table->string('list_2')->nullable();
            $table->string('list_3')->nullable();
            $table->string('list_4')->nullable();
            $table->string('list_5')->nullable();
            $table->string('call_heading')->nullable();
            $table->string('call_paragraph')->nullable();
            $table->string('call_button')->nullable();
            $table->string('overview_image_2')->nullable();
            $table->string('call_back_image')->nullable();
           
            $table->string('overview_paragraph_2')->nullable();
            $table->string('overview_list_one')->nullable();
            $table->string('overview_list_two')->nullable();
            $table->string('overview_list_three')->nullable();
            $table->string('family_heading')->nullable();
            $table->string('family_paragraph')->nullable();
            $table->string('family_logo_1')->nullable();
            $table->string('family_logo_2')->nullable();
            $table->string('family_logo_3')->nullable();
            $table->string('family_logo_4')->nullable();
            $table->string('family_logo_5')->nullable();
            $table->string('family_logo_6')->nullable();
            $table->string('family_logo_7')->nullable();
            $table->string('family_logo_8')->nullable();
            $table->string('family_logo_9')->nullable();
            $table->string('dynamics_family_heading_1')->nullable();
            $table->string('dynamics_family_heading_2')->nullable();
            $table->string('dynamics_family_heading_3')->nullable();
            $table->string('dynamics_family_heading_4')->nullable();
            $table->string('dynamics_family_heading_5')->nullable();
            $table->string('dynamics_family_heading_6')->nullable();
            $table->string('dynamics_family_heading_7')->nullable();
            $table->string('dynamics_family_heading_8')->nullable();
            $table->string('dynamics_family_heading_9')->nullable();
            $table->string('dynamics_family_box_para_1')->nullable();
            $table->string('dynamics_family_box_para_2')->nullable();
            $table->string('dynamics_family_box_para_3')->nullable();
            $table->string('dynamics_family_box_para_4')->nullable();
            $table->string('dynamics_family_box_para_5')->nullable();
            $table->string('dynamics_family_box_para_6')->nullable();
            $table->string('dynamics_family_box_para_7')->nullable();
            $table->string('dynamics_family_box_para_8')->nullable();
            $table->string('dynamics_family_box_para_9')->nullable();
           
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
        Schema::dropIfExists('solutionpages');
    }
}
