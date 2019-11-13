<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Transaction extends Model
{
    function vehicle(){
    	return $this->hasMany(Vehicle::class , 'vehicleId' , 'id');
    }
}