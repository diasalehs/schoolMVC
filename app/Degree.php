<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $table='degrees';
    protected $fillable=['employee_id','name','date','source','avg','rating','specially'];

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
