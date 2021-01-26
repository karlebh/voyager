@extends('layouts.voyager')

@section('content')
    <div class="mb-4">
        @foreach ($posts as $post)
        <div class="mx-3 mt-4 ">
            <a href="{{ route('post.show', $post->slug)}}">
                {{ Str::limit($post->content, 200) }}
            </a>
        </div>
        
        @endforeach
    </div>

    {{ $posts->links() }}

@endsection