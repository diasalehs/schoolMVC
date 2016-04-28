<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes_teacher extends Model
{
    protected $table='classes_teacher';
    protected $fillable=['class_id','teacher_id'];

}
