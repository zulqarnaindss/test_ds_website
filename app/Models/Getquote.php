<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Getquote extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'website',
        'message'
    ];
}
