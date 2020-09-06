<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quanhuyen extends Model
{
    public $timestamps = false;    
    protected $table="quanhuyen";
    protected $primaryKey ="maqh";
    protected $fillable = ['name_qh','type','matp'];

    public function Thanhpho()
    {
        return $this->belongsTo('App\Thanhpho','matp','maqh');
    } 
    

    public function Xaphuong()
    {
        return $this->hasMany('App\Xaphuong','maqh','xaid');
    } 
    
}
