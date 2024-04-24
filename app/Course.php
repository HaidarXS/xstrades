<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{


    protected $table = 'courses';

    protected $guarded = ['id'];

    public function language() {
        return $this->belongsTo('App\Language');
    }

    public function category(){
        return $this->belongsTo('App\CoursesCategory');
    }

    public function step(){
        return $this->belongsToMany('App\CoursesStep');
    }

    public function benefit(){
        return $this->belongsToMany('App\CoursesBenefit');
    }


    /* Start custom functions */



    /* End custom functions */
}