<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Glossary extends Model 
{
	
    protected $table = 'glossary';
    protected $guarded = ['id'];

    
    public function language() {
        return $this->belongsTo('App\Language');
    } 
	

    /* Start custom functions */



    /* End custom functions */
}