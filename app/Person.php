<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table='persones';
    protected $fillable=['id','nationality','ni','religon','placeOfBirth','idType','distanceFromSchool','phone'];
    public function name(){
        return $this->hasOne('App\Name');
    }

    public function englishname(){
        return $this->hasOne('App\Englishname');
    }
}
