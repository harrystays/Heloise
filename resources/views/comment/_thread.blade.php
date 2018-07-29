<div class="row">
    <div class="col-md-8 flex-center">
        <p>
            <strong>
                <a href="{{ route('comment.create', ['postId' => $post->id]) }}" rel="nofollow">Add a Comment</a>
            </strong>
        </p>

        @forelse($post->comment as $comment)
            <article class="article">
                {{-- <div class="panel-heading">{{ $comment->created_at }}</div> --}}
                <div class="article-meta">
                    {{ $comment->creator->name }} • {{ $comment->created_at->diffForHumans() }}
                </div>
                <div class="text-center">
                    {{ $comment->body }}
                </div>
            </article>
        @empty
            <p class="text-center">
                Be the first to add a comment!
            </p>
        @endforelse
    </div>
</div>
