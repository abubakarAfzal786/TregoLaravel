<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    public function address()
    {
        return $this->hasOne('App\Address','addressId','id');
    }
}
