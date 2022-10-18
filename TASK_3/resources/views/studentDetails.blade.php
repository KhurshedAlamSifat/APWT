@extends('Layouts.app')
@section('content')

    <h1>contact</h1>


<div>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Adress</th>
            <th>Age</th>

        </tr>

            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->age}}</td>
            </tr>
  
    </table>
    
       
    
</div>





@endsection