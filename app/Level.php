<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable=['name'];
    public $timestamps=false;
    
    public function subjects(){
        return $this->belongsToMany('App\Subject');
    }
    public function classes(){
        return $this->hasMany('App\Level');
    }
}
