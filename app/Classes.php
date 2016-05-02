<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{

    protected $table='classes';
    protected $fillable=['level_id','section','capacity','size'];
    public $timestamps=false;
    //
    public function teachers(){
        return $this->belongsToMany('App\Teacher','lectures');
    }
    public function subjects(){
        return $this->belongsToMany('App\Subject','lectures');
    }
    public function lectures(){
        return $this->hasMany('App\Lecture');
    }
    public function level(){
        return $this->belongsTo('App\Level');
    }

}

