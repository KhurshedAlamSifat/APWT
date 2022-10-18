@extends('Layouts.app')
@section('content')

    <h1>contact</h1>


<div>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach ($students as $students)
            <tr>
                <td>{{$students->id}}</td>
                <td>{{$students->name}}</td>
                <td><a href="/student/{{$students->id}}"><button class="btn btn-success">View</button></a></td>
                <td><a href="/student/edit/{{$students->id}}"><button class="btn btn-success">Edit</button></a></td>
                <td><a href="/student/delete/{{$students->id}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
        @endforeach
    </table>
    
       
    
</div>





@endsection