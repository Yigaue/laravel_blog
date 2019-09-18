@extends('layouts.master')
@section('main')

<div class ="col-sm-8">
<h1>Register</h1>
<form method ="post" action ="/register" class ="container">
    {{csrf_field()}}
    <div class = "form-group"> 
    <label for ="name"> Name </label>
    <input type ="text" class="form-control" name ="name" id ="name">
    </div>

    <div class ="form-group">
        <label for ="email">Email</label>
        <input type = "email" id ="email" name ="email" class="form-control">
    </div>
    <div class ="form-group">
        <label for = "password">Password </label>
        <input type = "password" name ="password" id ="password" class="form-control">
    </div>

    <div class ="form-group">
            <label for = "password">Password confirmation</label>
            <input type = "password" name ="password_confirmation" id ="password_confirmation" class="form-control">
        </div>
    <div class = "form-group">
        <button type ="submit" class="btn btn-primary">Register</button>
    </div>

    <div class ="form-group">
        @include('layouts.formErrors')
    </div>
</form>
</div>
@endsection
