<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{
    public function index()
    {
      $posts = Post::with('user')->get();

      return view('home')
        ->with('posts', $posts);
    }
}