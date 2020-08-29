<?php

namespace App\Http\Controllers;
use App\Tloai;
use Illuminate\Http\Request;
use Illuminate\pagination\Environment;
use Hash;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class TloaiController extends Controller
{
    //Thêm thể loại
    public function add_tloai()
    {
        return view('theloai.add-tloai');
    }

    //Lưu thể loại
    public function save_tloai(request $request)
    {
        $tloai = new Tloai();
        $tloai->name = $request->tentheloai;
        $tloai->save();

        return Redirect::to('list-tloai');
    }

    //Hiển thị danh sách thể loại
    public function all_tloai()
    {
        $tloai = Tloai::all();

        return view('theloai.list-tloai',[
            'tloai'=>$tloai
        ]);
    }

    //Sửa thể loại
    public function edit_tloai($id)
    {
        $tloai = Tloai::find($id);
        return view('theloai.edit-tloai')->with(compact('tloai'));    
    }

    //Update thể loại
    public function update_tloai(request $request,$id)
    {
        $tloai = Tloai::find($id);
        $tloai->name = $request->tentheloai;
        $tloai->save();
        return Redirect::to('/list-tloai');
    }

    //Xóa thể loại
    public function delete($id)
    {
        $tloai = Tloai::find($id);
        $tloai->delete();   
        return Redirect::to('list-tloai');
    }
}

