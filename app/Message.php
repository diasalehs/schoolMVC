<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table='messages';
    protected $fillable=['send_to','send_from','title','body','send_date','type','id'];
    public $timestamps=false;

    public function sender(){
        return $this->belongsTo('App\Usere');
    }
    public function receiver(){
        return $this->belongsTo('App\Usere');
    }
}

