<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webnav extends Model
{
    use HasFactory;
     protected $fillable = [
        'link_1',
        'link_2'
    ];
}
