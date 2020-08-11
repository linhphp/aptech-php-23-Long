<?php

namespace App\Http\Controllers;
use App\Product;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\pagination\Environment;
use Hash;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;


class CartController extends Controller
{   
   
    public function AddCart(Request $request,$id)
    {    
      
    }


    public function save_cart(Request $request)
    {
        $productId = $request->productid_hidden;
        $quantity = $request->qty;

        $product_info = Product::where('id',$productId)->first();
        
        $data['id'] = $product_info->id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = floatval($product_info->product_price);
        $data['weight'] = '123';
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        // dd($data);
        return Redirect::to('/show-cart');
    }

    public function show_cart(){
        return view('cart.show-cart');
    }



}




