@extends ('blog.layout.post')

@section ('content')
<div class="col-md-8 blog-main">
  <h3 class="pb-3 mb-4 font-italic border-bottom">
    From the Firehose
  </h3>

  @include('blog.post')
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
  @include('blog.partial.commentform')
</div><!-- /.blog-main -->
@endsection