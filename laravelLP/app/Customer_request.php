<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_request extends Model
{
    protected $table = "Customer_request";
    protected $fillable = ['name','email','phone','address','futsal_name'];
    public $timestamps = false;
}
