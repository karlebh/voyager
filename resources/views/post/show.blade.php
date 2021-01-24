@extends('layouts.voyager')

@section('content')

    <div>
        <article class="mx-4 my-2 p-2">
            <p>{{$post->content}}</p>
            <small>by {{$post->user->name}} in {{$post->category->name}}</small>
            <hr>
        @auth
            <Like
                :likeable_id = "{{$post->id}}"
                likeable_type = "App\Models\Post"
            ></Like>
        @endauth
        </article>
    </div>


   

@endsection