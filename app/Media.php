<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class Media extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'media';

    protected $guarded = ['id'];

    protected $hidden = ['translations'];

    public $translatedAttributes = ["title","image","description"];

	

    /* Start custom functions */



    /* End custom functions */
}