  <hr>

  <div class="card">
    <div class="card-body">
       <h4 class="card-title">New comment</h4>
      <form action="/posts/{{$post->id}}/comments" method="POST">
        @csrf
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Input your email here ..">
        </div>        
        <div class="form-group">
          <textarea name="comment" id="body" class="form-control" placeholder="Your comment here.."></textarea>
        </div>
        <div class="form-group  text-center">
          <button type="submit" class="btn btn-outline-primary">Add comment</button>
        </div>
      </form>
    </div>
  </div>