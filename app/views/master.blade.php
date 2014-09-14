<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="css/main.css" rel="stylesheet">
    	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/pace.js"></script>
 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


</head>
<body>

	<header>

		
		<div class="navbar navbar-fixed-top megamenu" role="navigation">
  <div class="navbar-top" id="header_nav" style="height: 35px;">
   
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
            <div class="pull-left ">
            <ul class="userMenu">
              @if (!Sentry::check())

              <li><a href="#"><span class="hidden-xs"> Welcome , Guest</span>
                <i class="fa fa-question-circle fa-2x hide visible-xs"></i></a></li>
              <li class="phone-number"> 
              <a href="callto:+63936657624"> 
              <span> <i class="fa fa-phone-square fa-2x "></i></span> 
              <span class="hidden-xs" style="margin-left:5px"> (+639) 3665-7624 </span> </a> </li>
             
              @else
               <li><a href="#"><span class="hidden-xs"> Welcome , {{Sentry::getUser()->first_name}}</span>
                <i class="fa fa-question-circle fa-2x hide visible-xs"></i></a></li>
              <li class="phone-number"> 
              <a href="callto:+63936657624"> 
              <span> <i class="fa fa-phone-square fa-2x "></i></span> 
              <span class="hidden-xs" style="margin-left:5px"> (+639) 3665-7624 </span> </a> </li>
              @endif
            </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
          <div class="pull-right">
            <ul class="userMenu">
            @if (!Sentry::check())
                <li> <a href="account.html"><span class="hidden-xs">My Account</span> 
                <i class="fa fa-user fa-2x hide visible-xs"></i></a> 
                </li>

                <li class="{{ set_active('login') }}"><a href="/login"><span class="hidden-xs">Sign In</span><i class="fa fa-sign-in fa-2x hide visible-xs"></i></a></li>
                
                <li class="hidden-xs {{ set_active('register') }}"> <a href="/register" > Create Account </a> </li>
            	@else 
            	 <li class="{{ set_active('profiles') }}"><a href="/profiles/{{Sentry::getUser()->id}}" ><span class="hidden-xs">My Profile</span><i class="fa fa-sign-in fa-2x hide visible-xs"></i></a></li>
                
                <li class="hidden-xs"> <a href="/logout" > Logout </a> </li>
            	
            	@endif
            </ul>
          </div>
        </div>

      </div><!-- row -->
    </div><!-- container -->
  </div><!--/.navbar-top-->

  <div class="navbar p navbar-inverse" style="position:relative; top: -1px;">
         <div class="container">

            <div class="navbar-header">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SCRAP KART</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ set_active('/') }}"><a href="/">Home</a></li>
		        <li class="{{ set_active('about') }}"><a href="/about">About</a></li>
		        <li class="{{ set_active('contact') }}"><a href="/contact">Contact</a></li>
		        <li class="{{ set_active('userProtected') }}"><a href="/product">List product</a></li>
		     	<li class="{{ set_active('userProtected') }}"><a href="/list">Display listing</a></li>
		    
                </ul>
            </div>
           
        </div>


                
  </div><!-- navbar-default -->
</div>



	</header>

	<div class="container" style="position:relative; top: 130px;">
		@yield('content')
	</div>
 

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>