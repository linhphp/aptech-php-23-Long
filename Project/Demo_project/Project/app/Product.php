<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;



class Product extends Model 
{
    protected $table="Product";
    protected $primaryKey = "product_cate";
    protected $guarded =[];
    
   public function category(){
       return $this->belongsto('App\category_product','id');
   }
   
}