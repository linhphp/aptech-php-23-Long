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
    protected $primaryKey = 'product_cate';
    protected $fillable =['product_name','product_price','product_image','product_desc','product_unit','product_cate'];
    
   public function category(){
       return $this->belongsTo('App\category_product','id');
   }
   
}