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
    public function add_theloai()
    {
        //  $add_loaitin = Theloai::all();

        return view('theloai.theloai');
    }


    public function save_theloai(Request $request)
    {
        $theloai = new Theloai();
        $theloai->name = $request->tentheloai;
        $theloai->save();
        return Redirect::to('list-theloai');
        
    }

    public function all_theloai()
    {
        $danhsach = Theloai::all();

        return view('theloai.list',[
        'danhsach'=>$danhsach
        ]);
    }

    public function destroy($id)
    {
        Theloai::where('id',$id)->delete();   
        return Redirect::to('list-theloai');
    }
}


