<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footersolution extends Model
{
    use HasFactory;
    protected $fillable = [
        'link_heading',
        'solution_heading'
    ];
}
