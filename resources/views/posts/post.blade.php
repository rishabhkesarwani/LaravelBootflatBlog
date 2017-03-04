<div class="blog-post">
    <h4 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
    </h4>
<p class="blog-post-meta">
        {{ $post->created_at->toFormattedDateString() }}
        <a href="#">Mark</a>
    </p>
    <p>{{ $post->body }}</p>
</div>