@extends('protected.admin.master')

@section('title', 'Edit Profile')

@section('content')
	<h1>Edit Profile</h1>

	@if (Session::has('flash_message'))
		<div class="form-group">
			<p style="padding: 5px" class="bg-success">{{ Session::get('flash_message') }}</p>
		</div>
	@endif

	{{ Form::model($user, ['method' => 'PATCH', 'route' => ['admin.profiles.update', $user->id]]) }}

		<div class="form-group">
			{{ Form::label('account_type', 'Account Type:') }}
			{{ Form::select('account_type', $groups, $user_group, ['class' => 'form-control']) }}
			{{ errors_for('account_type', $errors) }}
		</div>

		<!-- email Field -->
		<div class="form-group">
			{{ Form::label('email', 'Email:') }}
			{{ Form::email('email', null, ['class' => 'form-control']) }}
			{{ errors_for('email', $errors) }}
		</div>


		<!-- first_name Field -->
		<div class="form-group">
			{{ Form::label('first_name', 'First Name:') }}
			{{ Form::text('first_name', null, ['class' => 'form-control']) }}
			{{ errors_for('first_name', $errors) }}
		</div>

		<!-- last_name Field -->
		<div class="form-group">
			{{ Form::label('last_name', 'Last Name:') }}
			{{ Form::text('last_name', null, ['class' => 'form-control']) }}
			{{ errors_for('last_name', $errors) }}

		</div>

		<!-- Password field -->
		<div class="form-group">
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
			<p class="help-block">Leave password blank to NOT edit the password.</p>
			{{ errors_for('password', $errors) }}
		</div>

		<!-- Password Confirmation field -->
		<div class="form-group">
			{{ Form::label('password_confirmation', 'Repeat Password:') }}
			{{ Form::password('password_confirmation', ['class' => 'form-control'] )}}

		</div>

		<!-- company name -->
		<div class="form-group">
			{{ Form::label('company_name', 'Company Name:') }}
			{{ Form::text('company_name',null, ['class' => 'form-control']) }}
			{{ errors_for('company_name', $errors) }}
		</div>

		<!--address -->
		<div class="form-group">
			{{ Form::label('address', 'Address:') }}
			{{ Form::text('address',null, ['class' => 'form-control']) }}
			{{ errors_for('address', $errors) }}
		</div>

		<!-- Phone-->
		<div class="form-group">
			{{ Form::label('phone', 'Phone:') }}
			{{ Form::text('phone',null, ['class' => 'form-control']) }}
			{{ errors_for('phone', $errors) }}
		</div>

		<!--website -->
		<div class="form-group">
			{{ Form::label('website', 'Website:') }}
			{{ Form::text('website',null, ['class' => 'form-control']) }}
			{{ errors_for('website', $errors) }}
		</div>

		<!--pan -->
		<div class="form-group">
			{{ Form::label('pan', 'PAN:') }}
			{{ Form::text('pan',null, ['class' => 'form-control']) }}
			{{ errors_for('pan', $errors) }}
		</div>

		<!-- TIN-->
		<div class="form-group">
			{{ Form::label('tin', 'PAN:') }}
			{{ Form::text('tin',null, ['class' => 'form-control']) }}
			{{ errors_for('tin', $errors) }}
		</div>

		<!-- TAN-->
		<div class="form-group">
			{{ Form::label('tan', ' TAN:') }}
			{{ Form::text('tan',null, ['class' => 'form-control']) }}
			{{ errors_for('tan', $errors) }}
		</div>



		<!-- Update Profile Field -->
		<div class="form-group">
			{{ Form::submit('Update Profile', ['class' => 'btn btn-primary']) }}
		</div>

		
	{{ Form::close() }}

@stop