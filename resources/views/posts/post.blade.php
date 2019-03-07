
<div class="col-lg-8">
<div class="card border-primary mb-3" >
    <div class="card-header">{{ $post->created_at->toFormattedDateString() }}</div>
    <div class="card-body">
        <h4  class="card-title">{{ $post->title }}</h4>
        <p class="card-text">{{ $post->body }}</p>

        <!-- Authentication Links -->
        @if (Auth::user() && Auth::user()->hasRole('post_moderator'))
            <br>
            <a href="/posts/{{ $post->id }}/delete">
                <button  type="button" class="btn btn-danger btn-sm">Delete</button>
            </a>

        @endif
    </div>
</div>

</div>


