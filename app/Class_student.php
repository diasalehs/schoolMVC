<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_student extends Model
{
    protected $table='class_student';
    protected $fillable=['class_id','student_id'];

}
