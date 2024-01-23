<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutu extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'title',
        'excerpt',
        'body',
        'banner',
        'slug',
        'meta_title',
        'meta_description',
        'type',
        'overview_heading',
        'para_1',
        'para_2',
        'para_3',
        'overview_image',
        'our_services_heading',
        'our_services_image_1',
        'our_services_image_2',
        'our_services_image_3',
        'our_services_image_4',
        'our_services_image_5',
        'vision_heading',
        'vision_image',
        'v_list_1',
        'v_list_2',
        'v_list_3',
        'mission_heading',
        'm_list_1',
        'm_list_2',
        'm_list_3',
        'm_list_4',
        'why_heading',
        'why_image_1',
        'why_image_2',
        'why_image_3',
        'why_box__h_1',
        'why_box__h_2',
        'why_box__h_3',
        'why_para_1',
        'why_para_2',
        'why_para_3'
       
    ];

}
