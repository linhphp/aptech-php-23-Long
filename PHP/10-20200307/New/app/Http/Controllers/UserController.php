<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use app;

class UserController extends Controller
{   
    public function index(){
        //$user = DB::table('users')->select('name','email','password')->get();
        $users=User::all();
        return view('users',[
        'baiTap' =>$user
    ]);
    }
    
}
