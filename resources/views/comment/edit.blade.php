@extends('layouts.voyager')

@section('content')
  
<div class="flex justify-center align-middle">
   <form action="{{ route('comment.update', $comment->slug) }}">
        @csrf
        @method('PUT')
        <div>
            <h3 class="mb-2">Enter your comment here!</h3>
            <textarea 
                class="bg-gray-200 p-2" name="content" id="" cols="60" rows="10"
                value="{{ $comment->content }}"
            ></textarea>
        </div>

        <div>
            <input class="cursor-pointer text-xl mt-2 bg-gray-700 px-2 py-1 text-gray-50 " type="submit" value="Make Comment" />
        </div>
   </form>
</div>

@endsection