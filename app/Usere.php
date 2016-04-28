<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usere extends Model
{
    protected $table = 'useres';
    protected $fillable = ['id','person_id','password','type'];
    
    public function user(){
        return $this->belongsTo('App\Person');
    }
}
