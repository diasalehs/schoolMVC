<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LectureTime extends Model
{
    protected $table='lecturetimes';
    protected $fillable=['id','day','time'];
    public $timestamps=false;
    public function lecture(){
        return $this->hasOne('App\Lecture','lecturetime_id');
    }
}
