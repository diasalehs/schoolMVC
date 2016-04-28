<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_course extends Model
{
    protected $table='class_course';
    protected $fillable=['id','class_id','course_id','saturday','sunday','monday','tuesday','wednesday','thursday','friday','sum'];

}
