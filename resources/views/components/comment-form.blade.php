
<div class="flex justify-center align-middle">
   <form id="commentForm" method="POST" action="{{ route('comment.store') }}">
        @csrf

        <input type="hidden" name="post_id" value="{{ $post->id }}">
        {{-- <input type="hidden" name="post_id" value="{{ $comment->parent_id }}"> --}}
        <div>
            <h3 class="mb-2">Enter your comment here!</h3>
            <textarea class="bg-gray-200 p-2" name="content" id="" cols="60" rows="10"></textarea>

            @error('content')
                <small class="block text-red-600"><em> {{ $message }}</em></small>
            @enderror
        </div>

        <div>
            <input class="cursor-pointer text-xl mt-2 bg-gray-700 px-2 py-1 text-gray-50 " type="submit" value="Make Comment" />
        </div>
   </form>
</div>

<button id="click">click me</button>
