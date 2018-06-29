<?php

namespace App\Http\Controllers;

use App\Models\PostTag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{

    public function index()
    {
        $data['PostTag']=PostTag::get();
        return view('PostTag/Index',$data);
    }

    public function create()
    {
        return view('PostTag/Create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'posttagname' => 'required|min:5',
        ]);

        $postTag=new PostTag();
        $postTag->name= $request->posttagname;
        $postTag->save();
        request()->session()->flash('message', 'Successfully Added');
        return redirect('/PostTag');
    }

    public function show(PostTag $postTag)
    {
        //
    }

    public function edit(PostTag $postTag)
    {
        $data['PostTag']=$postTag;

        return view('PostTag/Edit',$data);
    }


    public function update(PostTag $postTag,Request $request)
    {
        $this->validate($request, [
            'posttagname' => 'required|min:5',
        ]);

        $postTag->name=$request->posttagname;
        $postTag->save();

        request()->session()->flash('message', 'Successfully Updated');
        return redirect('/PostTag');
    }


    public function destroy(PostTag $postTag)
    {
        request()->session()->flash('message', 'Successfully Deleted');

        $postTag->delete();
        return redirect('/PostTag');
    }
}
