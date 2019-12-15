@extends('layouts.master')

@section('content')

 <h1>Create a Post</h1>

 <form method="POST" action="/posts">

    {{csrf_field()}}

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="form-group">
    <label for="body">body</label>
   <textarea class = "form-control" name="body" id="body" cols="20" rows="10" required></textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
    </div>
    @if(count($errors))
<div class="form-group alert alert-da">
    @include('layouts.errors')
</div>
    @endif
</form>
<br/>

   
@endsection