<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['firstname','lastname','amount','number'];

    public function getFullnameAttribute()
    {
        return $this->firstname." ".$this->lastname;
    }
}
