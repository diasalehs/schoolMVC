<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['id','person_id','mobile','married','DoesPartnerWork','numberOfChildren'
        ,'childrenInSchool','childrenOtherSchools'
        ,'job_type','hiring_date','job_con'
    ,'experince_abroad','experince_local'];
    //
    public $timestamps=false;
    public function person(){
        
       return $this->belongsTo('App\Person');
        
    }
    public function experiences(){
        return $this->hasMany('App\Experience');
    }

    public function trained_courses(){
        return $this->hasMany('app\Trained_course');
    }
    public function degrees(){
        return $this->hasMany('App\Degree');
    }
    public function teacher(){
        return $this->hasOne('App\Teacher');
    }
}

