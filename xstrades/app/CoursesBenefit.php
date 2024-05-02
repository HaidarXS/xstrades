<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class CoursesBenefit extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'courses_benefits';

    protected $guarded = ['id'];

    protected $hidden = ['translations'];

    public $translatedAttributes = ["title"];

    public function course(){
        return $this->belongsTo('App\Course');
    }

	

    /* Start custom functions */



    /* End custom functions */
}