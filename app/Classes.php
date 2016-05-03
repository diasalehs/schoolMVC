<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{

    protected $table='classes';
    protected $fillable=['level_id','section','capacity','size'];
    public $timestamps=false;
    //
    public function teachers(){
        return $this->belongsToMany('App\Teacher','lectures','class_id','teacher_id');
    }
    public function subjects(){
        return $this->belongsToMany('App\Subject','lectures','class_id','subject_id');
    }
    public function lectures(){
        return $this->hasMany('App\Lecture','class_id','id');
    }
    public function level(){
        return $this->belongsTo('App\Level');
    }

}

