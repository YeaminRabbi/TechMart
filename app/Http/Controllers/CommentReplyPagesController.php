<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentReply;
use Illuminate\Support\Facades\Auth;
class CommentReplyPagesController extends Controller
{
    //

    public function store(Request $request, $comment)
    {
        
        $this->validate($request,['message'=>'required|max:1000']);



        $user_id =Auth::id();
        $user_all_data = Auth::user();

        
        $commentReply = new CommentReply();
        $commentReply->username = $user_all_data->name;
        $commentReply->comment_email = $user_all_data->email;
        $commentReply->comment_id = $comment;
        $commentReply->user_id = Auth::id(); 
        $commentReply->message = $request->message;
        $commentReply->save();
        return redirect()->back();     
    }

}
