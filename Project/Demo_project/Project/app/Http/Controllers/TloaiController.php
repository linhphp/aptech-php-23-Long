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
        return view('tloai.add-tloai');
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

        return view('tloai.list-tloai',[
            'tloai'=>$tloai
        ]);
    }

    //Xóa thể loại
    public function destroy($id)
    {
        Tloai::where('id',$id)->delete();   
        return Redirect::to('list-tloai');
    }
}

