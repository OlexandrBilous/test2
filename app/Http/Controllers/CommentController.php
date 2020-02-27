<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentPost;
use App\Models\Comment;

class CommentController extends Controller
{
    public function new(CommentPost $request)
    {
        $comment = new Comment($request->validated());
        \Auth::user()->comment()->save($comment);
        return redirect()->back();
    }
}
