<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['name','amount','number'];
    //OR
    //protected $guaded = ['id']; 
}
