
<div class="flex flex-col flex-wrap justify-center items-center mt-10">
    @foreach ($comments as $comment)
        <div class="my-2">
            <p>{{ $comment->user->name }}</p>

            <article>
                <p>{{ $comment->content }}</p>
               {{-- <Like
                    :likeable_id = "{{ $comment->id }}"
                    likeable_type = "App\Models\Comment"
                    :like_count = "{{ $likeCount }}"
                    :is_liked = "{{ $isLiked }}"
                ></Like> --}}
            </article>
        </div>
    @endforeach


    {{ $comments->links() }}
</div>

