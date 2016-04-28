<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['id','coursname','grade'];

    //
    public function klasses(){
        return $this->belongsToMany('App\Classes','class_course','course_id','class_id');
    }
    public function teachers(){
        return $this->belongsToMany('App\Teacher');
    }
}
