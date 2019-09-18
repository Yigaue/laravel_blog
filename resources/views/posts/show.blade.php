@extends('layouts.master')

@section('main')
<main role="main" class="container">
  <div class="row">
  <div class="col-md-8 blog-main">
       <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>
<h1> {{$post->title}}</h1>

{{$post->content}}

<!-- comment section belongs here -->
<hr/>
<h3>Comments</h3>
<div class="comments" >
    <ul class="list-group">
@foreach($post->comments as $comment)
<br/>
<article style="border-left: 3px solid black; padding-left: 15px">
<li class="list-group-item">
   
{{$comment->body}}
<strong>
        {{$comment->created_at->diffForHumans()}}        
</strong>
</li>
</article>
@endforeach
</ul>
</div> <!--/.comments -->

<!-- leave a comment section -->
<hr/>

<div class="card">
    <div class="card-block">
    <form method="POST" action="/posts/{{$post->id}}/comments">
                @csrf
    <div class="form-group">
    <label for="comment">Please Leave a comment</label>
    <textarea placeholder="Your comment here" id="comment" name="body" class="form-control"> </textarea>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Add Comment</button>
</div>
@include('layouts.formErrors')
</form>
</div><!-- /.card-block -->
</div><!-- /.card -->
</div><!-- /.blog-main -->

@include('layouts.aside')

</div><!-- /.row -->
</main><!-- /.container -->
@endsection
