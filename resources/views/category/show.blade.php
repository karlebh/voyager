@extends('layouts.voyager')

@section('content')

    <div>
        <article class="mx-4 my-2 p-2">
           {{ $category->name }}

           @if ($category->posts->count() > 0)
                <p>{{ $category->posts->count() }} posts in this category</p>
           @endif
        </article>
    </div>

    <div class="mb-4">
        @foreach ($category->posts as $post)
            <div class="mx-3 mt-4 ">
                <a href="{{ route('post.show', $post->slug)}}">
                    {{ Str::limit($post->content, 100) }}
                </a>
            </div>
        @endforeach
    </div>

    {{-- {{ $category->posts->links() }} --}}

@endsection

