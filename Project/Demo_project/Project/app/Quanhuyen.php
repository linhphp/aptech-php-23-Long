<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quanhuyen extends Model
{
    public $timestamps = false;    
    protected $table="quanhuyen";
    protected $primaryKey ="maqh";
    protected $fillable = ['name_qh','type','matp'];
    
}
