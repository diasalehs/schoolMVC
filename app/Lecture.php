<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable=['id','class_id','teacher_id','subject_id','Saturday','Sunday','Monday','Tuesday','Thursday',
    'Wednesday','Friday'];
    public $timestamps=false;
    public function teacher(){
        return $this->hasOne('App\Teacher');
    }
    public function klass(){
        return $this->hasOne('App\Classes');
    }
    public function subject(){
        return $this->hasOne('App\Subject');
    }
}
