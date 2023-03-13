<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{url('frontend/css/bootstrap.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
<link href="{{url('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('frontend/css/owl.theme.green.css')}}" rel="stylesheet" type="text/css">
<title>SAIPH</title>
</head>
<body>

<!--============head_top============-->
<section class="head_top">
  <div class="container-fluid">
    <div class="row">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner"> 
        
        <!-- Brand --> 
        <a class="navbar-brand" href="{{url('/')}}"> SAIPH </a> 
        
        <!-- Toggler/collapsibe Button -->
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>-->
        
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">      
  <div class="menu-btn">
				<span class="top"></span>
				<span class="mid"></span>
				<span class="bot"></span>
			</div>  </button>    
        
        
        
        <!-- Navbar links -->
        <div class="collapse navbar-collapse nav_div_saiph" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"> <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="{{route('about')}}">About</a> </li>
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="{{route('services')}}"> Services</a> </li>
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="{{route('hotel')}}"> Hotels</a> </li>
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="{{route('contact1')}}">Contact us</a> </li>
          </ul>
          <!--<form class="form-inline my-2 my-lg-0">
            <button class="btn book_audit my-2 my-sm-0" type="book">Book Audit<img src="img/arrow_btn.png" class="arrow_btn"></button>
          </form>--> 
        </div>
      </nav>
    </div>
  </div>
</section>