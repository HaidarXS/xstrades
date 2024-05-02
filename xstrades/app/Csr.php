<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Csr extends Model 
{
	

    protected $table = 'csrs';

    protected $guarded = ['id'];

    
    public function language() { return $this->belongsTo('App\Language'); } 
	

    /* Start custom functions */



    /* End custom functions */
}