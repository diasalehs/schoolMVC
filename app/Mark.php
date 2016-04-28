<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table='marks';
    protected $fillable=['id','first','second','monthly','third','fourth','final','avarage'];

}
