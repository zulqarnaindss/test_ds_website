<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    use HasFactory;
    protected $fillable = [
        'callback_banner',
        'callback_heading',
        'callback_paragraph',
        'callback_button_text'
       
    ];
}
