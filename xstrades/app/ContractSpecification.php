<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ContractSpecification extends Model 
{
	

    protected $table = 'contract_specifications';

    protected $guarded = ['id'];

    

	public function asset() { return $this->belongsTo('App\Asset'); } public function account_type() { return $this->belongsTo('App\AccountType'); } public function platform() { return $this->belongsTo('App\Platform'); } public function unit() { return $this->belongsTo('App\Unit'); } 

    /* Start custom functions */



    /* End custom functions */
}