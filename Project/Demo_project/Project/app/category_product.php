<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category_product extends Model
{
    // use SoftDeletes;
    protected $table="category_product";
    protected $primaryKey ="cate_name";
    

    public function Product(){
        return $this->hasMany('App\Model\Product','product_cate');
    }

}
