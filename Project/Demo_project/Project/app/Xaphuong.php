<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xaphuong extends Model
{public $timestamps = false;    
    protected $table="Xaphuong";
    protected $primaryKey ="xaid";
    protected $fillable = ['name_xp','type','maqh'];

    public function Quanhuyen()
    {
        return $this->belongsTo('App\Quanhuyen','maqh','xaid');
    } 
    
}
