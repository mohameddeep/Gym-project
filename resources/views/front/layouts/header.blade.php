<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

use Illuminate\Support\Facades\Auth;

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Gym Website Template | Pricing :: w3layouts</title>
<link href="{{asset('front')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="{{asset('front')}}/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('front')}}/js/jquery.min.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="{{asset('front')}}/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="{{asset('front')}}/js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="{{asset('front')}}/js/jquery.easing.1.3.js"></script>
<!-- //grid-slider -->
<!-- Add fancyBox main JS and CSS files -->
		<script src="{{asset('front')}}/js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="{{asset('front')}}/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
        @yield('css')

</head>
<body>
 <!-- start header_top -->
	@yield('header')
	<!-- end header_top -->
	<!-- start header_bottom -->
	  <div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				<i class="phone"> </i><span>1-200-346-2986</span>
			</div>
			<div class="social">
			   <ul>
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>
				  <li class="rss"><a href="#"><span> </span></a></li>
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
	  </div>
	<!-- end header_bottom -->
	<!-- start menu -->
    <div class="menu" id="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="{{ asset('front')}}/images/logo.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
                @if(auth('web')->check())

                <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('about.index') }}">About</a></li>
                <li><a href="{{ route('trainer.index') }}">Trainers</a></li>
                <li><a href="{{ route('class.index') }}">Classes</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="{{ route('offer.index') }}">Pricing</a></li>
                <li><a href="{{ route('contact.index') }}">Contact</a></li>
             <li>
                <form action="{{ route('user.logout') }}" method="post"><a href="">
                    @csrf
                 <button type="submit">logout</button> </a> </form> </li>

                @elseif (auth('admin')->check())
                <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('about.index') }}">About</a></li>
                <li><a href="{{ route('trainer.index') }}">Trainers</a></li>
                <li><a href="{{ route('class.index') }}">Classes</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="{{ route('offer.index') }}">Pricing</a></li>
                <li><a href="{{ route('contact.index') }}">Contact</a></li>
                <li><a href="{{ route('home.index') }}">dashboard</a></li>
                    <li>
                        <form action="{{ route('admin.logout') }}" method="post">
                            @csrf
                        <button type="submit">logout</button></form>
                </li>
                @elseif (auth('trainer')->check())
                <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('about.index') }}">About</a></li>
                <li><a href="{{ route('trainer.index') }}">Trainers</a></li>
                <li><a href="{{ route('class.index') }}">Classes</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="{{ route('offer.index') }}">Pricing</a></li>
                <li><a href="{{ route('contact.index') }}">Contact</a></li>
                <li><a href="{{ route('dashbord_trainer.show',auth('trainer')->id()) }}">my clients</a></li>
                    <li>
                    <form action="{{ route('trainert.logout') }}" method="post"><a href="">

                        @csrf
                 <button type="submit">logout</button></a> </form>  </li>

            @else

            <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
             <li><a href="{{ route('login.view') }}">login</a></li>
             <li><a href="{{ route('register.view') }}">register</a></li>

             @endif
			 </ul>
			  <script type="text/javascript" src="{{asset('front')}}/js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
