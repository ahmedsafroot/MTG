<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Validator;
use Session;
class BlogController extends Controller
{
    //
    public function index()
    {
        $userid = Auth::id();
        $posts=Post::all();
        return view("blog.index",compact("posts","userid"));
    }

    public function create()
    {
        return view("blog.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:255',
        ]);
        $userid = Auth::id();
        $post=new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id=$userid;
        $post->save();
        Session::flash('message', "Post Added Successfully");
        return redirect()->route('blogs.index');
    }

    public function edit($id)
    {
        $post=Post::find($id);
        if($post->user_id!=Auth::id())
        {
            Session::flash('error', "you aren't authorized to edit this post");
            return redirect()->route('blogs.index');   
        }
        else
        {
            return view("blog.edit",compact("post"));
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:255',
        ]);
        $post=Post::find($id);
        if($post->user_id!=Auth::id())
        {
            Session::flash('error', "you aren't authorized to update this post");
            return redirect()->route('blogs.index');   
        }
        else
        {
            $post->title=$request->title;
            $post->body=$request->body;
            $post->save();
            Session::flash('message', "Post updated Successfully");
            return redirect()->route('blogs.index');
        }
    }
    public function destroy($id)
    {
        $post=Post::find($id);
        if($post->user_id!=Auth::id())
        {
            Session::flash('error', "you aren't authorized to delete this post");
            return redirect()->route('blogs.index');   
        }
        $post->delete();
        Session::flash('message', "Post deleted Successfully");
        return redirect()->route('blogs.index');
    }
}

