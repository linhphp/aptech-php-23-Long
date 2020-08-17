<?php

namespace App\Http\Controllers;
use App\Product;
use App\category_product;
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
  
  //Thêm sản phẩm
  public function add_product()
  {  
     $products = Product::all();
     $categorys = category_product::all();
     return view('products.add_product',compact('products','categorys'));
      
  }
  
  //Hiển thị chi tiết 1 sản phẩm
  public function chitietsp(Request $request)
  {
    $sanpham = Product::where('id',$request->id)->first();
    return view('products.chitietsp',compact('sanpham'));

  }

  //Hiển thị tất cả sản phẩm
  public function all_product()
  {   
      
      // $cate = DB::table('category_product')->where('id',$product->product_cate)->first();
      $products = Product::paginate(5);
      $category_product = category_product::all();
      
      
      return view('products.all_product',compact('products','category_product')); 
  }

  
  //Lưu sản phẩm
  public function store(Request $request)
  {     
        $data = request()->validate([
          'product_name'=>'required',
          'product_price'=>'required',
          'product_unit'=>'required',
          'product_desc'=>'required', 
          
          'product_image'=>'required|image',    
        ],
        [
          'product_name.required'=>'Chưa nhập tên sản phẩm',
          'product_price.required'=>'Chưa nhập giá sản phẩm',
          'product_unit.required'=>'Chưa nhập số lượng sản phẩm',
          'product_desc.required'=>'Chưa nhập mô tả sản phẩm',
          
          'product_image.required'=>'Chưa thêm hình ảnh sản phẩm',
        ]);
    
        $data =array();
        $data['product_name']= $request->product_name;
        $data['product_price']= $request->product_price;
        $data['product_image']= $request->product_image;
        $data['product_unit']= $request->product_unit;
        $data['product_desc']= $request->product_desc;
        $data['product_cate']= $request->product_cate;
        $get_image = $request->file('product_image');
        // $data->save();

        if($get_image){
          $get_image_name = $get_image->getClientOriginalName();
          $name_image = current(explode('.',$get_image_name));
          $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
          $get_image -> move('public/image',$new_image);
          $data['product_image'] = $new_image;

         
        }
       
        $data['product_image'] == '';
        DB::table('product')->insert($data);
        Session::put('thongbao','Thêm sản phẩm thành công');
        return redirect::to('add-product');
        

   }
  //Xóa sản phẩm
  public function destroy()
  {
    product::where('id',$id)->delete(); 
      return Redirect::to('all-product');
  }
   
   //Địa chỉ hành chính việt nam
   public function address()
   {
     return view('users.address');
   }

   public function tinhthanh()
   {
     $thanhpho = DB::table('devvn_tinhthanhpho')->get();
     $quanhuyen = DB::table('devvn_quanhuyen')->get();
     $xaphuong = DB::table('devvn_xaphuongthitran')->get();

     return view('users.address',[
       'thanhpho'=>$thanhpho,
       'quanhuyen'=>$quanhuyen,
       'xaphuong'=>$xaphuong
     ]);
   }
  } 
