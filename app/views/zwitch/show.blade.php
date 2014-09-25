@extends('main')

@section('content')
<div class="container">
	    <div class="row">
	    	<div class="col-md-4 margin-top-30 text-center signup-info-matter ">
	    		<h1 class=" text-uppercase margin-top-40 signup-info "> Secure Payment </h1>
	    		<img class="margin-top-30" src="data:image/png;base64,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">
	    		<ul style="margin-bottom:50px;" class="list-unstyled signup-text-block margin-top-40">
	    			<li class="signup-text" ><h4><b>SCARPKART SUBSCRIPTION FEE</b></h4></li>
	    			<li class="signup-text" ><img style="padding-left: 30px;" src="/img/subs.png"></li>
	    			<li class="signup-text" style="padding-left:40px; padding-top:10px;"><h4> <b>INTRODUCTORY OFFER</b></h4></li>
	    			<li class="signup-text" ><img style="padding-left: 30px;" src="/img/ins.png"></li>
	    		</ul>
	    	</div>
			<div class="col-md-7">

				    	
<script src="https://www.zwitch.co/api/secure/zwitch.js"> </script>

{{ Form::open(['url' => 'https://www.zwitch.co/sandbox/api/js/transactions','class' =>'form-horizontal ']) }}
	<div class="form-group col-md-12 pull-left">
								NAME ON CARD
	<input type="text" class="form-control input-lg" name="name_on_card"  />
	</div>
	<div class="form-group col-md-12 pull-left">
							MOBILE NO.
<input type="text" class="form-control input-lg" name="mobileNo" />
	</div>
	<div class="form-group col-md-12 pull-left">
		
EMAIL
<input type="text" class="form-control input-lg" name="email" />							
	</div>
	<div class="form-group col-md-12 pull-left">
		CARD NUMBER
<input type="text" class="zwitch_data form-control input-lg" />							
	</div>
	<div class="form-group col-md-4  " style="margin-right:15px;">
		CVV
<input type="password" class="zwitch_cvv form-control input-lg" />
						
	</div>
	
	<div class="form-group col-md-4 " style="margin-right:15px;">
		EXPIRY MONTH
		<input type="text" class="form-control input-lg" name="cardExpiryMonth" />
						
	</div>
	<div class="form-group col-md-4 margin-15 ">
		EXPIRY YEAR
<input type="text" class="form-control input-lg" name="cardExpiryYear" />
		
	</div>
	<div class="form-group col-md-12 pull-left">
			CARD TYPE

<select name="cardType">
<option value="CC">Credit Card</option>
<option value="DB">Debit Card</option>
</select>
<span class="help-block"><img src="/img/cards.png"></span>
					
	</div>
	<div class="form-group col-md-12 pull-left">
			
			CARD PROVIDER

<select name="cardProvider">
<option value="VISA">Visa</option>
<option value="MC">Mastercard</option>
<option value="MAESTRO">Maestro</option>
<option value="SBIME">SBI Maestro</option>
</select>		
	</div>
	<div class="form-group col-md-12 pull-left">
			
			AMOUNT : ₹  {{$amount}}

	
	</div>

<input type="hidden" name="amount" value="{{$amount}}" />

<input type="hidden" name="orderID" value="{{$orderID}}" />

<input type="hidden" name="apikey" value="{{$apikey}}" />

<input type="hidden" name="checksum" value="{{$checksum}}" />

<input type="hidden" name="save_card" />













<div class="form-group col-md-12 pull-left">

<input type="submit" class="zwitch_submit btn btn-success btn-block input-lg" />
</div>

{{ Form::close() }}

				

			</div>
			</div>

</div>








@stop