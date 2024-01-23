<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navlogo extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'gold_logo'
    ];
}
