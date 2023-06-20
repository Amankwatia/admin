<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    //Show all posts
    public function index(){
        $posts = Post::latest()->filter(request(['search']))->get();
        return view('posts.index', ['posts' => $posts]);
    }

    //show single listing / page
    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }

    //Show Create Form
    public function create(){
        return view('posts.create');
    }

    //Store Post data
    public function store(Request $request){
        $formFields = $request->validate([
            'index_num' => ['required', 'numeric', 'digits:10', Rule::unique('posts', 'index_num')],
            'surname' => 'required|string',
            'Other_Names' => 'required|string',
            'residence' => 'required|string',
            'enrol_code' => 'nullable|string|size:6',
            'dob' => 'nullable',
            'hometown' => 'nullable',
            'email' => 'nullable|email',
            'guardian' => 'nullable',
            'contact' => 'nullable',
            'occupation' => 'nullable'
        ]);

        Post::create($formFields);

        return redirect('/')->with('message', 'Student create successfully');
    }

    //Show Edit Form
    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    //Update Listing Data
    public function update(Request $request, Post $post){
      
        $formFields = $request->validate([
            'enrol_code' => ['required', 'string', 'size:6', Rule::unique('posts', 'enrol_code')],
            'dob' => 'required',
            'hometown' => 'required',
            'email' => 'email',
            'guardian' => 'required',
            'contact' => 'required',
            'occupation' => 'required'
        ]);

        $post->update($formFields);

        return redirect('/');
    }
}



