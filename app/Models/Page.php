<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
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
 
      public function children()
    {
        return $this->hasOne(self::class, 'parent_id')->orderBy('name');
    }
}
