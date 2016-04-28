<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table='experiences';
    protected $fillable=['employee_id','corporation_name','job_title','start_date','end_date','reason','years','authenticated'];

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
