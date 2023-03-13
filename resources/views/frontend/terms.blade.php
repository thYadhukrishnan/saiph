<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<title>SAIPH</title>
</head>
<body>

<!--============head_top============-->
<section class="head_top brdr_btm">
  <div class="container-fluid">
  
    <div class="row">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner"> 
        
        <!-- Brand --> 
        <a class="navbar-brand" href="#"> SAIPH </a> 
        
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">      
  <div class="menu-btn">
				<span class="top"></span>
				<span class="mid"></span>
				<span class="bot"></span>
			</div>  </button>    
        
        
        <!-- Navbar links -->
        <div class="collapse navbar-collapse nav_div_saiph" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "> <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item "> <a class="nav-link nav_link_saiph" href="about.html">About</a> </li>
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="services.html"> Services</a> </li>
            <li class="nav-item"> <a class="nav-link nav_link_saiph" href="hotel.html"> Hotels</a> </li>
            <li class="nav-item "> <a class="nav-link nav_link_saiph" href="contact.html">Contact us</a> </li>
          </ul>
          <!--<form class="form-inline my-2 my-lg-0">
            <button class="btn book_audit my-2 my-sm-0" type="book">Book Audit<img src="img/arrow_btn.png" class="arrow_btn"></button>
          </form>--> 
        </div>
      </nav>
    </div>
  </div>
</section>

<!--============head_top_ends============--> 

<!--============banner============-->

<section class="terms_banner">
  <div class="container-fluid">
   <div class="container">
    <div class="row"> <div class="terms_banner_cnt">
   <h5>Terms and conditions</h5>
      <h3>Terms</h3>
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard 
McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going 
through the cites of the word in classical literature, discovered thContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
 literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin 
words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered th</p>
  </div>     </div></div>
  </div>
</section>

<!--============how_it_works_ends============--> 
<!--============our_services============-->

<!--============our_services_ends============--> 



















<!--============footer============-->
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-5 col-md-6 col-sm-12 col-12">
        <h2>SAIPH</h2>
        <ul class="ftr_one">
          <li><a href="home.html">Home</a> </li>
          <li><a href="services.html">Services </a></li>
          <li><a href="about.html">About</a></li>
        </ul>
        <ul class="ftr_two">
          <li><a href="book_inspection.html">Book Inspection</a> </li>
          <li><a href="contact.html">Contact </a></li>
          <li><a href="faq.html">Faq</a></li>
        </ul>
      </div>
      <div class="col-xl-6 col-lg-7 col-md-6 col-sm-12 col-12 icon_bx_main">
        <div class="icon_block">
          <div class="icon_img"><img src="img/mob.png"></div>
          <div class="icon_content">
            <h5>CALL US TODAY</h5>
            <p>(2124) 532-4353</p>
          </div>
        </div>
        <div class="icon_block">
          <div class="icon_img_b"><img src="img/book.png"></div>
          <div class="icon_content">
            <h5>BOOK AN ADUTIT</h5>
            <h6>Contrary to popular belief, Lore</h6>
          </div>
        </div>
        <div class="icon_block_loc">
          <div class="icon_img"><img src="img/loc.png"></div>
          <div class="icon_content_loc">
            <h5>LOCATION</h5>
            <p>95 Sugar Road Auburn, NY 13021</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--first-->

<section class="footer_btm">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-12">
        <p class="left">© 2020 Saiph.com</p>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
        <p class="right"><span><a href="#">Terms & Agreements  I</a></span>Privacy policy</p>
      </div>
    </div>
  </div>
</section>

<!--============footer============--> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 

<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/popper.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script>	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 2){
		  $("#banner").addClass("shrink");
		}
		else
		{
			$("#banner").removeClass("shrink");
		}
	});</script>
    <script>  
    
    $(document).ready(function() {

	var $menuBtn = $('.menu-btn');
	var $nav = $('#nav');
	var $stylebox = $('#style-box');
	var $styleli = $stylebox.find('li');

	$menuBtn.on('click', function() {
		var $this = $(this);
		var styles = $stylebox.data('styles');
		$this.toggleClass("active");
		$this.next('#nav').toggleClass("open");
		$stylebox.toggleClass(styles);
	});
	});
 
	
	</script>
</body>
</html>