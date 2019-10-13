<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Str;
use App\Http\Requests\PostFormRequest;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('backend.posts.index', compact('posts'));

    }


    public function create(){
        $categories = Category::all();
        return view('backend.posts.create',compact('categories'));

    }

    public function store(PostFormRequest $request){
        $post = new Post(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => Str::slug($request->get('title')),
            'user_id' => auth()->user()->getAuthIdentifier(),
        ));
        $post->save();
        $post->categories()->sync($request->get('categories'));
        return redirect('/admin/posts/create')->with('status','The post has been created!');
    }


    public function edit($id){
        $post = Post::whereId($id)->firstOrFail();
        $categories = Category::all();
        $selectedCategories = $post->categories->lists('id')->toArray();
        return view('backend.posts.edit',compact('post','categories','selectedCategories'));

    }














}
