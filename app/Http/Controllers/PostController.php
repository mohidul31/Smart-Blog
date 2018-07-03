<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $data['post_list']=Post::paginate(5);
        return view('Post.Index', $data);
    }

    public function create()
    {
        $data['post_cat_list']=\App\Models\PostCategory::get();
        $data['post_tag_list']=\App\Models\PostTag::get();
        return view('Post.Create',$data);
    }

    public function store(Request $request)
    {
        $post= new \App\Models\Post();
        $post->PostTitle=$request->title;
        $post->PostDescription=$request->PostDescription;
        $post_tag=\App\Models\PostCategory::find($request->post_cat_id);
        $post->postCategory()->associate($post_tag);
        $post->save();

        //manay to may insert
        $post->postTag()->attach($request->post_tag_id);
        return redirect('/Post');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        $post->postTag()->detach();
        $post->delete();
        return redirect('/Post'); 
    }
}
