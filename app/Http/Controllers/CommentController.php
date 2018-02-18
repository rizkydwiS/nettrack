<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Thread;

class CommentController extends Controller
{

    public function addThreadComment(Request $request, Thread $thread)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $comment=new Comment();
        $comment->body=$request->body;
        $comment->user_id=auth()->user()->id;

        $thread->comments()->save($comment);

        return back()->withMessage('Comment created');
    }

    public function addReplyComment(Request $request, Commment $comment)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $comment=new Comment();
        $comment->body=$request->body;
        $comment->user_id=auth()->user()->id;

        $comment->comments()->save($comment);

        return back()->withMessage('Reply created');
    }

    public function update(Request $request, Comment $comment)
    {
        if($comment->user_id !== auth()->user()->id) 
        abort('401');

        $this->validate($request,[
            'body'=>'required'
        ]);

        $comment->update($request->all());

        return back()->withMessage('updated');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if($comment->user_id !== auth()->user()->id) 
            abort('401');
        
        $comment->delete();

        return back()->withMessage('Deleted');    
    }
}
