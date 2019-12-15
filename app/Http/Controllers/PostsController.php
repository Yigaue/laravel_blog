<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

              
        $archives = Post::archives();
    
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

         
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        // ]);
            $this->validate(request(), [
                'title' => 'required',
                'body' => 'required',
            ]);

        auth()->user()->publish(
        new Post(request(['title', 'body']))
        );


        // Post::create([
            
        //     'title' =>request('title'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id(),
            
        //     ]);



         //Post::create(request(['title', 'body']));


        return redirect('/');
    }
}
