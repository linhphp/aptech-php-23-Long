<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thanhpho extends Model
{
    public $timestamps = false;    
    protected $table="tinhthanhpho";
    protected $primaryKey ="matp";
    protected $fillable = ['name_tp','type'];
    

}
