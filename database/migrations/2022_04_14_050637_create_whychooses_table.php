<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhychoosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whychooses', function (Blueprint $table) {
            $table->id();
            $table->string('why_choose_heading')->nullable();
            $table->string('why_choose_paragraph')->nullable();
            $table->string('why_choose_logo_1')->nullable();
            $table->string('why_choose_logo_2')->nullable();
            $table->string('why_choose_logo_3')->nullable();
            $table->string('why_choose_logo_4')->nullable();
            $table->string('why_choose_logo_5')->nullable();
            $table->string('why_choose_logo_6')->nullable();
            $table->string('why_choose_paragraph_1')->nullable();
            $table->string('why_choose_paragraph_2')->nullable();
            $table->string('why_choose_paragraph_3')->nullable();
            $table->string('why_choose_paragraph_4')->nullable();
            $table->string('why_choose_paragraph_5')->nullable();
            $table->string('why_choose_paragraph_6')->nullable();
            $table->string('why_choose_paragraph_7')->nullable();
            $table->string('why_choose_paragraph_8')->nullable();
            $table->string('why_choose_heading_1')->nullable();
            $table->string('why_choose_heading_2')->nullable();
            $table->string('why_choose_heading_3')->nullable();
            $table->string('why_choose_heading_4')->nullable();
            $table->string('why_choose_heading_5')->nullable();
            $table->string('why_choose_heading_6')->nullable();
            $table->string('why_choose_heading_7')->nullable();
            $table->string('why_choose_heading_8')->nullable();
          
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
        Schema::dropIfExists('whychooses');
    }
}
