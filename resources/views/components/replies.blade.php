
<div class="flex flex-col flex-wrap justify-center items-center ml-20">
    @foreach ($replies as $comment)
        <div 
            style="width: 74%; border-radius: 10px 12px;" 
            class="my-2 bg-green-100 p-3 hover:bg-green-200 hover:font-semibold transition duration-300 "
        >
            <p class="mb-2 font-semibold">by {{ $comment->user->name }} <small>{{ $comment->created_at->diffForHumans() }}</small></p>

            <article>
                <p>{{ $comment->content }}</p>

                <div class="mt-2">
                    <Like
                        :likeable_id = "{{ $comment->id }}"
                        likeable_type = "App\Models\Comment"
                    ></Like>
                </div>
            </article>
        </div>
    @endforeach
{{-- 
    @if ($replies->count() > )
        
    @endif --}}
</div>

