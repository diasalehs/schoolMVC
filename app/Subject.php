<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=['name'];
    public $timestamps=false;
   public function levels(){
       return $this->belongsToMany('App\Level');
}
    public function teachers (){
        return $this->belongsToMany('App\Teacher','lectures')->withPivot('lecturetime_id');
    }
    public function classes(){
        return $this->belongsToMany('App\Classes','lectures','subject_id','class_id');
    }
    public function lectures(){
        return $this->hasMany('App\lectures');
    }
    public function grades(){
        return $this->hasMany('App\Grade');
    }

    
}
