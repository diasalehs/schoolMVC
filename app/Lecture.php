<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable=['id','teacher_id','subject_id','lecturetime_id'];
    public $timestamps=false;
    public function teacher(){
        return $this->belongsTo('App\Teacher');
    }
    public function klass(){
        return $this->belongsTo('App\Classes');
    }
    public function subject(){
        return $this->hasOne('App\Subject');
    }
}
