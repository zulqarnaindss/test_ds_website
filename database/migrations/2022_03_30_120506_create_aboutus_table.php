<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->string('banner')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('type')->nullable();
            // $table->enum('status', Aboutu::$statuses)->default(Aboutu::STATUS_INACTIVE);
            $table->string('overview_heading')->nullable();
            $table->string('para_1')->nullable();
            $table->string('para_2')->nullable();
            $table->string('para_3')->nullable();
            $table->string('overview_image')->nullable();
            $table->string('our_services_heading')->nullable();
            $table->string('our_services_image_1')->nullable();
            $table->string('our_services_image_2')->nullable();
            $table->string('our_services_image_3')->nullable();
            $table->string('our_services_image_4')->nullable();
            $table->string('our_services_image_5')->nullable();
            $table->string('vision_heading')->nullable();
            $table->string('vision_image')->nullable();
            $table->string('v_list_1')->nullable();
            $table->string('v_list_2')->nullable();
            $table->string('v_list_3')->nullable();
            $table->string('mission_heading')->nullable();
            $table->string('m_list_1')->nullable();
            $table->string('m_list_2')->nullable();
            $table->string('m_list_3')->nullable();
            $table->string('m_list_4')->nullable();
            $table->string('why_heading')->nullable();
            $table->string('why_image_1')->nullable();
            $table->string('why_image_2')->nullable();
            $table->string('why_image_3')->nullable();
            $table->string('why_box__h_1')->nullable();
            $table->string('why_box__h_2')->nullable();
            $table->string('why_box__h_3')->nullable();
            $table->string('why_para_1')->nullable();
            $table->string('why_para_2')->nullable();
            $table->string('why_para_3')->nullable();
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
        Schema::dropIfExists('aboutus');
    }
}
