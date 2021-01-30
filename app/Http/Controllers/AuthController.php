<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Comments;
use App\Posts;
use App\Likes;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
function getmain(){
    if(Auth::check()){
        return view('main.main',['posts' => DB::table('posts')->orderBy('created_at','desc')->paginate(3),'comments' => Comments::all(),'likes' => Likes::all()]) ;
    }
    else{
        return view('land');
    }
}
    function getlogin(){
        return view('Auth.login');
    }

    function getreg(){
        return view('Auth.registration');
    }

    function registration(Request $request){
       $user = new User([
           'name' => $request->name,
            'email' => $request->mail,
            'password' => Hash::make($request->password)
       ]);
       $user->save();
       return redirect()->route('main');
    }

    function login(Request $request){
        if(Auth::guard('web')->attempt(['email' => $request->mail, 'password' => $request->password])){
            return redirect()->route('main');
        }
        return redirect()->back();
    }
    function logout(){
        Auth::logout();
        return redirect()->route('land');
    }
}
