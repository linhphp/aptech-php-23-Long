<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\pagination\Environment;
use App\Http\Requests;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::get();
        return view('users.index',compact('products')
        );
    }
    public function users()
    {
       $users = User::all();
        return view('users.users',[
            'users'=>$users
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {   
        
         $this->validate($request,
        [
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:6|max:20',
        're_password'=>'required|same:password'
        ],
        [
           'email.required'=>'Chưa nhập Email',
           'email.email'=>'Email không đúng cú pháp',
           'email.unique'=>'Email đã được sử dụng',
           'password.required'=>'Nhập mật khẩu',
           'password.min'=>'Độ dài từ 6 đến 20 ký tự',
           're_password.required'=>'Nhập lại mật khẩu không chính xác',
           're_password.same'=>'Mật khẩu không giống nhau', 
        ]);
        
        $user = new User();
        //dd($request->Anhdaidien);
        // if($request->hasFile('Anhdaidien')){
        //     $file=$request->file('Anhdaidien');
        //     if($file->getClientOriginalExtension('Anhdaidien') =="png"||
        //         $file->getClientOriginalExtension('Anhdaidien')=="jpg"){
        //         $file_name=$file->getClientOriginalName('Anhdaidien');
        //         $file->move('image',$file_name);
        //         $user->Anhdaidien = $file_name;       
        //     }
        //     else {
        //         return null;
                
        //     }
            
        // }
        // else {
        //     $user->Anhdaidien = null;
        // }
        $user->name =$request->name;
        $user->email=$request->email;
        $user->nickname=$request->nickname;
        $user->password=Hash::make($request->password);
        
        $user->save();
        return redirect()->back()->with('thongbao','Tạo tài khoản thành công');
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
    }

    public function getlogin()
    {
        return view('users.login');
    }

    public function postlogin(Request $request)
    {   
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32'
        ],[
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập Password',
            'password.min'=>'Password không được nhỏ hơn 3',
            'password.max'=>'Password không được lớn hơn 32'
        ]);
        // $arr= [
        //     'email'=>$request->email,
        //     'password'=>$request->password
        // ];
        if(Auth::Attempt([
            'email'=>$request->email,
            'password'=>$request->password
            ]))
        {
            return redirect('check-out')->with('thongbao','Đăng nhập thành công');
        }
        else
        {
            return redirect()->back()->with('thongbao','Địa chỉ Email hoặc mật khẩu không đúng');
        }
    }

    public function check_out()
    {
        return view('check-out.check-out');
    }

}
