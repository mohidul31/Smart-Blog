<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        $data['postCategoryList']=PostCategory::get();

        return view('PostCategory/Index', $data);
    }

    public function create()
    {
        return view('PostCategory/Create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
        ]);
        $postCategory = new PostCategory();
        $postCategory->name= $request->name;
        $postCategory->save();
        return redirect('/PostCategory');
    }

    public function show(PostCategory $postCategory)
    {
        //
    }

    public function edit(PostCategory $postCategory)
    {
        $data['postCategory']=$postCategory;
        return view('PostCategory/Edit', $data);
    }

    public function update(Request $request, PostCategory $postCategory)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
        ]);
        $postCategory->name=$request->name;
        $postCategory->save();
        return redirect('/PostCategory');

    }

    public function destroy(PostCategory $postCategory)
    {
        request()->session()->flash('message', 'Successfully Deleted');

        $postCategory->delete();
        return redirect('/PostCategory');
    }
}
