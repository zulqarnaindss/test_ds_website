<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footersectionone extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'paragraph',
        'image_1',
        'image_2',
        'link_1',
        'copyright_heading',
        'follow_us_heading',
        'policy_heading',
        'sitemap_heading'
       
    ];
}
