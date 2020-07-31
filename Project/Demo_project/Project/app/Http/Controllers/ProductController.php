<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\pagination\Environment;
use Hash;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;


class ProductController extends Controller
{   
   public function add_product()
   {
     return view('product.add_product');
   }
   
   public function all_product()
   {
     return view('product.all_product');
   }

   public function save_product(Request $request)
   {
        $data =array();
        $data['product_name']= $request->product_name;
        $data['product_price']= $request->product_price;
        // $data['product_image']= $request->product_image;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        DB::table('product')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return redirect::to('add-product');
   }



    // public function createProduct()
    // {
    //     return view('product.product');
    // }

    // public function add_product(Request $request)
    // {
    //     $this->validate($request,
    //     [
    //     'ten san pham'=>'required',
    //     'gia san pham'=>'required',
    //     'hinh anh san pham'=>'required'
    //     ],
    //     [
    //        'ten san pham.required'=>'Chưa nhập tên sản phẩm',
    //        'gia san pham.required'=>'Chưa nhập giá sản phẩm',
    //        'hinh anh san pham.required'=>'Chưa có hình ảnh sản phẩm'
           
    //     ]);
    //     $product= new Product();
        
    //     if($request->hasFile('anhhienthi')){
    //         $file=$request->file('anhhienthi');
    //         if($file->getClientOriginalExtension('anhhienthi') =="png"||
    //             $file->getClientOriginalExtension('anhhienthi')=="jpg"){
    //             $file_name=$file->getClientOriginalName('anhhienthi');
    //             $file->move('image',$file_name);
    //             $user->anhhienthi = $file_name;       
    //         }
    //         else {
    //             return view('product.product');
                
    //         }
            
    //     }
    //     else {
    //         $user->anhhienthi = null;
    //     }
    //     $product->tensanpham =$request->product_name;
    //     $product->giasanhpam =$request->product_price;
    //     $product->anhhienthi=$request->product_image;

    //     $product->save();
    //     return view('product.product')->with('thongbao','Thêm sản phẩm thành công');
    // }

}
