<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class User extends Model
{
    use SoftDeletes;
   
    protected $fillable =[
        'email','password'
    ];
    protected $table ='users';
}
