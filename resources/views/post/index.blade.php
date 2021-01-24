@extends('layouts.voyager')

@section('content')

    <Hello
        :one = "1"
        :two = "2"
        three = "3"
        four = "4"
    ></Hello>

    @foreach ($posts as $post)
        {{$post}}
        <div class="">

        </div>
    @endforeach

@endsection