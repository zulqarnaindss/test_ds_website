<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerindustry extends Model
{
    use HasFactory;
    protected $fillable = [
        'link_heading',
        'industry_heading'
    ];
}
