<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Theloai;
use Illuminate\Support\Facades\Auth;
use Illuminate\pagination\Environment;
use Hash;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;


class TheloaiController extends Controller
{
    public function add_loaitin()
    {
        //  $add_loaitin = Theloai::all();

        return view('theloai.loaitin');
    }


    public function save_loaitin(Request $request)
    {
        $loaitin = new Theloai();
        $loaitin->name = $request->tenloaitin;
        $loaitin->save();
        return Redirect::to('list-loaitin');
        
    }

    public function all_loaitin()
    {
        $loaitin = Theloai::all();

        return view('theloai.list',[
        'loaitin'=>$loaitin
        ]);
    }

    public function destroy($id)
    {
        Theloai::where('id',$id)->delete();   
        return Redirect::to('list-loaitin');
    }
}


