<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Oristo Universal</title>
	

	<!-- STYLESHEETS-->
	{{--  <link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css">  --}}
	<link href="{{ asset('libraries/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- CUSTOM STYLES -->
	{{--  <link rel="stylesheet" type="text/css" href="assets/css/main.css">  --}}
	<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
	{{--  <link rel="stylesheet" type="text/css" href="assets/css/index.css">  --}}
	<link href="{{ asset('assets/css/index.css') }}" rel="stylesheet">
	{{--  <link rel="stylesheet" type="text/css" href="assets/css/checkbox.css">  --}}
	<link href="{{ asset('assets/css/checkbox.css') }}" rel="stylesheet">
	{{--  <link rel="stylesheet" type="text/css" href="assets/css/style4.css">  --}}
	<link href="{{ asset('assets/css/style4.css') }}" rel="stylesheet">

	<!-- WEBFONT -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">

	<!-- ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="">
	<!-- scroll top -->
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		<img src="{{ asset('assets/img/oil.svg') }}" class="width-40">

	</button>


	<ul class="cb-slideshow">
        <li class="li"><span>Image 01</span></li>
        <li class="li"><span>Image 02</span></li>
        <li class="li"><span>Image 03</span></li>
        <li class="li"><span>Image 04</span></li>
        <li class="li"><span>Image 05</span></li>
        <li class="li"><span>Image 06</span></li>
    </ul>
    <header>
        <nav class="navbar change navbar-fixed-top p-b-35" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <!-- <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> -->
                        <span class="c-white">MENU</span>
                    </button>
                    <a class="navbar-brand p-t-5" href="{{ route('index') }}"><img src="{{ asset('assets/img/logo.jpg') }}" class="img-circle width-90 h-80"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">

                    <ul class="nav navbar-nav navbar-right p-t-20 ul">
                        <li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="{{ route('about') }}">ABOUT</a></li>
                        <li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="{{ route('all.product') }}">PRODUCTS</a></li>
                        <li class="f1 m-r-10 dropdown show-on-hover">
                            <a href="#" class="btn bg-browno bd-4 c-white p-t-10 p-b-10" data-toggle="dropdown">SERVICES</a>
                            <ul class="dropdown-menu l-_42">
                                <li><a href="{{ route('service.all_service') }}" class="">ALL SERVICES</a></li>
                            </ul>
                        </li>
                        <li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="{{ route('gallery') }}">GALLERY</a></li>
                        <li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="{{ route('contact') }}">CONTACT</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>

	{{--  @include(oristo.navbar)  --}}

	<section class="">
		@yield('content')
	</section>

	<footer class="bg-liter">
		
		<div class="container m-t-5p">
			<p class="text-center"> &copy;Copyright 2012&nbsp;  &bull;All Right Reserved&nbsp;  &bull;Oristo Universal Company&nbsp; &reg; 93 Obafemi Awolowo Way Ikeja Lagos 100001&nbsp; &bull; P.O. Box 2870</p>
		</div>
	</footer>
	
	
	
	
	{{--  <script type="text/javascript" src="libraries/bootstrap/js/jquery-3.1.1.min.js"></script>  --}}
    <script src="{{ asset('libraries/bootstrap/js/jquery-3.1.1.min.js') }}" defer></script>

	{{--  <script src="libraries/bootstrap/js/bootstrap.min.js"></script>  --}}
    <script src="{{ asset('libraries/bootstrap/js/bootstrap.min.js') }}" defer></script>
	
    <!-- background sliding -->
	{{--  <script type="text/javascript" src="libraries/bootstrap/js/modernizr.custom.86080.js"></script>  --}}
    <script src="{{ asset('libraries/bootstrap/js/modernizr.custom.86080.js') }}" defer></script>
</body>
	
    <script type="text/javascript">
    	// change navbar background color when scroll downs

		$(document).ready(function(){
		  $(window).scroll(function(){
		  	var scroll = $(window).scrollTop();
			  if (scroll > 100) {
			    $(".change").css("background" , "#fffffff2");
			    $(".change").css("color" , "black");
			  }

			  else{
				  $(".change").css("background" , "transparent");
				  $(".change").css("color" , "");  	
			  }
		  })
		})
		

	</script>

    <!-- scroll -->
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		        document.getElementById("myBtn").style.display = "block";
		    } else {
		        document.getElementById("myBtn").style.display = "none";
		    }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		    document.body.scrollTop = 0;
		    document.documentElement.scrollTop = 0;
		}
	</script>
</html>