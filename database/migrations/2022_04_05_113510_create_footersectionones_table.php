<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersectiononesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footersectionones', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('paragraph');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('link_1');
            $table->string('copyright_heading');
            $table->string('follow_us_heading');
            $table->string('policy_heading');
            $table->string('sitemap_heading');
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
        Schema::dropIfExists('footersectionones');
    }
}
