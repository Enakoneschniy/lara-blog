<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post){
        $data = $post->all();
        return view('post.list', ['posts' => $data]);
    }

    public function post($id){
        $post = Post::find($id);
        return view('post.detail', ['post' => $post]);
    }
}
