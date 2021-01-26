@extends('layouts.voyager')

@section('content')

    <div >
        <article class="mx-4 my-2 p-2">
            <p>{{$post->content}}</p>
            <small>by {{$post->user->name}} in {{$post->category->name}}</small>
            <hr>
        @auth
            <Like
                :likeable_id = "{{ $post->id }}"
                likeable_type = "App\Models\Post"
                :like_count = "{{ $likeCount }}"
                is_liked = "{{ $isLiked }}"
            ></Like>
        @endauth
        </article>

        @auth
            <x-comment-form 
                :post="$post"
                {{-- :comment="$comment" --}}
            />
        @endauth
        
            <x-comments 
                :comments="$comments"
                :likeCount="$likeCount"
                :isLiked="$isLiked"
             />
    </div>

@endsection

