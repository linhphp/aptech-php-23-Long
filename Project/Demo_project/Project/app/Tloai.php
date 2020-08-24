<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tloai extends Model
{
    protected $table = "Tloai";
    protected $fillable = ['id','name'];

    public function Ltin()
    {
        return $this->hasOne('App\Ltin','tloai_id');
    } 

}
