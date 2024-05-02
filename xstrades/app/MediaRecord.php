<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;


class MediaRecord extends Model
{


    protected $table = 'media_records';

    protected $guarded = ['id'];

    public $appends = ['formated_date'];


    public function category()
    {
        return $this->belongsTo('App\MediaCategory');
    }

    /* Start custom functions */

    public function getFormatedDateAttribute()
    {
        $dateTime = new DateTime($this->date);

        $formattedDate = $dateTime->format('d-m-Y');

        return $formattedDate;
    }



    /* End custom functions */
}
