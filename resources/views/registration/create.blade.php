@extends('layouts.master');

@section('content')


    <div class="col-sm-8">
        <h1>Register</h1>
        <form action="/register" method="post">

            {{ csrf_field() }}

            <div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">password confirmation:</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

                <div>
                   
                        @include('layouts.errors')
                   
                </div>
            </div>

        </form>
    </div>
</div>
    
@endsection