<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bcontact extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'title',
        'banner',
        'contact_heading',
        'contact_para',
        'need_heading',
        'h2_for_further',
        'h4_schedule',
        'h5_talk',
        'anch_phone1',
        'anch_phone2',
        'h5_mail',
        'anch_mail',
        'office_address_heading',
        'office_address',
        'meta_title',
        'meta_description'
       
       
    ];
}
