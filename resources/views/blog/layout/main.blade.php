<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- <link href="/css/blog.css" rel="stylesheet"> -->
  </head>

  <body>

    <div class="container">
      @include('blog.partial.header')

      @include('blog.partial.nav')

      @include('blog.partial.jumbotron')
      
      @include('blog.partial.featured')
    </div>

   @yield('content')

   @include('blog.partial.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/app.js"></script>
  </body>
</html>
