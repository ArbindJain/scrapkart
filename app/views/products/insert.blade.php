@extends('main')

@section('title', 'Productlisting')

@section('content')


		<div class="container">
	    <div class="row">
			<div class="col-md-7 col-md-offset-5 ">
						<h1 class="text-center"> List Your Scrap Here!</h1>

				    	{{ Form::open(['route' => 'products.store','files'=>'true','class' =>'form-horizontal ']) }}
	                    <fieldset>

	                    	@if (Session::has('flash_message'))
								<div class="form-group ">
									<p>{{ Session::get('flash_message') }}</p>
								</div>
							@endif
							<!-- Part number field -->
							<!--<div class="form-group">
								{{ Form::text('user_id', null, ['placeholder' => 'Part Number', 'class' => 'form-control', 'required' => 'required'])}}
								{{ errors_for('user_id', $errors) }}
							</div>-->
							<div class="row">
								<div class="form-group col-md-12 pull-left">
								{{ Form::select('Metal', array('' => 'Select Metal','steel' => 'Steel','aluminum' => 'Aluminum','copper' => 'Copper','iron' => 'Iron','cobalt' => 'Cobalt','nickel' => 'Nickel'), ['class' => 'form-control'])}}
								{{ errors_for('shape', $errors) }}
								</div>
							</div>
							

							
							<!-- supplier name field -->
							<div class="row">
								<div class="form-group col-md-12 pull-left">
								{{ Form::text('supplier', null, ['placeholder' => 'Supplier', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('supplier', $errors) }}
							</div>
							</div>
							
							
							<!-- Grade field -->
							<div class="row">
							<div class="form-group col-md-6  ">
								{{ Form::text('grade_a', null, ['placeholder' => 'Grade', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('grade_a', $errors) }}
								<span class="help-block"> Ex: CRNO </span>
								
							</div>

								
							<!-- Grade field -->
							<div class=" col-md-6 margin-15" >
								{{ Form::text('grade_b', null, ['placeholder' => 'Grade', 'class' => 'form-control input-lg input-llg','required' => 'required'])}}
								{{ errors_for('grade_b', $errors) }}
								<span class="help-block">Ex: 530 </span>
							</div>
							</div>
							<!-- shape -->
							<div class="row">
								<div class="form-group col-md-12 " id="shape">
								<select class="input-llg" name="shape">
									<option value=""> Select City </option>
									<option value="circle">Circle</option>
									<option value="square">Square</option>
									<option value="rectangle">Rectangle</option>
									<option value="triangle">Triangle</option>
									<option value="trapezoid">Trapezoid</option>
									<option value="others">Others</option>
								</select>
								{{ errors_for('shape', $errors) }}
							</div>
							</div>
							

							<!--  Radius -->
							<div class="row"> 
								<div class= "sizeA box">
									<div class="form-group col-md-4 ">
										{{ Form::text('size_a', null, [ 'class' => 'place_a form-control input-lg'])}}
										{{ errors_for('size_a', $errors) }}
										<span class="help-block">In Millimeter(mm)</span>
									</div>
								</div>
								<div class="sizeB box ">
								<!-- breadth -->
									<div class=" col-md-4 margin-15">
										{{ Form::text('size_b', null, ['class' => ' place_b form-control input-lg'])}}
										{{ errors_for('size_b', $errors) }}
										<span class="help-block">In Millimeter(mm)</span>
									</div>
								</div>
								<div class="sizeC box ">
								<!-- breadth -->
									<div class=" col-md-4 ">
										{{ Form::text('size_c', null, ['class' => ' place_c form-control input-lg'])}}
										{{ errors_for('size_c', $errors) }}
										<span class="help-block">In Millimeter(mm)</span>
									</div>
								</div>
							</div>
							

							
							
							
							
							
							<!-- Thickness -->
							<div class="row">
								<div class="form-group col-md-12" >
								{{ Form::text('thickness', null, ['placeholder' => 'Thickness', 'class' => 'form-control input-lg input-llg' , 'required' => 'required'])}}
								{{ errors_for('thickness', $errors) }}
								<span class="help-block">In Millimeter(mm) </span>

								
							</div>
							</div>
							
							
							<!-- Volume -->
							<div class="row">
								<div class="form-group col-md-4">
								{{ Form::text('volume', null, ['placeholder' => 'Production Vol.', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('volume', $errors) }}
								<span class="help-block">Ex: XX Number Per Day OR XX Tons Per Day </span>
							</div>
							<div class=" col-md-4 margin-15">
								{{ Form::select('bynumber', array('number' => 'Number','weight' => 'Weight'), ['class' => 'form-control'])}}
								{{ errors_for('bynumber', $errors) }}
							</div>
							<div class=" col-md-4 ">
								{{ Form::select('perday', array('per day' => 'Per Day' , 'per month' => 'Per Month'), ['class' => 'form-control'])}}
								{{ errors_for('perday', $errors) }}
							</div>

							</div>
							
							<!-- image -->
							<div class="row">
								<div class="form-group col-md-12 input-llg">
									{{Form::file('images',['class' => 'form-control btn  input-llg'])}}
									{{ errors_for('images', $errors) }}
								</div>
							</div>
							
							<div class="row">
							<div class="form-group  col-md-12 ">
								( <b style="color:#ff8888;"> | </b> ) Required Fields.
							</div>
							</div>

							<!-- Submit field -->
							<div class="row">
							<div class="form-group  col-md-12 ">
								{{ Form::submit('Insert product', ['class' => 'btn btn-md btn-primary btn-block file-Upload']) }}
							</div>
							</div>
							
						</fieldset>
				      	{{ Form::close() }}
				

			</div>
		</div>
	</div>



@stop