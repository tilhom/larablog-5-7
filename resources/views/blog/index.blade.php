@extends('blog.layout.main')

@section('content')
<main role="main" class="container">
	<div class="row">
		<div class="col-md-8 blog-main">
			<h3 class="pb-3 mb-4 font-italic border-bottom">
				From the Firehose
			</h3>
			@if(count($posts))
			@foreach ($posts as $post)
			<!-- /.blog-post -->
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
			@endforeach
			@else
			<h3>Nothing published yet..</h3>
			@endif
			<nav class="blog-pagination">
				<!-- <a class="btn btn-outline-primary" href="#">Older</a>
					<a class="btn btn-outline-secondary disabled" href="#">Newer</a> -->
					{{$posts->links()}}
				</nav>

			</div><!-- /.blog-main -->

			@include('blog.partial.sidebar')

		</div><!-- /.row -->

	</main><!-- /.container -->

	@endsection