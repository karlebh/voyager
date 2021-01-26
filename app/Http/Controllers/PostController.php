<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Post;
use App\Models\Like;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $posts = Cache::remember('all_posts', now()->addSeconds(2), function () {
            return Post::latest()->paginate();
        });

        return view('post.index', compact('posts'));
    }

    public function show(Post $post, Like $like)
    {
        $post = Cache::remember('single_post', now()->addSeconds(2), function () use ($post) {
            return $post;
        });

        $comments = Cache::remember('post_comments_' . $post->id, now()->addSeconds(2), function () use ($post) {
            return $post->comments()->paginate();
        });

        $isLiked = Like::whereUserId(request()->user()->id)
                        ->whereLikeableId($post->id)
                        ->whereLikeableType('App\Models\Post')
                        ->exists();
                        
        $likeCount = Like::whereLikeableId($post->id)
                        ->whereLikeableType('App\Models\Post')
                        ->count();
      
        return view('post.show', compact('post', 'comments', 'isLiked', 'likeCount'));
    }
}
