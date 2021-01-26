@extends('layouts.voyager')

@section('content')

    @foreach ($posts as $post)
        <div class="mx-3 mt-4 ">
            <a href="{{ route('post.show', $post->slug)}}">
                {{ Str::limit($post->content, 200) }}
            </a>
        </div>

    @endforeach

    {{ $posts->links() }}

@endsection