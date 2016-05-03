<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $timestamps=false;
    protected $table='teacheres';
    protected $fillable=['id','employee_id'];
    //
    public function employee(){
        return $this->belongsTo('App\Employee');

    }
    public function lectures(){
        return $this->hasMany('App\Lecture');
    }
    public function classes(){
        return $this->belongsToMany('App\Classes','lectures','teacher_id','class_id');
    }
    public function subjects(){
        return $this->belongsToMany('App\Subject','lectures')->withPivot('lecturetime_id');
    }
    public function teacherarrival(){
        return $this->belongsToMany('App\Teacherarrival');
    }
}
