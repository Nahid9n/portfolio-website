<?php

namespace App\Http\Controllers;

use App\Models\BlogComment;
use App\Models\BlogCommentReply;
use Illuminate\Http\Request;
use Exception;

class BlogCommentController extends Controller
{
    public function storeComment(Request $request){

        try {
            $this->validate($request,[
                'name'=>'required',
                'email'=>'required',
                'comment'=>'required',
            ],[
                'name.required'=>'Name Field Is Required',
                'email.required'=>'Email Field Is Required',
                'comment.required'=>'Comment Field Is Required',
            ]);

            $comment = new BlogComment();
            $comment->blog_id = $request->blog_id;
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->comment = $request->comment;
            $comment->save();
            return back()->with('message','comment successful.');
        }
        catch (Exception $e){
            return back()->with('warning',$e->getMessage());
        }
    }
    public function replyComment(Request $request){


        try {
            $this->validate($request,[
                'name'=>'required',
                'email'=>'required',
                'reply'=>'required',
            ],[
                'name.required'=>'Name Field Is Required',
                'email.required'=>'Email Field Is Required',
                'reply.required'=>'reply Field Is Required',
            ]);

            $comment = new BlogCommentReply();
            $comment->comment_id = $request->comment_id;
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->reply = $request->reply;
            $comment->save();
            return back()->with('message','reply send successfully.');
        }
        catch (Exception $e){
            return back()->with('warning',$e->getMessage());
        }
    }

}
