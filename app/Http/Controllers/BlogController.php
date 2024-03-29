<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('blog.index',compact('posts'));

    }

    public function show($slug){

        $post = Post::whereSlug($slug)->firstOrFail();
        $comments = $post->comments()->get();
        return view('blog.show',compact('post','comments'));
    }

















}
