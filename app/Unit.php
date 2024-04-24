<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class Unit extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'units';

    protected $guarded = ['id'];

    protected $hidden = ['translations'];

    public $translatedAttributes = ["title"];

	

    /* Start custom functions */



    /* End custom functions */
}