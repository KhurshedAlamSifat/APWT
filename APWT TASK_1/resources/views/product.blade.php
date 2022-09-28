@extends('layouts.app')
@section('content')

<h2>Products</h2>
@foreach($names as $n)
<li>{{$n}}</li>
@endforeach

@endsection