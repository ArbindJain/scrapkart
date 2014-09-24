<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Normalize css-->
    <link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.1/normalize.css">

    <!-- Latest compiled and minified CSS -->
    {{HTML::style('css/bootstrap.min.css')}}

    <!-- Optional theme -->
    {{HTML::style('css/bootstrap-theme.min.css')}}

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    




    <!-- Font Awesome CDN -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    {{HTML::style('css/style.css')}}
    {{HTML::style('css/lightbox.css')}}
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="circle"){
                    $(".box").hide();
                    $(".sizeA").show();
                    $(".sizeB").show();
                    $(".place_a").attr("placeholder", "Inner Diameter");
                    $(".place_b").attr("placeholder", "Outer Diameter");
                }

                if($(this).attr("value")=="square"){
                    $(".box").hide();
                    $(".sizeA").show();
                    $(".sizeB").hide();
                    $(".place_a").attr("placeholder", "Length");
                }
                if($(this).attr("value")=="rectangle"){
                    $(".box").hide();
                    $(".sizeA").show();
                    $(".sizeB").show();
                    $(".place_a").attr("placeholder", "Length");
                    $(".place_b").attr("placeholder", "Breadth");
                }
                if($(this).attr("value")=="triangle"){
                    $(".box").hide();
                    $(".sizeA").show();
                    $(".sizeB").show();
                    $(".sizeC").show();
                    $(".place_a").attr("placeholder", "Side A");
                    $(".place_b").attr("placeholder", "Side B");
                    $(".place_c").attr("placeholder", "Side C");
                }
                if($(this).attr("value")=="trapezoid"){
                    $(".box").hide();
                    $(".sizeA").show();
                    $(".sizeB").show();
                    $(".sizeC").show();
                    $(".place_a").attr("placeholder", "Side A");
                    $(".place_b").attr("placeholder", "Side B");
                    $(".place_c").attr("placeholder", "Height");
                }
                if($(this).attr("value")=="others"){
                    $(".box").hide();
                    $(".sizeA").show();
                    $(".sizeB").show();
                    $(".sizeC").show();
                    $(".place_a").attr("placeholder", "Length");
                    $(".place_b").attr("placeholder", "Breath");
                    $(".place_c").attr("placeholder", "Height");
                }
            });
        }).change();
    });
</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <section id="first-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="pull-left">
              <ul class="list-inline ">
              @if (!Sentry::check())

                <li class="list-unstyled"><span class="hidden-xs"> Welcome , <i class="fa fa-user"></i>  Guest</span>
                  <i class="fa fa-question-circle fa-2x hide visible-xs"></i></li>


                @else
                 <li class="list-unstyled"><a href="#"><span class="hidden-xs"> Welcome , <i class="fa fa-user"></i> {{Sentry::getUser()->name}}</span>
                  <i class="fa fa-question-circle fa-2x hide visible-xs"></i></a></li>

                @endif
              </ul>
              </div>
            <div class="pull-right">
              <ul class="list-inline">
              @if (!Sentry::check())

                  <li class="{{ set_active('login') }} list-unstyled pull-right"><a href="/login" class="right-head"><span class="hidden-xs"><i class="fa fa-sign-in"></i> Sign In</span><i class="fa fa-sign-in fa-2x hide visible-xs"></i></a></li>
                  <li class="hidden-xs {{ set_active('register') }} list-unstyled pull-right right-head"> <a class="right-head pull-right" href="/register" ><i class="fa fa-plus"></i> Create Account </a> </li>
                @else
                  <li class="hidden-xs  list-unstyled pull-right right-head"> <a class="right-head pull-right" href="/logout" ><i class="fa fa-sign-out"></i> Logout </a> </li>
                  <li class="{{ set_active('profiles') }} list-unstyled pull-right"><a href="/profiles/{{Sentry::getUser()->id}}/edit" class="right-head"><span class="hidden-xs"><i class="fa fa-bolt"></i> My Profile</span><i class="fa fa-sign-in fa-2x hide visible-xs"></i></a></li>

                @endif
              </ul>
            </div>
            </div>
        </div>
    </div>
  </section><!-- section id first row -->
  <div class="navbar " style="position:relative; top: -1px;">
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
                    <li class="{{ set_active('userProtected') }}"><a href="/list">Search</a></li>
                </ul>
            </div>
        </div>
  </div><!-- navbar-default -->
  <div class="row" style="background-color: #78e8a7">
      <div class="container" >
          <div class="row margin-top-20">
              <div class="col-md-11" style="margin-left:120px; ">
                <div id="myGallery">
                <img src="data:image/png;base64,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" class="active" />
                <img src="data:image/png;base64,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" />
                <img src="data:image/png;base64,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" />
              </div>
              <div id="home">

  <h1 class="welcome">

      <span class="tag-change">

        <a class="active purple" href="">Manufactures need to think "out of the box" to optimize costs </a>
        <a class="blue" href="">Scrapkart presents you an opportunity to bolster profits</a>
        <a class="green" href="">Objectively deliver low-risk high-yield intellectual capital before.</a>
        <br></br> <button type="button" class="btn btn-danger margin-7">REGISTER NOW</button>
    </span>


  </h1>
