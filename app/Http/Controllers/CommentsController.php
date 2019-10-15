<?php

namespace App\Http\Controllers;


use App\Http\Requests\CommentFormRequest;
use App\Comment;
use App\Http\Controllers\Controller;





class CommentsController extends Controller
{
    //

    public function newComment(CommentFormRequest $request){

        $comment = new Comment(array(
            'post_id' => 23,
            'content' => $request->get('content'),
            'user_id' => "1",
        ));
        $comment->save();
        return redirect()->back()->with('status', 'Your comment has been created!');


    }


}
