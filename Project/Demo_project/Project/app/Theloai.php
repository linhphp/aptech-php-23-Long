<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    protected $table = "Theloai";
    protected $fillable = ['id','name'];

    public function Post()
    {
        return $this->hasOne('App\model\Theloai','theloai_id');
    } 
}

