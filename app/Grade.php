<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table='grades';
    protected $fillable=['student_id','course_id','mark_id','semster'];
    
    public function student(){
        return $this->belongsTo('App\Student');
    }
    public function course(){
        return $this->belongsTo('App\Course');
    }
    public function mark(){
        return $this->hasOne('App\Mark');
    }

}
