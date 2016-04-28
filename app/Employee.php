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
    public function person(){
        
       return $this->belongsTo('App\Person');
        
    }
    public function experiences(){
        return $this->hasMany('App\Experience');
    }
}

