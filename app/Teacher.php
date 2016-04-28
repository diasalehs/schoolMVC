<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table='teacheres';
    protected $fillable=['id','employee_id'];
    //
    public function employee(){
        return $this->belongsTo('App\Employee');

    }
    public function klasses(){
        return $this->belongsToMany('App\Classes','classes_teacher','teacher_id','class_id');
    }
    public function courses(){
        return $this->belongsToMany('App\Course');
    }
    public function teacherarrival(){
        return $this->belongsToMany('App\Teacherarrival');
    }
}
