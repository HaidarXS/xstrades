<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model 
{
	

    protected $table = 'blogs';

    protected $guarded = ['id'];

    

	public function category() { return $this->belongsTo('App\BlogsCategory'); } public function language() { return $this->belongsTo('App\Language'); } 

    /* Start custom functions */



    /* End custom functions */
}