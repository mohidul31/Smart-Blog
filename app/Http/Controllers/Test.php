<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function index()
    {
        //$result=\App\Models\PostCategory::find("e7e2955b-02e3-4ea7-97af-2a1f4db9cc42")->post;
        /*$result=\App\Models\Post::find(1)->postCategory;

        return $result;*/

        $post = new \App\Models\Post;
        
        $post->PostDescription="This is Desc";
        $post->PostTitle="This is Title11";
        $pc=\App\Models\PostCategory::find("e7e2955b-02e3-4ea7-97af-2a1f4db9cc42");
        $post->postCategory()->associate($pc);
        $post->save();

        echo $post;

    }
}
