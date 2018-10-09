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
</div><!-- /.blog-main -->
@endsection