<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MarketAnalysisNew extends Model 
{
	

    protected $table = 'market_analysis_new';

    protected $guarded = ['id'];

    

    public function category() { return $this->belongsTo('App\AnalysisCategory'); } public function language() { return $this->belongsTo('App\Language'); } 

    /* Start custom functions */



    /* End custom functions */
}