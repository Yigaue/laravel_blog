@extends('layouts.master');

@section('content')

  <div class="blog-post">
        <h1 class="blog-post-title">
        {{ucwords($post->title)}}
        </h1>

        @if(count($post->tags))

        <ul>
            @foreach ($post->tags as $tag)
               <li>
                   
               <a href="/posts/tags/{{$tag->name}}">
                    {{$tag->name}}
                </a>
            
            </li>
            @endforeach

        </ul>
        @endif
    <p class="blog-post-meta">{{$post->created_at->diffForHumans()}}  
        
        @if(! empty ($post->user->name))
        <a href="#">{{$post->user->name}} </a>

        @else
        <span>Anonymouse</span>
        @endif
    </p>

          <p>{{$post->body}}</p>
          
      </div><!-- /.blog-post -->
      <hr>
      <div class="comments">

          <ul class="list-group">
            @foreach($post->comments as $comment)

                <li class="list-group-item">
                    <strong>
                        {{$comment->created_at->diffForHumans()}} &nbsp:
                    </strong>
                    {{$comment->body}}
                </li>
            @endforeach
             </ul>
        </div>
         
      {{-- Add a comment --}}
      
          
          <div class="card comment">
              <div class="card-body">
              <form action="/posts/{{$post->id}}" method="POST">
                {{ csrf_field() }}

                      <div class="form-group">
                          <textarea class ="form-control" name="body" id="" placeholder="your comment here">

                          </textarea>
                      </div>

                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">
                              Add Comment
                          </button>
                      </div>

                      @include('layouts.errors')
                  </form>
              </div>

          </div>
    
      

@endsection