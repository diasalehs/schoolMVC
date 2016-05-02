<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table='persones';
    protected $fillable=['id','nationality','ni','religon','placeOfBirth','idType','distanceFromSchool','phone','dateOfBirth'];
    public $timestamps=false;
    public function name(){
        return $this->hasOne('App\Name');
    }

    public function englishname(){
        return $this->hasOne('App\Englishname');
    }

    public function user(){
        return $this->hasOne('App\Usere');
        
    }
    public function employee(){
        return $this->hasOne('App\Employee');
    }
    public function student(){
    return $this->hasOne('App\Student');
    }
}
