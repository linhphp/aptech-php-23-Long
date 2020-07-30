<?php

namespace App\Http\Controllers;
use App\User;
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
       $users = User::all();
        return view('users.index',[
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
           'email.required'=>'nhap email',
           'email.email'=>'khong dung cu phap email',
           'email.unique'=>'email da duoc su dung',
           'password.required'=>'nhap dung mat khau',
           'password.min'=>'do dai tu 6 den 20 ky tu',
           're_password.required'=>'nhap mat khau',
           're_password.same'=>'mat khau khong giong nhau,nhap lai', 
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
        return redirect()->back()->with('thongbao','Tao tai khoan thanh cong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
            'email.required'=>'ban chua nhap email',
            'password.required'=>'ban chua nhap password',
            'password.min'=>'password khong duoc nho hon 3',
            'password.max'=>'password khong duoc lon hon 32'
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
            return redirect('users')->with('thongbao','Dang nhap thanh cong');
        }
        else
        {
            return redirect()->back()->with('thongbao','Dia chi email hoac mat khau khong dung');
        }
    }
}
