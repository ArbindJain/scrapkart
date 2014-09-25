@extends('main')

@section('title', 'Productlisting')

@section('content')


		<div class="container">
	    <div class="row">
	    <div class="col-md-4 margin-top-30 text-center signup-info-matter ">
	    		<h1 class=" text-uppercase margin-top-40 signup-info "> Register Now! </h1>
	    		<img class="margin-top-30" src="data:image/png;base64,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">
	    		<ul style="margin-bottom:50px;" class="list-unstyled signup-text-block margin-top-40">
	    			<li class="signup-text" ><i class="fa fa-caret-right"></i> Your contact info will never be shared &nbsp;&nbsp;&nbsp;&nbsp;publicly.</li>
	    			<li class="signup-text"><i class="fa fa-caret-right"></i> You will only be contacted by &nbsp;&nbsp;&nbsp;&nbsp;Scrapkart executives for <br>&nbsp;&nbsp;&nbsp;&nbsp;verified potential transaction.</li>
	    		</ul>
	    	</div>
			<div class="col-md-7  ">
						<h1 class="text-center"> </h1>

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
								{{ Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control input-lg input-llg','required' => 'required'])}}
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
								{{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
								{{ errors_for('password', $errors) }}
							</div>

							<!-- Password Confirmation field -->
							<div class="form-group col-md-6 pull-right">
								{{ Form::password('password_confirmation', ['placeholder' => 'Confirm Password ', 'class' => 'form-control input-lg input-llg', 'required' => 'required'])}}
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
								{{ Form::text('designation', null, ['placeholder' => 'Designation', 'class' => 'form-control input-lg'])}}
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
								<select class="input-llg" name="country">
									<option value=""> Select Country </option>
									<option value="india">India</option>
								</select>
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
								{{ Form::select('business_type', array('' => 'Primary Business Type','manufacturer' => 'Manufacturer','foundry' => 'Foundry','traders' => 'Trader','other' => 'Others'), ['class' => 'form-control input-llg'])}}
								{{ errors_for('business_type', $errors) }}
							</div>
							<!--others-->
							<div class="form-group ">
								{{ Form::text('others', null, ['placeholder' => 'others', 'class' => 'form-control input-lg input-llg box sizeA'])}}
								{{ errors_for('others', $errors) }}
							</div>
							
							<div class="row">
							<!-- Turn over -->
							<div class="form-group col-md-6 pull-left">
								{{ Form::text('turnover', null, ['placeholder' => 'Turnover', 'class' => 'form-control input-lg'])}}
								{{ errors_for('turnover', $errors) }}
								<span class="help-block"> In <i class="fa fa-inr"></i> lakhs or crores Ex: XXX Lakhs or XXX Crores </span>
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