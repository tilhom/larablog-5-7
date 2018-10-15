@extends ('blog.layout.post')

@section ('content')
<div class="col-md-8 blog-main">
  <h3 class="pb-3 mb-4 font-italic border-bottom">
    From the Firehose
  </h3>

  <div class="blog-post">
    <h2 class="blog-post-title">
      <a href="/posts/{{$post->id}}">{{$post->title}}</a>
    </h2>
    <p class="blog-post-meta">
      <a href="#">{{$post->user->name}}</a> on
      {{$post->created_at->format('d-m-Y H:i:s') }}
    </p>

    {!! $post->body !!}
  </div>
  <hr>
  <h2 id="comments">Comments</h2>
  @if(count($post->comments) )
  <ul class="list-group">
    @foreach($post->comments as $comment)
    <li class="list-group-item">
      <b>{{$comment->created_at}}: </b>{{$comment->comment}}
    </li>
    @endforeach
  </ul>
  @else
  <h3>No comments</h3>
  @endif
  <hr>
  <div class="card">
    <div class="card-block">
      <form action="/posts/{{$post->id}}/comments" method="POST">
        @csrf
        <div class="form-group">
          <textarea name="comment" id="body" class="form-control" placeholder="Your comment here.."></textarea>
        </div>
        <div class="form-group  text-center">
          <button type="submit" class="btn btn-outline-primary">Add comment</button>
        </div>
      </form>
    </div>
  </div>
</div><!-- /.blog-main -->
@endsection