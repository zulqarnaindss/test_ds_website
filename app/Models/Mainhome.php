<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainhome extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_1',
        'image_2',
        'heading_business',
        'heading_FO',
        'paragraph_business',
        'paragraph_FO',
        'our_company_heading',
        'our_company_heading_2',
        'our_company_detail',
        'our_company_image',
        'customer_count_percent',
        'implementation_percent',
        'years_percent',
        'customer_heading',
        'implementation_heading',
        'years_heading',
        'professional_erp_heading',
        'professional_erp_paragraph',
        'team_model_heading',
        'team_model_paragraph',
        'ontime_heading',
        'ontime_paragraphh'
    ];
}
