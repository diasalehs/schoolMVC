<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Englishname extends Model
{
    protected $table='englishnames';
    protected $fillable=['person_id','first','second','third','last'];

    public function person(){
        return $this->belongsTo('App\Person');
    }
}
