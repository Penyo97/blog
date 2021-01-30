<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    function getprofile($id){
        return view('profile',['profiledata' => User::find($id)]);
    }
    function uploadimg(Request $request){
            $user = User::find(Auth::user()->id);
            if($file = $request->file('img')){
                $name = $file->getClientOriginalName();
                if($file->move('images',$name)){
                    $user->image = $name;
                    $user->save();
                    return redirect()->route('profile',['id' => Auth::user()->id]);
                }
            }
            return redirect()->route('profile',['id' => Auth::user()->id]);
    }
    function getsetting(){
        return view('main.settings');
    }
}
