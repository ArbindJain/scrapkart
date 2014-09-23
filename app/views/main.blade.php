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
                  <li class="{{ set_active('profiles') }} list-unstyled pull-right"><a href="/profiles/{{Sentry::getUser()->id}}" class="right-head"><span class="hidden-xs"><i class="fa fa-bolt"></i> My Profile</span><i class="fa fa-sign-in fa-2x hide visible-xs"></i></a></li>

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
      <div class="container">
          <div class="row">
            @yield('content')
          </div>
       </div>
      <section class="footer">

      </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/lightbox.min.js"></script>
  </body>
</html>