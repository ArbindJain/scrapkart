@extends('main')

@section('title', 'View Profile')

@section('content')

	<h1>{{ $user->name }}'s Profile</h1>
	<ul>
		<li>Name: {{ $user->name }}</li>
		<li>Email: {{ $user->email }}</li>
		<li>Last Name: {{ $user->turnover }}</li>
		<li>Mobile: {{ $user->mobile }}</li>
		<li>Designation: {{ $user->designation }}</li>
	</ul>

	@if(Sentry::check())

		{{ link_to_route('profiles.edit', 'Edit Your Profile', $user->id, ['class' => 'btn btn-primary']) }}

	@endif

@stop