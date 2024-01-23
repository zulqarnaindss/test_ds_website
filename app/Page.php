<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    protected $fillable = [
        'title',
        'banner',
        'banner_logo',
        'banner_logo_alt',
        'banner_paragraph',
        'banner_button_text',
        'body',
        'slug',
        'slug_2',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];
}
