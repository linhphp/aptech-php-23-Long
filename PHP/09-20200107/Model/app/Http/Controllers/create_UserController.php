<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class create_UserController extends Controller
{
    public function index(){
        $user = DB::table('users')->select('id','name','email','password')->get();
        
        return view('user',[
          
           $name = 'name'=>$user,
         
        ]
    );
    }
}
