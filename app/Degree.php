<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $table='degree';
    protected $fillable=['employee_id','name','date','source','avg','rating','specially'];

}
