<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solutioninsdustry extends Model
{
    use HasFactory;
    protected $fillable = [
        'solution_heading	',
        'solution_paragraph',
        'dynamics_image',
        'fo_image',
        'busines_central_image',
        'supply_chain_image',
        'project_operation_image',
        'hr_image',
        'office_image',
        'azure_image',
        'analytic_image',
        'dynamics_heading',
        'fo_heading',
        'busines_central_heading',
        'supply_chain_heading',
        'project_operation_heading',
        'hr_heading',
        'office_heading',
        'azure_heading',
        'analytic_heading',
        'dynamics_paragraph',
        'fo_paragraph',
        'busines_central_paragraph',
        'supply_chain_paragraph',
        'project_operation_paragraph',
        'hr_paragraph',
        'office_paragraph',
        'azure_paragraph',
        'iindustry_heading',
        'industry_paragraph',
        'manufacturing_image',
        'retail_image',
        'service_indusrty_image',
        'sector_image',
        'wholesale_image',
        'manufacturing_heading',
        'retail_heading',
        'sector_heading',
        'service_industry_heading',
        'wholesale_heading'
       
    ];
}
