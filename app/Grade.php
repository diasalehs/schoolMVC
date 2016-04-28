<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table='grades';
    protected $fillable=['student_id','course_id','mark_id','semster'];

}
