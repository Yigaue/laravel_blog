 @extends   ('layouts.master')

 @section('content')
    <main role="main">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>

       @foreach ($posts as $post)
          @include('posts.post')
        @endforeach

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

   @include('layouts.aside')

  </div><!-- /.row -->

</main><!-- /.container -->
 @endsection
