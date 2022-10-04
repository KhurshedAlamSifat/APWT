@extends('layouts.app')
@section('content')
<h2>Login Form</h2>
<form action="{{route('login')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="email" name="email" value="{{old('email')}}" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="password" name="password" value="{{old('password')}}" class="form-control">
    </div>
    <br>
    <input type="submit" class="btn btn-dark" value="Log in" >                  
</form>
@endsection 