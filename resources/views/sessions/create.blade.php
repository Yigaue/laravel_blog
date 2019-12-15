@extends('layouts.master')

@section('content')

 <div class="col-sm-8">
        <h1>Sign in </h1>
        <form method="POST" action="/login">

            {{ csrf_field() }}

            <div>
               
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password">password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

                <div>
                   
                        @include('layouts.errors')
                   
                </div>
            </div>

        </form>
  
</div>
    
@endsection 