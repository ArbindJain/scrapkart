<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Scrap kart</title>
	 
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	 
	<link href="css/main.css" rel="stylesheet">
 
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->
 
	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/pace.js"></script>
 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="preloader"></div>

    <! -- ******************** MASTHEAD SECTION ******************** -->	


	<main id="top" class="masthead" role="main">
	
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
			<!-- double space -->
		<br></br>
			<h1>Enthusiastically impact  <strong style="color:#2ECC71;">Proactive Architectures </strong> <br>
			with <strong style="color:#2ECC71;"> Magnetic</strong> technology.</h1>
 
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="subscribe.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-3 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="email" type="email" id="address" placeholder="Shape " ><br>

							</div>
							<div class="col-md-3 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="email" type="email" id="address" placeholder="Supplier " ><br>
							</div>
							<div class="col-md-3 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="email" type="email" id="address" placeholder="Grade " ><br>
							</div>
							<div class="col-md-3 col-sm-4">
								<button type="submit" class="btn btn-success btn-lg">SEARCH SCRAP ></button>
							</div>
						</div>
					</form>
					<span id="result" class="alertMsg"></span> </div>
				</div>
 
				<a href="#explore" class="scrollto">
				<p style="color:black;">SCROLL DOWN TO EXPLORE MORE</p>
				<p class="scrollto--arrow"><img src="images/scroll_down.png" alt="scroll down arrow"></p>
				</a>
		</div><! --/container -->
	</main><! --/main -->
 

    <! -- ******************** FEATURES SECTION ******************** -->	
	<div class="container" id="explore">
 
		

		<section class="row heroimg breath">
			<div class="col-md-12 text-center"> 
				<img src="" alt="">
			</div>
		</section><! --/section -->
 
		<div class="section-title">
			<h2>More information about your product.</h2>
			<h4>Always detail some important features.</h4>
		</div>
		
		<section class="row features">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_01.png" alt="analytics-icon">
					<div class="caption">
						<h3>Important Feature 1</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_02.png" alt="analytics-icon">
					<div class="caption">
						<h3>Important Feature 2</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_03.png" alt="analytics-icon">
					<div class="caption">
						<h3>Important Feature 3</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_04.png" alt="analytics-icon">
					<div class="caption">
						<h3>Important Feature 4</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
		</section><! --/section -->
 

	   
	</div><! --/container -->
 

	    <! -- ******************** TESTIMONIALS SECTION ******************** -->	 
		<div class="highlight testimonials">
			<div class="container">
				<div class="section-title">
					<h2>What our customers said</h2>
					<h4>Don't take our word. See our testimonials </h4>
				</div>
				
				<section class="row breath">
					<div class="col-md-6">
						<div class="testblock">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
						<div class="clientblock"> 
							<img src="images/customer-img-1.jpg" alt=".">
							<p><strong>Steve Jobs</strong> <br>
								Founder of <a href="index.html#">Apple</a>
							</p>
						</div>
					</div><! --/col-md-6 -->
					
					<div class="col-md-6">
						<div class="testblock">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
						<div class="clientblock"> 
							<img src="images/customer-img-1.jpg" alt=".">
							<p><strong>Steve Jobs</strong> <br>
								CEO of <a href="index.html#">Oops he is dead INC.</a>
							</p>
						</div>
					</div><! --/col-md-6 -->
				</section><! --/section -->
 
			</div><! --/container -->
		</div><! --/highlight Testimonials -->
 

	    <! -- ******************** PRICING LIST ******************** -->	  
		<div class="container">
 
			 <! -- ******************** CLIENTS SECTION ******************** -->	 
		<div class="section-title" >
			<h2>Some of our clients</h2>
			<h4>We work with different kind of brands</h4>
		</div>
	
		<section class="row clientlogo breath">
			<div class="col-md-12 text-center"> 
				<img src="images/client-logos.png" alt="client-logos">
			</div>
		</section><! --/section -->
 

 

	   
	</div><! --/container -->
 
	    <! -- ******************** FOOTER ******************** -->	  
		<main class="footercta" role="main">
			<div class="container">
				<h1>The Most Simple & <strong style="color:#2ECC71;">Powerful Way</strong> <br>
					to <strong style="color:#2ECC71;">Sell</strong> your scrap</h1>
 
				<div class="row">
					<div class="col-md-12 breath text-center"> 
						<a href="index.html#top" class="btn btn-success btn-lg gototop">SELL SCRAP ></a> 
					</div>
				</div>
			</div><! --/container -->
		</main><! --/main -->
 
		<div class="container">
			<section class="row breath">
				<div class="col-md-12 footerlinks">
					<p>&copy; 2014 ScrapKart. All Rights Reserved</p>
				</div>
			</section><! --/section -->
		</div><! --/container -->
 
 
 
 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/nicescroll.js"></script>
 
 
<script>


 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
  });
        

</script>
 
</body>
</html>