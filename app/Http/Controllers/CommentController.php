<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $blogs)
    {
        
        $this->validate($request,['comment'=>'required|max:1000']);



        $user_id =Auth::id();
        $user_all_data = Auth::user();

        
        $comment = new Comment();
        $comment->username = $user_all_data->name;
        $comment->comment_email = $user_all_data->email;
        $comment->post_id = $blogs;
        $comment->user_id = Auth::id(); 
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back();     
    }
}
