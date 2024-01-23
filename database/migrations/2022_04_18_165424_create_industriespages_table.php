<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustriespagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industriespages', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image');
            $table->string('banner_logo');
            $table->string('banner_heading');
            $table->string('banner_paragraph');
            $table->string('banner_button_text');
            $table->string('overview_heading');
            $table->string('overview_paragraph');
            $table->string('overview_image');
            $table->string('whychoose_heading');
            $table->string('whychoose_paragraph');
            $table->string('whychoose_box_heading1');
            $table->string('whychoose_box_heading2');
            $table->string('whychoose_box_heading3');
            $table->string('whychoose_box_heading4');
            $table->string('whychoose_box_heading5');
            $table->string('whychoose_box_paragraph1');
            $table->string('whychoose_box_paragraph2');
            $table->string('whychoose_box_paragraph3');
            $table->string('whychoose_box_paragraph4');
            $table->string('whychoose_box_paragraph5');
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
        Schema::dropIfExists('industriespages');
    }
}
