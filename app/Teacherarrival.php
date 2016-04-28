<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacherarrivale extends Model
{
    protected $table='teacherarrivales';
    protected $fillable=['teacher_id','dayDate','arrivaltime','arrivalDay'];
    
    public function teacher(){
        return $this->belongsTo('App\Teacher');
    }

}
