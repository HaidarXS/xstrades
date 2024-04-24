<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class MediaCategory extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'media_categories';

    protected $guarded = ['id'];

    protected $hidden = ['translations'];

    public $translatedAttributes = ["title"];

	

    /* Start custom functions */

    public function media(){
        return $this->hasMany(MediaRecord::class, 'category_id');
    }

    /* End custom functions */
}