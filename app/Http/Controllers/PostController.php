<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index ()
    {
        $posts = Post::all();
        return view ('index',compact('posts'));

        $comments = Comment::orderBy('content')->get;

        return view('index', [
            'comments' => $comments
        ]);
    }

    public function show (Post $post)
    {
        $comments = Comment::where('post_id', $post->post_id);
        return view('show',compact('comments', 'post'));
    }

    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {

        Post::create(
            [
                'title'=> $request->title,
                'content'=> $request->content
                ] );
    }



}