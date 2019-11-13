<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Probe extends Model
{
    function atiname(){
    	return $this->belongsTo(Ati::class , 'atiId' , 'id');
    }
}
