<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class MediaAbalysisCategory extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'media_abalysis_categories';

    protected $guarded = ['id'];

    protected $hidden = ['translations'];

    public $translatedAttributes = ["title"];

	

    /* Start custom functions */



    /* End custom functions */
}