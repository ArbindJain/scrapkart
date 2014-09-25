@extends('main')

@section('title', 'Success')

@section('content')

<div class="container">
        <div class="row ">
            <div class="col-lg-3 col-lg-offset-1 centered">
                <br><br><br>
                <img src="/img/emailsent.png" alt="">
                 </div>
                 <div class="col-lg-6 col-lg-offset-1 centered" style="padding-top:120px">
                    
                <h1 class="text-capatalize">
                    Your enquiry had been registered!
                </h1>
                <h4 class="text-capatalize" style="font-weight:300; padding-left:6px;">
                   We will contact you within 48 working hours.
                </h4>
                <br>
                <p><b><a href="/search">Back to Search</a> | <a href="/contact">Contact Us</a></b></p>
           
                 </div>
                 
        </div><!-- row -->
        <br>
    </div>
@stop
