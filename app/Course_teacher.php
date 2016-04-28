<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_teacher extends Model
{
    protected $table='course_teacher';
    protected $fillable=['teacher_id','course_id'];

}
