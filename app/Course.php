<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['id','coursname','grade'];
    public $timestamps=false;

    //
    public function klasses(){
        return $this->belongsToMany('App\Classes','class_course','course_id','class_id');
    }
    public function teachers(){
        return $this->belongsToMany('App\Teacher');
    }
    public function grades(){
        return $this->hasMany('App\Grade');

    }
    public function students(){
        return $this->belongsToMany('App\Student','grades','course_id','student_id');
    }
}
