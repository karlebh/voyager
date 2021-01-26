@extends('layouts.voyager')

@section('content')
    <div class="">
        @foreach ($categories as $item)
            <div class="p-3 bg-gray-300 text-center">
                <a href="{{ route('category.show', $item->slug) }}"> {{ $item->name }}</a>
            </div>
        @endforeach
    </div>

    {{ $categories->links() }}
@endsection