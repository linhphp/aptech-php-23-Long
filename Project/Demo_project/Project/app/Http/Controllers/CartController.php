<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\pagination\Environment;
use Hash;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;


class CartController extends Controller
{   
    // public function __construct()
    // {
    //     $products = Product::where('id')->get();
    //     view()->share(['products'=>$products]);
    // }



    public function AddCart(Request $request, $id)
    {    
       
    }
}
