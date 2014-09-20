@extends('main')

@section('title', 'Productlisting')

@section('content')


		<div class="container">
	    <div class="row">
			<div class="col-md-6 col-md-offset-6 ">
						<h1 class="text-center"> Create your account Here!</h1>

				    	{{ Form::open(['route' => 'registration.store']) }}
	                    <fieldset>

	                    	@if (Session::has('flash_message'))
								<div class="form-group">
									<p>{{ Session::get('flash_message') }}</p>
								</div>
							@endif
							<h4>Personal Details</h4>
							<!--  name field -->
							<div class="form-group row">
								{{ Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control input-lg input-llg'])}}
								{{ errors_for('name', $errors) }}
							</div>


				    	  	<!-- Email field -->
							<div class="form-group">
								{{ Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('email', $errors) }}
							</div>
							<div class="row">
							<!-- Password field -->
							<div class="form-group col-md-6 pull-left">
								{{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('password', $errors) }}
							</div>

							<!-- Password Confirmation field -->
							<div class="form-group col-md-6 pull-right">
								{{ Form::password('password_confirmation', ['placeholder' => 'Confirm Password ', 'class' => 'form-control input-lg', 'required' => 'required'])}}
								{{ errors_for('password_confirmation', $errors) }}
							</div>

							</div>
							<div class="row">
							<!-- Phone -->
							<div class="form-group col-md-6 pull-left">
								{{ Form::text('mobile', null, ['placeholder' => 'Mobile', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('mobile', $errors) }}
							</div>
							
							<!-- Designation  -->
							<div class="form-group col-md-6 pull-right ">
								{{ Form::text('designation', null, ['placeholder' => 'Designation', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('designation', $errors) }}
							</div>
							</div>
							<h4>Business Details</h4>
							<!-- company name -->
							<div class="form-group ">
								{{ Form::text('company_name', null, ['placeholder' => 'Company Name', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('company_name', $errors) }}
							</div>
							<!-- Address -->
							<div class="form-group">
								{{ Form::text('address', null, ['placeholder' => 'Address line 1', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('address', $errors) }}
							</div>
							<div class="row">
							<!-- Country -->
							<div class="form-group col-md-6 pull-left">
								{{ Form::select('country', array('' => 'Select Country ','india' => 'India'), ['class' => 'form-control input-llg'])}}
								{{ errors_for('country', $errors) }}
							</div>
							<!-- City -->
							<div class="form-group col-md-6 pull-right">
								<select class="input-llg" name="city">
									<option value=""> Select City </option>
									<option value="Agra">Agra</option>
									<option value="Ahmedabad">Ahmedabad</option>
									<option value="Allahabad">Allahabad</option>
									<option value="Alwar">Alwar</option>
									<option value="Aurangabad">Aurangabad</option>
									<option value="Bangalore">Bangalore</option>
									<option value="Bhiwadi">Bhiwadi</option>
									<option value="Bhopal">Bhopal</option>
									<option value="Bhubaneshwar">Bhubaneshwar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chennai">Chennai</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Coimbatore">Coimbatore</option>
									<option value="Dehradun">Dehradun</option>
									<option value="Delhi">Delhi</option>
									<option value="Ghaziabad">Ghaziabad</option>
									<option value="Goa">Goa</option>
									<option value="Gurgaon">Gurgaon</option>
									<option value="Guwahati">Guwahati</option>
									<option value="Hyderabad">Hyderabad</option>
									<option value="Indore">Indore</option>
									<option value="Jaipur">Jaipur</option>
									<option value="Kanpur">Kanpur</option>
									<option value="Kerala">Kerala</option>
									<option value="Kochi  Ernakulam">Kochi  Ernakulam</option>
									<option value="Kolkata">Kolkata</option>
									<option value="Lucknow">Lucknow</option>
									<option value="Ludhiana">Ludhiana</option>
									<option value="Mangalore">Mangalore</option>
									<option value="Mathura">Mathura</option>
									<option value="Mohali">Mohali</option>
									<option value="Mumbai">Mumbai</option>
									<option value="Mysore">Mysore</option>
									<option value="Nagpur">Nagpur</option>
									<option value="Nashik">Nashik</option>
									<option value="Noida">Noida</option>
									<option value="Ooty">Ooty</option>
									<option value="Panipat">Panipat</option>
									<option value="Patna">Patna</option>
									<option value="Pune">Pune</option>
									<option value="Rajkot">Rajkot</option>
									<option value="Sangli">Sangli</option>
									<option value="SataraDistrict">SataraDistrict</option>
									<option value="Shimla">Shimla</option>
									<option value="Surat">Surat</option>
									<option value="Trichy">Trichy</option>
									<option value="Udaipur">Udaipur</option>
									<option value="Uttrakhand">Uttrakhand</option>
									<option value="Vadodara">Vadodara</option>
									<option value="Visakhapatnam">Visakhapatnam</option>
									<option value="Zirakpur">Zirakpur</option>
								</select>
								{{ errors_for('city', $errors) }}
							</div>

							</div>
							<div class="row">
							<!-- pincode -->
							<div class="form-group col-md-6 pull-left">
								{{ Form::text('pin_code', null, ['placeholder' => 'Pin Code', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('pin_code', $errors) }}
							</div>
							<!-- Phone -->
							<div class="form-group col-md-6 pull-right">
								{{ Form::text('phone', null, ['placeholder' => 'Phone', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('phone', $errors) }}
							</div>
							</div>
							<!-- business_type -->
							<div class="form-group">
								{{ Form::select('business_type', array('' => 'Primary Business Type','manufacturer' => 'Manufacturer','foundry' => 'Foundry','traders' => 'Trader','others' => 'Others'), ['class' => 'form-control input-llg'])}}
								{{ errors_for('business_type', $errors) }}
							</div>
							<div class="row">
							<!-- Turn over -->
							<div class="form-group col-md-6 pull-left">
								{{ Form::text('turnover', null, ['placeholder' => 'Turnover', 'class' => 'form-control input-lg'])}}
								{{ errors_for('turnover', $errors) }}
								<span class="help-block"> In <i class="fa fa-inr"></i> lakhs or crores </span>
							</div>
							<!-- pan -->
							<div class="form-group col-md-6 pull-right">
								{{ Form::text('pan', null, ['placeholder' => 'Pan', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('pan', $errors) }}
								<span class="help-block"> Ex: XX11XX345X </span>
							</div>
							</div>
							
							<!-- description -->
							<div class="form-group">
								{{ Form::checkbox('terms', '1')}}
								{{ errors_for('terms', $errors) }}
								<strong>I agree to the Scrapkart <a target="_blank"  href="#">Terms of Service</a> and <a target="_blank" id="PrivacyLink" href="#">Privacy Policy</a></strong>
							</div>
							<div class="row">
							<div class="form-group  col-md-12 ">
								( <b style="color:#ff8888;"> | </b> ) Required Fields.
							</div>
							</div>
							



							<!-- Submit field -->
							<div class="form-group">
								{{ Form::submit('Create Account', ['class' => 'btn btn-lg btn-primary btn-block']) }}
							</div>




				    	</fieldset>
				      	{{ Form::close() }}
				

			</div>
		</div>
	</div>



@stop