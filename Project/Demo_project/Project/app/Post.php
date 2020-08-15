<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $table ="Post";
    protected $primaryKey = "theloai_id";
    protected $guarded =[];

    public function theloai()
    {
        return $this->belongsto('App\model\Theloai','id');
    }
}