</div>        </div>    
          </div>
       </div>
       </div>
       <div class="row margin-top-40" style="margin-bottom:50px;">
        <div class="container">
         <div class="col-md-3 col-md-offset-2 ">
         <a href ="/scrap/metal" ><img src="/img/scrap.png">
         <span class="scrap ">Scrap</span>
         </a>
          <a class="btn btn-success btn-md margin-60 margin-top-10s" href="http://designmodo.com/flat">Get Pro</a>

         </div>
                  <div class="col-md-3 ">
                    <a href =""><img src="/img/material.png">
                      <span class="scraph">Material Handling System</span>
                      <a class="btn btn-success btn-md margin-60 margin-top-10s" href="http://designmodo.com/flat">Get Pro</a>

                    </a>
                  </div>
                  <div class="col-md-3 ">
                  <a href ="#"><img src="/img/industry.png">
                  <span class="scrap">Machinery</span>
                  <a class="btn btn-success btn-md margin-90 margin-top-10s" href="http://designmodo.com/flat">Get Pro</a>

                  </a>
                  </div>
                  
       </div>
       </div>
      <section class="footers">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-2">
          <p>LINKS</p>
          <p>
          <small><a href="#">FAQ</a></small><br>
          <small><a href="#">About us</a></small><br>
          <small><a href="#">Contact</a></small><br>
          <small><a href="#">Terms & Condition</a></small>

          </p>
        </div>
        <div class="col-lg-2">
          <p>LINKS</p>
          <p>
          <small><a href="#">FAQ</a></small><br>
          <small><a href="#">About</a></small><br>
          <small><a href="#">Contact</a></small><br>
          <small><a href="#">Terms & Condition</a></small>

          </p>
        </div>

        <div class="col-lg-4">
          <p>MAIN OFFICE</p>
          <p><small>
            +00 3893-4904<br>
            +00 3893-4904
          </small></p>
        </div>
        
        <div class="col-lg-4">
          <p>OUR NEWSLETTER</p>
          <p><small>Subscribe Now.</small></p>
          <p><input type="text" placeholder="Add your email here" class="form-control input-md flat"></p>
        </div>
        
        
      </div><!-- /row -->
    </div><!-- /container -->
    
<div class=" low-foot">
<div class="container ">
      <div class="row">
        <div class="col-lg-6">
            <a href="#"><i class="fa fa-facebook-square si "></i></a>
            <a href="#"><i class="fa fa-twitter si  margin-7"></i></a>
            <a href="#"><i class="fa fa-linkedin-square si margin-7"></i></a>
           </div>
        <div class="col-lg-6">
            <span class="pull-right"> <i class="fa fa-copyright"></i>2014. PRIVACY POLICY </span>
           </div>
        
      </div>
    </div>
    </div>
      </section>
      


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script type="text/javascript">
    function swapImages() {
    var $current = $('#myGallery img:visible');
    var $next = $current.next();
    if($next.length === 0) {
        $next = $('#myGallery img:first');
    }
    $current.hide();
    $next.show();
}

$(document).ready(function() {
    // Run our swapImages() function every 5secs
    setInterval('swapImages()', 6000);
});
  </script>
    {{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/init.js')}}
    {{HTML::script('js/lightbox.min.js')}}
  </body>
</html>