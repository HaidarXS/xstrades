<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract; use Astrotomic\Translatable\Translatable;

class Asset extends Model  implements TranslatableContract
{
	use Translatable;

    protected $table = 'assets';

    protected $guarded = ['id'];

    protected $hidden = ['translations'];

    public $translatedAttributes = ["title"];

	

    /* Start custom functions */

    public function contracts() {
        return $this->hasMany(ContractSpecification::class);
    }


    /* End custom functions */
}