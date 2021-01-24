<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;


class PostControllerTest extends TestCase
{
    public function test_post_index_return_all_cached_posts()
    {
        $this->actingAs(User::first())->get('/posts')->assertOk();
    }
    
    public function test_a_single_post_is_shown()
    {
        $post = Post::first();
        $this->actingAs(User::first())->get('/post/' . $post->slug)->assertOk();
    }
    
    public function test_guest_cannot_interact_with_posts()
    {
        $this->get('/posts')->assertRedirect('/login');
    }

}
