@extends('blog.layout.main')

@section('content')
<main role="main" class="container">
	<div class="row">
		<div class="col-md-8 blog-main">
			<h3 class="pb-3 mb-4 font-italic border-bottom">
				From the Firehose
			</h3>

			<!-- /.blog-post -->
			@include('blog.post')
			<nav class="blog-pagination">
				<!-- <a class="btn btn-outline-primary" href="#">Older</a>
				<a class="btn btn-outline-secondary disabled" href="#">Newer</a> -->
				{{$posts->links()}}
			</nav>

		</div><!-- /.blog-main -->

		@include('blog.layout.sidebar')

	</div><!-- /.row -->

</main><!-- /.container -->

@endsection