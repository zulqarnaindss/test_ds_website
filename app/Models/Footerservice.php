<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerservice extends Model
{
    use HasFactory;
    protected $fillable = [
        'link_heading',
        'service_heading'
    ];
}
