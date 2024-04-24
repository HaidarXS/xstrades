<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class BlogsCategory extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'blogs_categories';

    protected $guarded = ['id'];

    // protected $hidden = ['translations'];

    public $translatedAttributes = ["title"];

	

    /* Start custom functions */
        public function blogs(){
            return $this->hasMany(Blog::class, 'category_id');
        }


    /* End custom functions */
}