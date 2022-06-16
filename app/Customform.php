<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customform extends Model
{
    protected $table = "custom_forms";
    public $fillable =['name','email','age','designation','data_of_birth','password','token','created_at','updated_at'];
}
