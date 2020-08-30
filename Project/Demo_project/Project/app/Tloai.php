<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tloai extends Model
{
    protected $table = "Tloai";
    protected $fillable = ['id','name'];

    public function Ltin()
    {
        return $this->hasMany('App\Ltin','tloai_id');
    } 

}
