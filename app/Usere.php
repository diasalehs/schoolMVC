<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usere extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    protected $table = 'useres';
    public $timestamps=false;

    protected $fillable = ['id','person_id','password','type','remember_token','name'];
    
    public function user(){
        return $this->belongsTo('App\Person');
    }
    public function sentMessages(){
        return $this->hasMany('App\Message','send_from','id');
    }
    public function receivedMessages(){
        return $this->hasMany('App\Message','send_to','id');
    }
}
