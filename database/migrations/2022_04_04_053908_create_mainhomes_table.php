<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainhomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainhomes', function (Blueprint $table) {
            $table->id();
            $table->string('image_1');
            $table->string('image_2');
            $table->string('heading_business');
            $table->string('heading_FO');
            $table->string('paragraph_business');
            $table->string('paragraph_FO');
            $table->string('our_company_heading');
            $table->string('our_company_heading_2');
            $table->text('our_company_detail');
            $table->string('our_company_image');
            $table->double('customer_count_percent');
            $table->double('implementation_percent');
            $table->double('years_percent');
            $table->string('customer_heading');
            $table->string('implementation_heading');
            $table->string('years_heading');
            $table->string('professional_erp_heading');
            $table->string('professional_erp_paragraph');
            $table->string('team_model_heading');
            $table->string('team_model_paragraph');
            $table->string('ontime_heading');
            $table->string('ontime_paragraphh');
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
        Schema::dropIfExists('mainhomes');
    }
}
