@extends('Layouts.app')
@section('content')

    <h1>Student Edit Form</h1>
<form action="{{route('studentEdit')}}" method="POST" class="form-group">
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
        <label>id</label>
        <input type="number" readonly name="id" value="{{$student->id}}" class="form-control">
        <label>Name</label>
        <input type="text" name="name" value="{{$student->name}}" class="form-control">
        <br>
        <label>Email</label>
        <input type="email" name="email" value="{{$student->email}}" class="form-control">
        <br>
        <label>Address</label>
        <input type="text" name="address" value="{{$student->address}}" class="form-control">
        <br>
        <label>Age</label>
        <input type="text" name="age" value="{{$student->age}}" class="form-control">
        <br>
        <input type="submit" name="submit" value="Update" class="btn btn-success">


    </div>
</form>





@endsection