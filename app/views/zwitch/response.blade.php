@extends('main')

@section('content')



<div class="col-md-12 text-center response-code">
@if($status === '0')
	<h1 class="resp"> Congartulations! Your payment was Sucessfull, Welcome to sscrapkart family</h1>
	<img src="/img/succ.png">
@elseif($status === '-21')
	<h1 class="resp"> Your payment amount was too high!</h1><br>
	<img src="/img/fail.png">
@elseif($status === '-22')
	<h1 class="resp"> Your payment amount was too high!</h1>
	<img src="/img/fail.png">
@elseif($status === '-202')
	<h1 class="resp"> Sorry No response from bank try again please</h1>
	<img src="/img/fail.png">
@elseif($status === '-305')
	<h1 class="resp"> sorry transaction failed try again please.</h1>
	<img src="/img/fail.png">
@elseif($status === '-300')
	<h1 class="resp"> sorry no approval from bank.</h1>
	<img src="/img/fail.png">
@elseif($status === '-999')
	<h1 class="resp"> sorry there is an error in the gateway.</h1>
	<img src="/img/fail.png">

@endif
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-3 " id="home-box">
                            <div class="pricing_header">
                                <h2 class="text-center">Payment Response Details</h2>
                                <div class="space"></div>
    						</div>
                                <ul class="list-group">
                                        <li class="list-group-item">ORDER ID: <span class="off">{{$orderID}}</span> </li>
                                        <li class="list-group-item">REFERENCE NO: <span class="off">{{$customerReferenceNo}}</span></li>
                                        <li class="list-group-item ">PAYMENT MODE:<span class="off"> {{$paymentMode}}</span></li>
                                        <li class="list-group-item">CARD PROVIDER:<span class="off"> {{$cardProvider}}</span></li>
                                        <li class="list-group-item">AMOUNT PAID: <span class="off">{{$amount}}</span></li>
                                    </ul>
                            </div>

</div>

@stop