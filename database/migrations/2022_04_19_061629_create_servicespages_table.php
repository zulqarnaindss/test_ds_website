<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicespagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
        Schema::create('servicespages', function (Blueprint $table) {
            $table->id();
            $table->string('top_banner_image')->nullable();
            $table->string('banner_logo')->nullable();
            $table->string('banner_heading')->nullable();
            $table->string('banner_button_text')->nullable();
            $table->string('overview_paragraph')->nullable();
            $table->string('overview_box_heading1')->nullable();
            $table->string('overview_box_heading2')->nullable();
            $table->string('overview_box_heading3')->nullable();
            $table->string('overview_box_heading4')->nullable();
            $table->string('overview_box_heading5')->nullable();
            $table->string('businessServices_heading')->nullable();
            $table->string('businessServices_paragraph')->nullable();
            $table->string('services_box_heading1')->nullable();
            $table->string('services_box_heading2')->nullable();
            $table->string('services_box_heading3')->nullable();
            $table->string('services_box_heading4')->nullable();
            $table->string('services_box_heading5')->nullable();
            $table->string('services_box_heading6')->nullable();
            $table->string('services_box_logo1')->nullable();
            $table->string('services_box_logo2')->nullable();
            $table->string('services_box_logo3')->nullable();
            $table->string('services_box_logo4')->nullable();
            $table->string('services_box_logo5')->nullable();
            $table->string('services_box_logo6')->nullable();
            $table->string('servicesColorBox_heading1')->nullable();
            $table->string('servicesColorBox_heading2')->nullable();
            $table->string('servicesColorBox_heading3')->nullable();
            $table->string('servicesColorBox_heading4')->nullable();
            $table->string('servicesColorBox_heading5')->nullable();
            $table->string('servicesColorBox_heading6')->nullable();
            $table->string('servicesColorBox_heading7')->nullable();
            $table->string('servicesColorBox_heading8')->nullable();
            $table->string('servicesColorBox_paragraph1')->nullable();
            $table->string('servicesColorBox_paragraph2')->nullable();
            $table->string('servicesColorBox_paragraph3')->nullable();
            $table->string('servicesColorBox_paragraph4')->nullable();
            $table->string('servicesColorBox_paragraph5')->nullable();
            $table->string('servicesColorBox_paragraph6')->nullable();
            $table->string('servicesColorBox_paragraph7')->nullable();
            $table->string('servicesColorBox_paragraph8')->nullable();
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
        Schema::dropIfExists('servicespages');
    }
}
