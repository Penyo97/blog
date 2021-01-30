<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Comments;
use App\Likes;
use App\User;
use App\Friend;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function uploadpost(Request $request){
        $post = new Posts([
            'user_id' => Auth::user()->id,
            'user' => Auth::user()->name,
            'text' => $request->post,
            'post_time' => Carbon::now()->isoFormat('dddd D')
        ]);
        if($file = $request->file('img')){
            $name = $file->getClientOriginalName();
            if($file->move('images',$name)){
                $post->img = $name;
                $post->save();
                return redirect()->back();
            }
        }
        $post->save();
        return redirect()->back();
    }
    function uploadcomment(Request $request,$id){
        $comment = new Comments([
            'post_id' => $id,
            'user' => Auth::user()->name,
            'text' => $request->text,
            'comment_time' => Carbon::now()->isoFormat('dddd D')
            ]);
            $comment->save();
            return redirect()->back();
    }
    function getlike($id){
        $like = new Likes();
        $like->post_id = $id;
        $like->save();
        return redirect()->back();
    }
    function search(Request $request){
        $users = User::where('name','=',$request->name)->get();
        return view('main.friends',compact('users',$users));
    }
    function friend(User $id){
        $friend = new Friend();
        $friend->user_id = Auth::user()->id;
        $friend->friend_id = $id->id;
        $friend->save();
    }

}
