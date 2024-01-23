<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appsource extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'meta_title',
        'meta_description',
        'meta_keyword'
       
    ];
}
