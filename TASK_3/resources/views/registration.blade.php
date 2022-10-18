@extends('Layouts.app')
@section('content')

    <h1>Registration Form</h1>
<form action="{{route('registration')}}" method="POST" class="form-group">
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
        <label>Name</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        <br>
        <label>Email</label>
        <input type="email" name="email" value="{{old('email')}}" class="form-control">
        <br>
        <label>Address</label>
        <input type="text" name="address" value="{{old('address')}}" class="form-control">
        <br>
        <label>Age</label>
        <input type="text" name="age" value="{{old('age')}}" class="form-control">
        <br>
        <label>Password</label>
        <input type="password" name="password" value="{{old('password')}}" class="form-control">
        <br>
        <input type="submit" name="submit" value="Add" class="btn btn-success">


    </div>
</form>





@endsection