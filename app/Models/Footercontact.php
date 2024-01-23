<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footercontact extends Model
{
    use HasFactory;
    protected $fillable = [
        'contact_heading',
        'paragraph',
        'address_detail'
    ];
}
