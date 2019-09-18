<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post){

        $this->validate(request(), ['body'=>'required|min:2']);
        $post->addcomment(request('body'));

     $comment =  new Comment;
     $post->user_id = auth()->id();
     $comment->save();
        
          ///////// Long Method///////////////////
        // Comment::create([
            //     'body'=>request('body'),
            //     'post_id' => $post->id
            // ]);
            return back();
    }


}
