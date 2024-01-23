<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateSolutioninsdustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutioninsdustries', function (Blueprint $table) {
            $table->id();
            $table->string('solution_heading');
            $table->string('solution_paragraph');
            $table->string('dynamics_image');
            $table->string('fo_image');
            $table->string('busines_central_image');
            $table->string('supply_chain_image');
            $table->string('project_operation_image');
            $table->string('hr_image');
            $table->string('office_image');
            $table->string('azure_image');
            $table->string('analytic_image');
            $table->string('dynamics_heading');
            $table->string('fo_heading');
            $table->string('busines_central_heading');
            $table->string('supply_chain_heading');
            $table->string('project_operation_heading');
            $table->string('hr_heading');
            $table->string('office_heading');
            $table->string('azure_heading');
            $table->string('analytic_heading');
            $table->string('dynamics_paragraph');
            $table->string('fo_paragraph');
            $table->string('busines_central_paragraph');
            $table->string('supply_chain_paragraph');
            $table->string('project_operation_paragraph');
            $table->string('hr_paragraph');
            $table->string('office_paragraph');
            $table->string('azure_paragraph');
            $table->string('iindustry_heading');
            $table->string('industry_paragraph');
            $table->string('manufacturing_image');
            $table->string('retail_image');
            $table->string('service_indusrty_image');
            $table->string('sector_image');
            $table->string('wholesale_image');
            $table->string('manufacturing_heading');
            $table->string('retail_heading');
            $table->string('sector_heading');
            $table->string('service_industry_heading');
            $table->string('wholesale_heading');
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
        Schema::dropIfExists('solutioninsdustries');
    }
}
