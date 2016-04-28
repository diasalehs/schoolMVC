<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trained_course extends Model
{
    protected $table='trained_courses';
    protected $fillable=['employee_id','name','subject','source','long_time'];
    
    public function employee(){
        return $this->belongsTo('app\Employee');
    }
}
