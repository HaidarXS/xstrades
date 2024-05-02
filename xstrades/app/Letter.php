<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class Letter extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'letters';

    protected $guarded = ['id'];

    protected $hidden = ['translations'];

    public $translatedAttributes = ["letter"];

	

    /* Start custom functions */



    /* End custom functions */
}