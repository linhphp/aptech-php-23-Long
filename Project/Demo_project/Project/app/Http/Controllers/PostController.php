<?php

namespace App\Http\Controllers;

use App\Post;
use App\Theloai;
use Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function add_post()
    {
        $theloai = Theloai::all();
        return view('post.add-post',[
            'theloai'=>$theloai
        ]);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post['title']= $request->title;
        $post['slug']= Str::slug($request->title,'-');
        $post['description']= $request->description;
        $post['content']= $request->content;
        $post['post_image']= $request->post_image;
        $post['theloai_id']= $request->theloai_id;
        $post_image = $request->post_image;
          
        if($post_image){
            $post_image_name = $post_image->getClientOriginalName();
            $name_image = current(explode('.',$post_image_name));
            $new_image = $name_image.rand(0,99).'.'.$post_image->getClientOriginalExtension();
            $post_image ->move('public/image',$new_image);
            $post['post_image'] = $new_image;
          
        } 
        $post->save();
        $post['post_image'] == '';

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
