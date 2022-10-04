@extends('layouts.app')
@section('content')
<h2>Contact Form</h2>
<form action="{{route('contact')}}" class="form-group" method="post">
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
        <span>Message</span>
        <textarea type="text" cols="40" rows="5" name="message" value="{{old('message')}}" class="form-control" placeholder="enter your message..."></textarea>
    </div>
    <br>
    <input type="submit" class="btn btn-dark" value="Send" >                  
</form>
@endsection 