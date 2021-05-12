@extends('layouts.app')



@section('title', 'Vestiti')

@section('content')
<h1>I vestiti</h1> 


@foreach ($vestiti as $vestito)
    <h3>{{($vestito['type'])}}</h3>
@endforeach

@endsection
