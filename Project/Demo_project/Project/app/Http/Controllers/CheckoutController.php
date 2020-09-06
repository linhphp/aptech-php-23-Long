<?php

namespace App\Http\Controllers;
use App\User;
use App\Thanhpho;
use App\Quanhuyen;
use App\Xaphuong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\pagination\Environment;
use App\Http\Requests;


class CheckoutController extends Controller
{
    //Thanh toán
    public function check_out()
    {
        $thanhpho = Thanhpho::all();
        $quanhuyen = Quanhuyen::all();
        $xaphuong = Xaphuong::all();
        return view('check-out.check-out',compact('thanhpho','quanhuyen','xaphuong'));
    }

    //Địa chỉ 
    public function diachi(Request $request)
    {
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']== "thanhpho"){
              $quanhuyen = Quanhuyen::where('matp',$data['ma_id'])->get();
            foreach($quanhuyen as $qh){
            $output .='<option value = "'.$qh->maqh.'">'.$qh->name_qh.'</option>';
            }
        
            }else{
                $xaphuong = Xaphuong::where('maqh',$data['ma_id'])->get();
                foreach($xaphuong as $xp){
                $output .='<option value = "'.$xp->xaid.'">'.$xp->name_xp.'</option>';
                }
            }    
        }
        echo $output; 
    }
}
