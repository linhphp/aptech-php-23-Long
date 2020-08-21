<?php

namespace App\Http\Controllers;

use App\Tintuc;
use App\Ltin;
use Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;


class TintucController extends Controller
{
    public function add_tintuc()
    {
        $loaitin = Ltin::all();    
        return view('tintuc.add-tintuc',[
            'loaitin'=>$loaitin
        ]);
    }

    //Lưu tin tức
    public function store(request $request)
    {
        $tintuc = new Tintuc();
        $tintuc->title = $request->title;
        $tintuc->slug = Str::slug($request->title,'-');
        $tintuc->description = $request->description;
        $tintuc->content = $request->content;
        $tintuc->post_image = $request->post_image;
        $tintuc->ltin_id = $request->ltin_id;

        $post_image = $request->post_image;
        if($post_image){
            $post_image_name = $post_image->getClientOriginalName();
            $name_image = current(explode('.',$post_image_name));
            $new_image = $name_image.rand(0,99).'.'.$post_image->getClientOriginalExtension();
            $post_image ->move('public/image',$new_image);
            $tintuc->post_image = $new_image;
        }
        $tintuc->save();
        $post_image == '';
        return redirect::to('all-tintuc');
    }

    //List tin tức
    public function all_tintuc()
    {
        $all_tintuc = Tintuc::paginate(5);
        return view('tintuc.list-tintuc',[
            'all_tintuc'=>$all_tintuc
        ]);
    }

    //Chi tiết bài viết
    public function chitiet(Request $request)
    {
        $chitiet = Tintuc::where('id',$request->id)->first();
        return view('tintuc.chitiet',compact('chitiet'));
    }
}

