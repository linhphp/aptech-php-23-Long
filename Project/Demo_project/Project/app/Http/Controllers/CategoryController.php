<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category_product;
use Illuminate\Support\Facades\Auth;
use Illuminate\pagination\Environment;
use Hash;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
class CategoryController extends Controller
{
    //Thêm danh mục sản phẩm
  public function add_category()
  {
      $add_categorys = category_product::all();
      return view('category.add_category',
      compact('add_categorys')
    );
    
  }
  
  //Hiển thị danh mục
  public function all_category()
  {
    $categorys = category_product::all();

      return view('category.all_category',[
        'categorys'=>$categorys
      ]);
  }


  //Lưu danh mục sản phẩm
  public function save_category(Request $request)
  {
    $data = New category_product();
    $data->cate_name=$request->category_product;
    $data->save();
    return Redirect::to('all-category');
  }


  //Xóa danh mục sản phẩm
  public function delete_category($id)
  { 
      category_product::where('id',$id)->delete(); 
      return Redirect::to('all-category'); 
  }
}
