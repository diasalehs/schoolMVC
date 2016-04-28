<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentaddress extends Model
{
    protected $table='studentaddress';
    protected $fillable=['student_id','city','region','neighborhood','street','building'];
    //
    public function student(){
        return $this->belongsTo('Student');
    }
}
