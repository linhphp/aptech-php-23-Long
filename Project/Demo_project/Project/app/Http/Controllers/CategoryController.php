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

  //Sửa danh mục sản phẩm
  public function edit_category($id)
  {     
      $edit = category_product::find($id);
      return view('category.edit_category')->with(compact('edit'));
  }

  //Update danh mục
  public function update_category(Request $request, $id)
  {
    $category = category_product::find($id);
    $category->cate_name = $request->edit_category;
    $category->save();
    
    return Redirect::to('all-category');
  }


  //Xóa danh mục sản phẩm
  public function delete_category($id)
  { 
     $category = category_product::find($id);
     $category->delete(); 
      return Redirect::to('all-category'); 
  }
}
