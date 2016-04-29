<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['id','person_id','transMorning','transAfternoon','regestrationDate','numberBrothers',
    'numberSister','numberPartMemorize','diseases','surgaries'];
    //
    public function klass(){
        return $this->hasOne('App\Classes');
        
    }
    public function address(){
        return $this->hasOne('App\Studentaddress');
    }
    public function person(){
        return $this->belongsTo('App\person');
    }
    public function grades(){
        return $this->hasMany('App\Grade');
    }
    public function attendances(){
        return $this->hasMany('App\Attendance');
    }
    public function courses(){
        return $this->belongsToMany('App\Course','grades','studnet_id','course_id');
    }
}
