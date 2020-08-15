<?php

namespace App\Http\Controllers;

use App\Post;
use Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function add_post()
    {
        return view('post.add-post');
    }

    public function store(Request $request)
    {
        

        $post = array();
        $title = $request->title;
        $slug = Str::slug($title,'-');
        $description = $request->description;
        $content = $request->content;
        $theloai_id = $request->theloai_id;
        $image_post = $request->file('post_image');

        if($image_post){
            $image_post_name = $image_post->getClientOriginalName();
            $name_image = current(explode('.',$image_post_name));
            $new_image = $name_image.rand(0,99).'.'.$image_post->getClientOriginalExtension();
            $image_post ->move('public/image',$new_image);
            $post['post_image'] = $new_image;
              
            DB::table('post')->insert($post);
            Session::put('thongbao','Thêm bài viết thành công');
            return Redirect::to('all-post');     
        }    
        post::create([
            'title'=>$title,
            'slug'=>$slug,
            'description'=>$description,
            'content'=>$content,
            'theloai_id'=>$theloai_id,
            'post_image'=>$image_post
        ]);
    
        
        $post['post_image'] == '';
        DB::table('post')->insert($post);
        Session::put('thongbao','Thêm danh mục sản phẩm thành công');
        return redirect::to('all-post');
    }

    public function all_post()
    {   
        $all_post = post::get();
        return view('post.all-post',[
            'all_post'=>$all_post
        ]);
    }

}
