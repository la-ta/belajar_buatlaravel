<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{   
    public function home() 
    {
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::latest()->get()

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function about () 
    {
        return view('about', [
            "title" => "About",
            "name" => "Jordan Brilliant",
            "email" => "jordan@mail.com",
            "image" => "nike jordan.jpg"
        ]);
    }
}
