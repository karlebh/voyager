
@foreach ($comments as $comment)
    <div class="flex flex-col flex-wrap justify-center items-center mt-10 mb-2">
        <div style="width: 78%; border-radius: 10px 12px;" class="my-2 bg-gray-200 p-3">
            <p class="mb-2 font-semibold">by {{ $comment->user->name }} <small>{{ $comment->created_at->diffForHumans() }}</small></p>

            <article data-comment-id="{{ $comment->id }}">
                <p>{{ $comment->content }}</p>

                <div class="mt-2">
                    <Like
                        :likeable_id = "{{ $comment->id }}"
                        likeable_type = "App\Models\Comment"
                    ></Like>
                        
                    <a href="#commentForm" id="reply" class="reply text-blue-500 hover:underline">reply</a>
                </div>
            </article>
        </div>
    </div>

    <x-replies :replies="$comment->replies"/>

@endforeach

    {{ $comments->links() }}

