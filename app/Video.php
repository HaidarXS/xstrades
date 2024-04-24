<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model 
{
	

    protected $table = 'videos';

    protected $guarded = ['id'];

    public function language() { return $this->belongsTo('App\Language'); } 

	

    /* Start custom functions */



    /* End custom functions */
}