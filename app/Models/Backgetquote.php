<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backgetquote extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading_ready',
        'heading_getquote',
        'heading_consult'
       
    ];
}
