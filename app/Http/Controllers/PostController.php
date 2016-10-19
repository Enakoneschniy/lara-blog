<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use DB;

class PostController extends Controller
{
    public function main(Post $post){
        $data = $post
                ->orderBy('id','desc')
                ->take(3)
                ->get();
        return view('welcome', ['posts' => $data]);
    }

    public function index(Post $post){
        $data = $post->orderBy('id', 'desc')->paginate(5);
        return view('post.list', ['posts' => $data]);
    }

    public function post($id){
        $post = Post::find($id);
        return view('post.detail', ['post' => $post]);
    }

    public function like(Request $req){

        $postId = $req->get('post_id');
        $post = Post::find($postId);

        if(Auth::guest()){
            return json_encode(['likes' => $post->likes, 'message' => 'You must login']);
        }

        $rating = $post->likes;
        $userLike = DB::table('user_like_post')
            ->where(['user_id' => Auth::user()->id, 'post_id' => $postId])
            ->first();
        if($userLike == null){//like
            $post->likes = $rating + 1;
            DB::table('user_like_post')->insert([
                'user_id' => Auth::user()->id,
                'post_id' => $postId
            ]);
        }else{//dislike
            $post->likes = $rating - 1;
            DB::table('user_like_post')
                ->where(['user_id' => Auth::user()->id, 'post_id' => $postId])
                ->delete();
        }
        $post->save();
        return json_encode(['likes' => $post->likes, 'user' => $userLike]);
    }
}
