<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class CoursesCategory extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'courses_categories';

    protected $guarded = ['id']; 

    protected $hidden = ['translations'];

    public $translatedAttributes = ["title"];

    public function courses(){
        return $this->hasMany(Course::class, 'category_id');
    }

	

    /* Start custom functions */



    /* End custom functions */
}