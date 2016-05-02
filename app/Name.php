<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{

    protected $primaryKey='person_id';
    protected $fillable=['person_id','first','second','third','last'];
    public $timestamps=false;
    
    public function person(){
        return $this->belongsTo('App\Person');
    }

    public function fullName()
    {
        return $this->first." ".$this->second." ".$this->third." ".$this->last;
    }
}
