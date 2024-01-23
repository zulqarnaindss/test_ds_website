<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bcontacts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('banner');
            $table->string('contact_heading');
            $table->string('contact_para');
            $table->string('need_heading');
            $table->string('h2_for_further');
            $table->string('h4_schedule');
            $table->string('h5_talk');
            $table->integer('anch_phone1');
            $table->integer('anch_phone2');
            $table->string('h5_mail');
            $table->string('anch_mail');
            $table->string('office_address_heading');
            $table->string('office_address');
            $table->string('meta_title');
            $table->string('meta_description');
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
        Schema::dropIfExists('bcontacts');
    }
}
