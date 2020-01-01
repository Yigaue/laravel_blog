
            
          <div class="blog-post">
        <h2 class="blog-post-title">
        <a href="/posts/{{$post->id}}">
            {{ucwords($post->title)}}</h2>
            </a>

            
            @if( ! empty($post->user->name))
            <p class="blog-post-meta">{{$post->created_at->diffForHumans()}} <a href="#"> {{ $post->user->name}}</a></p>
            @else
            <span>anonymous author</span>
            @endif
          <p>{{$post->body}}</p>
      </div><!-- /.blog-post -->

      