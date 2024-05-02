<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class AnalysisCategory extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'analysis_categories';

    protected $guarded = ['id'];

    protected $hidden = ['translations'];

    public $translatedAttributes = ["title"];

	

    /* Start custom functions */
    public function analysis(){
        return $this->hasMany(MarketAnalysisNew::class, 'category_id');
    }


    /* End custom functions */
}