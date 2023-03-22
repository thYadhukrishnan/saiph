
@extends('frontend.layouts.main')
@section('main-container')
<!--============head_top_ends============--> 

<!--============banner============-->

<section class="banner">
  <div class="container-fluid">
   <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" src="{{asset('frontend/img/banner.jpg')}}" alt="First slide">
            <div class="carousel-caption_saiph  d-none d-md-block">
              <p>We are here to provide<br>
                you a <span class="blue_text">piece</span> of mind </p>
            </div>
            <form>
              <button class="btn book_audit_bnr" type="book">Book Audit<img src="{{asset('frontend/img/arrow_btn.png')}}" class="arrow_btn"></button>
            </form>
          </div>
          <!--iterating the banner images-->
            @foreach($images as $image)
          
          <div class="carousel-item"> <img class="d-block w-100" src="{{asset('storage/images/'.$image->image)}}" alt="First slide">
            <div class="carousel-caption_saiph  d-none d-md-block">
              <p>We are here to provide<br>
                you a <span class="blue_text">piece</span> of mind </p>
            </div>
            <form>
              <button class="btn book_audit_bnr" type="book">Book Audit<img src="{{url('frontend/img/arrow_btn.png')}}" class="arrow_btn"></button>
            </form>
          </div>
          @endforeach

          <!--end of iterarion-->
          
        <!--  <div class="carousel-item"> <img class="d-block w-100" src="{{url('frontend/img/banner_2.jpg')}}" alt="Second slide">
            <div class="carousel-caption_saiph  d-none d-md-block">
              <p>Relax in the knowledge <br>
               of  <span class="blue_text">safety</span> </p>
            </div>
             <form>
              <button class="btn book_audit_bnr" type="book">Book Audit<img src="{{url('frontend/img/arrow_btn.png')}}" class="arrow_btn"></button>
            </form>
          </div>
          <div class="carousel-item"> <img class="d-block w-100" src="{{url('frontend/img/banner_3.jpg')}}" alt="Third slide">
            <div class="carousel-caption_saiph  d-none d-md-block">
              <p>Immaculate. Pristine. Clean </p>
            </div>
             <form>
              <button class="btn book_audit_bnr" type="book">Book Audit<img src="{{url('frontend/img/arrow_btn.png')}}" class="arrow_btn"></button>
            </form>
          </div>-->
          
          
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><img src="{{url('frontend/img/ar_l.png')}}" class="arrow_btn_control"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><img src="{{url('frontend/img/ar_r.png')}}" class="arrow_btn_control"></span>
    <span class="sr-only">Next</span>
  </a> 
      </div>
    </div>
  </div>
  </div>
  </div>
</section>

<!--============banner_ends============--> 
<!--============about============-->
<section class="about">
 <div class="container-fluid">
  <div class="container">
    <div class="row">
      <h3>About Us</h3>
      <div class="u_line"></div>
      <div class="content">
        <p>After all this time at home, now it is time to get back to normal life. Normal obviously includes travelling again. Whether it’s a weekend getaway to Miami Beach or a business trip to New York you will soon find yourself once again booking your hotel room. With that comes a heavy dose of worry.</p>
        <p>The Coronavirus has swept through our world and made us all refocus on safety and cleanliness. We are all apprehensive and fearful at the thought of exposure to the virus when we stay at places outside of our own homes.</p>
        <p>To alleive us of the fear, all hotels have introduced new cleaning and disinfecting programs and assure their guests that everything is safe and clean. However when it comes to virus exposure you might be looking for additional assurance and peace of mind that your stay will indeed be safe and secure, with minimal risk. StaySaiph is your answer!</p>
        <p>StaySaiph is a revolutionary new review service. Upon your request, we will reach out to your hotel on your behalf and after getting your room details we will have a designated auditor on-site during the cleaning and disinfecting process who will verify that your own room is actually cleaned and disinfected to the highest level, you will receive footage of the actual process and confirmation that your room is truly clean when you arrive.</p>
      </div>
    </div>
  </div></div>
</section>

<!--============about_ends============--> 

<!--============how_it_works============-->
<section class="how_it_works">
 <div class="container-fluid">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <h3>How it Works</h3>
  <div class="hu_line"></div>
