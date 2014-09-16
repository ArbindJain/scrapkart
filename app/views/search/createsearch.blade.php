@extends('master')

@section('title', 'search')
@section('content')
	{{Form::open(['url'=>'#','class'=>'navbar-form navbar-left'])}}
		{{Form::text('product')}}
		{{Form::submit('SEARCH')}}
	{{Form::close()}}
@endsection