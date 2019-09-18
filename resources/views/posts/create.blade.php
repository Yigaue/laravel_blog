@extends('layouts.master')
@section('main')
<main role="main" class="container">
  <div class="row">
  <div class="col-md-8 blog-main">
<h1>Create a Post</h1>
<hr/>
<form method="POST" action="/posts">
         @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Post Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Post Title" name="title">
  </div>

  {{-- <input type="" name="" id=""> --}}

  <div class="form-group">
    <label for="exampleInputPassword1">Post Content</label>
    <textarea id="post-content" name="content" class="form-control"> </textarea>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
</div>
@include('layouts.formErrors')
</form>

</div><!-- /.blog-main -->
@include('layouts.aside')
</div><!-- /.row -->

</main><!-- /.container -->

@endsection