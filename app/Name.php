<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    
    protected $fillable=['person_id','first','second','third','last'];
}
