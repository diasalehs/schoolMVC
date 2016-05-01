<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{

    protected $table='classes';
    protected $fillable=['level_id','section'];
    public $timestamps=flase;
    //
    public function teachers(){
        return $this->belongsToMany('App\Teacher','classes_teacher','class_id','teacher_id');
    }
    public function courses(){
        return $this->belongsToMany('App\Course','class_course','class_id','course_id');
    }
    public function level(){
        return $this->belongsTo('App\Level');
    }

}

