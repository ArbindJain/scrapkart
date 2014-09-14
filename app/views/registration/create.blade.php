@extends('master')

@section('title', 'Register')

@section('content')


		<div class="container">
	    <div class="row">
			<div class="col-md-6 col-md-offset-3">
	    		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h1 class="panel-title">Register</h1>
				 	</div>
				  	<div class="panel-body">
				    	{{ Form::open(['route' => 'registration.store']) }}
	                    <fieldset>

	                    	@if (Session::has('flash_message'))
								<div class="form-group">
									<p>{{ Session::get('flash_message') }}</p>
								</div>
							@endif

				    	  	<!-- Email field -->
							<div class="form-group">
								{{ Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('email', $errors) }}
							</div>

							<!-- Password field -->
							<div class="form-group">
								{{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('password', $errors) }}
							</div>

							<!-- Password Confirmation field -->
							<div class="form-group">
								{{ Form::password('password_confirmation', ['placeholder' => 'Password Confirm', 'class' => 'form-control input-lg', 'required' => 'required'])}}

							</div>

							<!-- First name field -->
							<div class="form-group">
								{{ Form::text('first_name', null, ['placeholder' => 'First Name', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('first_name', $errors) }}
							</div>

							<!-- Last name field -->
							<div class="form-group">
								{{ Form::text('last_name', null, ['placeholder' => 'Last Name', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('last_name', $errors) }}
							</div>
							<!-- company name -->
							<div class="form-group">
								{{ Form::text('company_name', null, ['placeholder' => 'Company Name', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('company_name', $errors) }}
							</div>
							<!-- Address -->
							<div class="form-group">
								{{ Form::text('address', null, ['placeholder' => 'Address', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('address', $errors) }}
							</div>
							<!-- Phone -->
							<div class="form-group">
								{{ Form::text('phone', null, ['placeholder' => 'Phone', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('phone', $errors) }}
							</div>
							<!-- website -->
							<div class="form-group">
								{{ Form::text('website', null, ['placeholder' => 'Website', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('website', $errors) }}
							</div>
							<!-- pan -->
							<div class="form-group">
								{{ Form::text('pan', null, ['placeholder' => 'Pan', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('pan', $errors) }}
							</div>
							<!-- tin -->
							<div class="form-group">
								{{ Form::text('tin', null, ['placeholder' => 'Tin', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('tin', $errors) }}
							</div>
							<!-- tan -->
							<div class="form-group">
								{{ Form::text('tan', null, ['placeholder' => 'Tan', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('tan', $errors) }}
							</div>
							<!-- description -->
							<div class="form-group">
								{{ Form::text('description', null, ['placeholder' => 'Description', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('description', $errors) }}
							</div>
							



							<!-- Submit field -->
							<div class="form-group">
								{{ Form::submit('Create Account', ['class' => 'btn btn-lg btn-primary btn-block']) }}
							</div>




				    	</fieldset>
				      	{{ Form::close() }}
				    </div>
				</div>

				<p style="text-align:center">Already have an account? <a href="/login">Login</a></p>

			</div>
		</div>
	</div>



@stop