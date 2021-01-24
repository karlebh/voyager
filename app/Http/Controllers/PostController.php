<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $posts = Cache::remember('all_posts', now()->addSeconds(60), function () {
            return Post::latest()->paginate();
        });

        return view('post.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post = Cache::remember('single_post', now()->addSeconds(60), function () use ($post) {
            return $post;
        });

        return view('post.show', compact('post'));
    }
}
