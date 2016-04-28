<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    //
    protected $table='archives';
    protected $fillable=['student_id','course_id','class_id','teacher_id','year','semester','firstDaily','secondDaily','monthly','thirdDaily','fourthDaily','final','avarage'];


}
