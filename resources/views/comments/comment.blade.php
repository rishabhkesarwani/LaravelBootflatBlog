<div class="comments">
	<ul class="list-group">
		@foreach ($post->comments as $comment)
			<li class="list-group-item">
				<strong>
					{{ $comment->created_at->diffForHumans() }}: &nbsp
				</strong>
				{{ $comment->body }}
			</li>
		@endforeach
		<div class="list-group-item">
		<h5>Share your thoughts:</h5>
			<form method="POST" action="/posts/{{ $post->id }}/comments">
			    {{ csrf_field() }}
			    <div class="form-group">
			        <textarea class="form-control" id="body" name="body"></textarea>
			    </div>
			    <div class="form-group">
			        <button type="submit" class="btn btn-primary">Add a comment</button>
			    </div>
			</form>
		</div>
	</ul>
</div>