@extends('frontend.layouts.main')
@section('main-container')

<!--============head_top_ends============--> 

<!--============banner============-->

<section class="contact_banner">
  <div class="container-fluid">
    <div class="row"> <div class="contact_banner_cnt">
   <h5>Complete your booking</h5>
      <h3>Contact</h3>
      <p>Great! Just a few more details and we can complete your booking!</p>
  </div>     </div>
  </div>
</section>

<!--============how_it_works_ends============--> 
<!--============our_services============-->
<section class="contact">
  <div class="container">
    <div class="row">
       <div class="bookform_div">
         <form class="cnt_frm" action="{{route('contact')}}" method="post">
        @csrf
          <div class="title_div">
          <h5>Get in Touch</h5>
          </div>
           <div class="input_field_bknw mr-18">
       <div class="form-group">
               
                            <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Full Name" required>
              </div>
              </div>
              <div class="input_field_bknw">
       <div class="form-group">
             
                            <input type="text" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Email" required>
              </div>
       </div>
      
       
           <div class="input_field_bknw mr-18">
       <div class="form-group">
               
                            <input type="text" name="phone" class="form-control"  aria-describedby="emailHelp" placeholder="Customer Phone number" required>
              </div>
              </div>
              <div class="input_field_bknw">
       <div class="form-group">
             
                            <input type="text" name="hotel" class="form-control"  aria-describedby="emailHelp" placeholder="Hotel Name" required>
              </div>
       </div>
      
        
           <div class="input_field_bknw mr-18">
       <div class="form-group">
               
                            <select name="state" class="form-control minimal" >
                                                <option class="hidden"  selected > State</option>
                                                <option value="state1">state1</option>
                                                <option value="state2">state2</option>
                                                <option value="state3">state3</option>
                                            </select>
              </div>
              </div>
              <div class="input_field_bknw ">
       <div class="form-group">
             
                            <select name="city" class="form-control minimal">
                                                <option class="hidden"  selected disabled>City</option>
                                                <option value="city1">City1</option>
                                                <option value="city2">City2</option>
                                                <option value="city3">City3</option>
                                            </select>
              </div>
       </div>
      
      
           <div class="input_field_bknw mr-18 ">
       <div class="form-group">
               
                            <input type="text" name="zip" class="form-control"  aria-describedby="emailHelp" placeholder="Zip" required>
              </div>
              </div>
              <div class="input_field_bknw">
       <div class="form-group">
             
                            <input type="text" name="booking" class="form-control"  aria-describedby="emailHelp" placeholder=" Booking Reference number" required>
              </div>
       </div>
       
           <div class="txtarea_bknw ">
       <div class="form-group">
               
                            <textarea name="comments" class="form-control"  rows="" placeholder="Comments" required></textarea>
              </div>
              </div>
    
       
        
          
       <div class="form-group">
       
       <button class="btn cnt_audit" type="book">Book Audit</a></button>
       </div>
             
              
 
       
       </form>
       </div>
       
     
           <div class="map_box">
                <!--<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<img src="{{url('frontend/img/map.png')}}" class="img-fluid ">

 <div class="adrs_box">
 <h4>SAIPH</h4>
 <p>30 Meadow StreetIthaca, NY 14850, 2736 6454 747</p>
</div>
</div>
       </div>
    </div>
  
</section>
<!--============our_services_ends============--> 



















<!--============footer============-->


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

@endsection