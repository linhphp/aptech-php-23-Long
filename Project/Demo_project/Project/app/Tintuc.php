<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    protected $table ="Tintuc";
    protected $fillable = ['id','title','slug','description','content','post_image','ltin_id'];

    public function Ltin()
    {
        return $this->belongsTo('App\Ltin','ltin_id','id');
    }
}
