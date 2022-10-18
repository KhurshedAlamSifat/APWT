@extends('Layouts.app')
@section('content')

    <h1>login</h1>
<form action="{{route('login')}}" method="POST" class="form-group">
    {{csrf_field()}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                
            @endforeach
        </ul>

    </div>
        
    @endif

    <div class="col-md-4 form-group">
        <label>Username or email</label>
        <input type="email" name="email" value="{{old('email')}}" class="form-control">
        <br>
        <label>Password</label>
        <input type="password" name="password" value="{{old('passwords')}}" class="form-control">
        <br>
        <input type="submit" name="submit" value="Login" class="btn btn-success">


    </div>
</form>







@endsection