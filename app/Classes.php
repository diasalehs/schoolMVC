<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{

    protected $table='classes';
    protected $fillable=['id','classname','section'];
    //
    public function teachers(){
        return $this->belongsToMany('App\Teacher','classes_teacher','class_id','teacher_id');
    }
    public function courses(){
        return $this->belongsToMany('App\Course','class_course','class_id','course_id');
    }
}