</div>
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
  <div class="hw_it_left">
    <div class="hw_box">
      <div class="hw_box_img"> <img class="d-block img-fluid" src="{{url('frontend/img/one.jpg')}}"> </div>
      <div class="hw_box_cnt">
        <h3>Book Inspection</h3>
        <p>Once you have a confirmed reservation with a hotel you can book your personal audit with us. Just give us your information and confirmation number and we will take care of the rest. If your hotel is not already a Premium Partner with us, we will reach out to them to try and schedule an individual audit. In the event an audit cannot be performed you will not be charged.</p>
      </div>
    </div>
    <!--hw_box-->
    <div class="hw_box">
      <div class="hw_box_img"> <img class="d-block img-fluid" src="{{url('frontend/img/two.jpg')}}"> </div>
      <div class="hw_box_cnt">
        <h3>On-Site Audit</h3>
        <p>Once you finish booking your audit, we will connect with your hotel and schedule a time for our auditor to be on site on the day that your room is cleaned and disinfected for you. Our auditor will be on site during the process to confirm that everything is done as per the hotel protocols.</p>
      </div>
    </div>
    <!--hw_box-->
    <div class="hw_box">
      <div class="hw_box_img"> <img class="d-block img-fluid" src="{{url('frontend/img/three.jpg')}}"> </div>
      <div class="hw_box_cnt">
        <h3>Documented Report</h3>
        <p>Once the process is finished and our auditor is satisfied that everything was done correctly, you will receive a certified audit report with pictures of the actual process so you can rest assure your room was cleaned specially for you.</p>
      </div>
    </div>
    <!--hw_box--> 
    
  </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
  <div class="row"> <img class="d-block img-fluid mx-auto" src="{{url('frontend/img/hw_it.jpg')}}"> </div>
</div>
</div>
</div>
</section>

<!--============how_it_works_ends============--> 
<!--============our_services============-->
<section class="our_services">
  <div class="container">
    <div class="row">
      <h3>Our  Services</h3>
      <div class="u_line_w"></div>
      <p class="p_mb">Contrary to popular belief, Lorem Ipsum is not simply random text.  It has roots</p>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="white_box box_right">
          <div class="white_box_inr">
          <div class="white_box_title">
            <h2>Basic Audit <br><span>$29.99 Room Only</span></h2>
            </div>
            
            <div class="su_line"></div>
            <ul class="service_list">
              <li>On site audit check up </li>
              <li>Picture of the process </li>
              <li>Certified audit report</li>
            </ul>
            </div>
            <input type="button" value="BOOK NOW" class="book_now">
          
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="white_box box_left">
          <div class="white_box_inr">
          <div class="white_box_title">
            <h2>Premium Audit <br><span>$39.99/month</span></h2>
            <p>plus Bathroom, Kitchen and other areas </p>
            </div>
            <div class="su_line"></div>
            <ul class="service_list">
              <li>3 check ups </li>
              <li>3 swap tests </li>
              <li>Pictures via email</li>
              <li>Swab results via email</li>
            </ul>
             </div>
            <input type="button" value="BOOK NOW" class="book_now">
         
        </div>
      </div>
    </div>
  </div>
</section>
<!--============our_services_ends============--> 
<!--============featured============-->
<section class="featured">
  <div class="container-fluid">
    <div class="row">
      <h3>Featured <span>Hotels</span></h3>
      <div class="fu_line"></div>
      <p>Contray to popular belief, Lorem ipsum is not simply random text. It has roots</p>
      <div class="owl-carousel active_testimonial"> 
        <!-- single testi -->
        <div class="single_sector"> <img src="{{url('frontend/img/mh.jpg')}}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi -->
        
        <div class="single_sector"> <img src="{{url('frontend/img/lg.jpg')}}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi -->
        <div class="single_sector"> <img src="{{url('frontend/img/hw.jpg')}}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi --> 
          <div class="single_sector"> <img src="{{url('frontend/img/pch.jpg')}}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi --> 
          <div class="single_sector"> <img src="{{url('frontend/img/mh.jpg')}}" alt="" class="img-fluid mx-auto d-block"> </div>
        <!-- single testi --> 
        
      </div>
    </div>
  </div>
</section>
<!--============featured_ends============--> 
<!--============footer============--> 
  
    
<!--============footer============--> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 

<script src="{{url('frontend/js/jquery-3.2.1.min.js')}}"></script> 
<script src="{{url('frontend/js/popper.js')}}"></script> 
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script> 
<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script> 
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
  $('.active_testimonial').owlCarousel({
		items:4,
		loop: true,
		dots: false,
		autoplay: false,
		nav: true,
		navText: [ "<img src='{{url('frontend/img/cprev.png')}}'>", "<img src='{{url('frontend/img/cnext.png')}}'>" ],
	 responsive:{
        0:{
            items:1
        },
        500:{
            items:1
        },
		600:{
            items:2
        },
		800:{
            items:2
        },
		900:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
 
	
	</script>
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

@endsection