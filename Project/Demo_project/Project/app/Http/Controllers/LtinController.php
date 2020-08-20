<?php

namespace App\Http\Controllers;
use App\Ltin;
use App\Tloai;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class LtinController extends Controller
{
    //Thêm loại tin liên kết thể loại
    public function add_ltin()
    {
        $theloai = Tloai::all();
        return view('ltin.add-ltin',[
            'theloai'=>$theloai
        ]);
    }

    //Lưu loại tin
    public function save_ltin(request $request)
    {
        $loaitin = New Ltin();
        $loaitin->name = $request->tenloaitin;
        $loaitin->tloai_id = $request->tloai_id;
        $loaitin->save();

        return redirect::to('list-ltin');
    }

    //Hiển thị danh sách loại tin
    public function all_ltin()
    {
        $loaitin = Ltin::all();
        return view('ltin.list-ltin',[
            'loaitin'=>$loaitin
        ]);
    }
}
