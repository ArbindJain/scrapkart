@extends('master')

@section('title', 'Productlisting')

@section('content')


		<div class="container">
	    <div class="row">
			<div class="col-md-6 col-md-offset-3">
	    		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h1 class="panel-title">Product listing</h1>
				 	</div>
				  	<div class="panel-body">
				    	{{ Form::open(['route' => 'products.store','files'=>'true']) }}
	                    <fieldset>

	                    	@if (Session::has('flash_message'))
								<div class="form-group">
									<p>{{ Session::get('flash_message') }}</p>
								</div>
							@endif
							<!-- Part number field -->
							<!--<div class="form-group">
								{{ Form::text('user_id', null, ['placeholder' => 'Part Number', 'class' => 'form-control', 'required' => 'required'])}}
								{{ errors_for('user_id', $errors) }}
							</div>-->
				    	  	<!-- Part number field -->
							<div class="form-group">
								{{ Form::text('part_number', null, ['placeholder' => 'Part Number', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('part_number', $errors) }}
							</div>

							
							<!-- supplier name field -->
							<div class="form-group">
								{{ Form::text('supplier', null, ['placeholder' => 'Supplier', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('supplier', $errors) }}
							</div>

							<!-- Grade field -->
							<div class="form-group">
								{{ Form::text('grade', null, ['placeholder' => 'Grade', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('grade', $errors) }}
							</div>
							<!-- shape -->
							<div class="form-group" id="shape">
								{{ Form::label('shape', 'Shape') }}
								{{ Form::select('shape', array('square' => 'square', 'rectangle' => 'rectangle','triangle'=>'triangle'), ['class' => 'form-control rem input-lg'])}}
								{{ errors_for('shape', $errors) }}
							</div>
							<!--  Radius -->
							<div class="form-group" id= "radius">
								{{ Form::text('radius', null, ['placeholder' => 'Radius', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('radius', $errors) }}
							</div>
							<!-- Length -->
							<div class="form-group" id="length">
								{{ Form::text('length', null, ['placeholder' => 'Length', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('length', $errors) }}
							</div>
							<!-- breadth -->
							<div class="form-group" id="breadth">
								{{ Form::text('breadth', null, ['placeholder' => 'Breadth', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('breadth', $errors) }}
							</div>
							
							<!-- Thickness -->
							<div class="form-group" id="thickness">
								{{ Form::text('thickness', null, ['placeholder' => 'Thickness', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('thickness', $errors) }}
							</div>
							<!-- Weight -->
							<div class="form-group">
								{{ Form::text('weight', null, ['placeholder' => 'Weight', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('weight', $errors) }}
							</div>
							<!-- image -->
							<div class="form-group">
								{{Form::file('images')}}
								{{ errors_for('images', $errors) }}
							</div>
							


							<!-- Submit field -->
							<div class="form-group">
								{{ Form::submit('Insert product', ['class' => 'btn btn-lg btn-primary btn-block']) }}
							</div>




				    	</fieldset>
				      	{{ Form::close() }}
				    </div>
				</div>

			</div>
		</div>
	</div>



@stop