<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Educationalwebinar extends Model 
{
	

    protected $table = 'Educationalwebinars';

    protected $guarded = ['id'];

    
    public function language() { return $this->belongsTo('App\Language'); } 
	

    /* Start custom functions */



    /* End custom functions */
}