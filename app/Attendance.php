<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //
    protected $table='attendances';
    protected $fillable=['student_id','absanceDate','absanceDay'];

    public function student(){
        return $this->belongsTo('App\Student');
    }

}
