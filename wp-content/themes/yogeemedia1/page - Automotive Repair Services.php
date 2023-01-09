<?php
/*
Template Name: Automotive Repair Services page
*/
?>
<?php get_header();  ?> 


<main>
<?php get_template_part("innerbanner");?>
	<style>
		.list-area{
			display:flex;
	flex-wrap:wrap;
	justify-content:center;
	align-items:center;
		}
		.service-list{
			list-style:none;
			font-size:18px;
			color:#000;
			padding-bottom:5px;
		}
		.service-list li{
			padding-left:6px;
		}
		.service-list i{
			padding-right:5px;
			font-size:16px;
		}
		.list-area h4{
			font-size:32px;
			text-align:center;
		}
		.provide-thumb::before{
			background: #3099C4;
		}
		.kservice-content p{
			color:#fff;
		}
		
		.contact-form .mb-20{
			background-color:#fff;
			
		}
		.contact-form input, .contact-form textarea{
			background-color:#ffffff !important;
		}
		
		.card{
	position:relaive;
	width:300px;
	background-color: #fff;
	border-radius: 8pp;
	box-shadow:0 8px 8px 0 rgba(0,0,0,0.15);
	padding:16px;
	margin: 56px 24px;
	display:fleax;
	flow-direction:column;
	justify-content: center;
	align-items:center;

}

.card-image{
	width:150px;
	height:150px;
	border-radius:10px !important;
	overflow:hidden;
	position:absolute;
	top:0;
	left:50%;
	transform: translate(-50%, -50%); 

}
.kabout-img-small-icon{
	border-radius:0%;
}
.card-image img{
	width:100%;
	transform: scale(0.8);
	top:0;
	right:0;
}
.card p{
	line-height:23px;
	letter-spacing:0.5px;
	margin-bottom: 12px;
	text-aling: center;
}
.name{
	margin-top:80px;
	
}
		.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
	</style>

	 <!-- about area start here -->
        <section class="why-we bg-grey pt-120 pb-125 pb-md-110 position-relative">
            <div class="common-shape-wrapper wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner wow slideInleft animated" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            </div>
            <div class="container z-index">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-thumb">
                            <img src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/03/16.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-content">
                            <div class="section-title-wrapper mb-25">
                                <h5 class="section-subtitle mb-20">Quality Automobile Repairs</h5>
                                <h2 class="section-title mb-35">At Mozita Automobile Repairs
                                </h2>
							 </div>
                                <p>MTA(Motor Trade Association) assured automotive service provider, dependable services with convenient hours & certified 
					technicians! Discover experience with our exceptional service & care on your vehicle. Major tire brands. Designed with you in mind. 
					Genuine parts.
					<br/>
					We have high skilled motor mechanics and electricians who are experienced with all Japanese and European models and makes. Our technicians are capable of repairing hybrid cars and batteries.
					<br/>
					Communication and quality of service, treating others how we’d like to be treated are what keep our clients coming back and ensure an enviable number of candidate referrals – check out our testimonials on our site and on Facebook.
					<br/>
					Mozita Automobile Repairs is a reliable company that offers quality service for your car. We are able to take care of any need your car may have.
				</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->




	        <!-- service area start here -->
        <section class="service-area service-area2 pt-115 pb-100" data-background="<?php the_field('service_area_background_image');?>">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-6 col-lg-6">
                        <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <h5 class="kservice-text-subtitle mb-15"><?php the_field('service_area_sub_title');?></h5>
                            <h2 class="kservice-text-title mb-40"><?php the_field('service_area_title');?></h2>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-6">
                        <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <p class="mb-45 mt-35 mt-md-0 mt-xs-0"><?php the_field('service_area_description');?></p>
                        </div>
                    </div>
                </div>

                <div class="row custom-mar-20 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class='fas fa-prescription-bottle'></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title">Vehicle servicing <br/>& lubricating</h5>
				<p>
				Discover experience with our exceptional service & care on your vehicle. Major tire brands. Designed with you in mind. Genuine parts.
				</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                 <i class='fas fa-award'></i>
                            </div>
                            <div class="kservice-content">
                                 <h5 class="kservice-content-title">Warrant of <br/>fitness</h5>
				<p> 
				Let MOZITA – the vehicle inspection specialists  provide your WOF and get peace of mind that your vehicle is safe to drive on NZ roads.
				</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="kservice-content"> <h5 class="kservice-content-title">Auto electrical<br/> repairs</h5>
				<p>
				High quality, Cost effective range of Auto Electrical Repairs. Call us today. Feel free to contact us for q quality products.
				</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                              <i class='fas fa-car-side'></i>
                            </div>
                            <div class="kservice-content">
                                 <h5 class="kservice-content-title"> Mechanical <br/>repairs</h5>
				<p>
				High-quality car repairs from an experienced Christchurch mechanics. Gearbox, clutch and brake repairs, Engine, suspension & exhaust repairs.
				</p>
                            </div>
                        </div>
                    </div>
  <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                              <i class="fas fa-car-battery" ></i>
                            </div>
                            <div class="kservice-content">
                                 <h5 class="kservice-content-title"> Tyres &<br/> Batteries</h5>
				<p>
				Visit your local tyre and battery store Hornby shop for tyres and tyre servicing, mag wheels, car batteries, wheel alignments.
				</p>
                            </div>
                        </div>
                    </div>
  <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                              <i class='fab fa-soundcloud'></i>
                            </div>
                            <div class="kservice-content">
                                 <h5 class="kservice-content-title"> Car stereo & <br/>sound system </h5>
				<p>
				We allow the Integration of new Car Audio Systems in a large range of brands. Offering you the best price & warranty back-up service.
				</p>
                            </div>
                        </div>
                    </div>
  <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                              <i class="fab fa-wpforms" ></i>
                            </div>
                            <div class="kservice-content">
                                 <h5 class="kservice-content-title"> Vehicle health <br/>checks</h5>
				<p>
				Comprehensive Health Check & Diagnostic. Let us help you understand any fault codes you may be experiencing with your vehicle. 
				</p>
                            </div>
                        </div>
                    </div>
  <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                             <i class='fas fa-road'></i>
                            </div>
                            <div class="kservice-content">
                                 <h5 class="kservice-content-title"> Road trip <br/>checks</h5>
				<p>
				If you’re heading out on a road trip through New Zealand’s countryside, before any trip, check the pressures – and don’t forget the spare. 
				</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end here -->

	
	
	        <!-- list area start here -->
        <section class="list-area list-area2 pt-115 pb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-12 col-lg-12">
                        <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <h4 class="kservice-text-title mb-40">25 Check Points</h4>
                        </div>
                    </div>                
                </div>

                <div class="row custom-mar-20 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-10">
                       <div class="card card-1">
	<div class="card-image kabout-img">
		<img class="kabout-img-small-icon"" src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/08/car.png">
	</div>
	<p class="name">
		<ul class="service-list ">
				<li><i class="fa fa-check"></i>All lubricant points.</li>
				<li><i class="fa fa-check"></i>Coolant level & condition.</li>
 				<li><i class="fa fa-check"></i>Fuel evaporating and emission system</li>
				<li><i class="fa fa-check"></i>Transmission fluid condition & level check.</li>
				<li><i class="fa fa-check"></i>Air filter condition & clean up.</li>
				<li><i class="fa fa-check"></i>Brake fluid condition & level.</li>
				<li><i class="fa fa-check"></i>Underbody damage.</li>
				<li><i class="fa fa-check"></i>Driveline oil.</li>
					<li><i class="fa fa-check"></i>Wiper operation.</li>
		</ul>
	</p>
</div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
			<div class="card card-1">
	<div class="card-image kabout-img">
		<img class="kabout-img-small-icon"" src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/08/car.png">
	</div>
	<p class="name">
		<ul class="service-list">
				<li><i class="fa fa-check"></i>Power steering level & condition.</li>
				<li><i class="fa fa-check"></i>Washer fluid.</li>
				<li><i class="fa fa-check"></i>Drive belts.</li>
				<li><i class="fa fa-check"></i>Battery check.</li>
				<li><i class="fa fa-check"></i>All rubber hoses & mounts.</li>
				<li><i class="fa fa-check"></i>Lights.</li>
			<li><i class="fa fa-check"></i>Fuel lines.</li>
				<li><i class="fa fa-check"></i>Brake lines.</li>
				<li><i class="fa fa-check"></i>Air conditioning.</li>
		</ul>
	</p>
</div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
                        <div class="card card-1">
	<div class="card-image kabout-img">
		<img class="kabout-img-small-icon"" src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/08/car.png">
	</div>
	<p class="name">
		<ul class="service-list">
				<li><i class="fa fa-check"></i>Driveshaft gaiters for damage & deterioration.</li>
				<li><i class="fa fa-check"></i>Steering linkage components & boots.</li>
				<li><i class="fa fa-check"></i>Front and rear suspension components.</li>
				<li><i class="fa fa-check"></i>Exhaust pipe connections for leakage.</li>
				<li><i class="fa fa-check"></i>Brake pads, shoes, disc check.</li>
				<li><i class="fa fa-check"></i>Spare wheel condition.</li>
	
			
		</ul>
	</p>
</div>
                    </div>
                    
                    </div>
                   
            </div>
        </section>
        <!-- list area end here -->
					
					
					
					
		  <!-- list area start here -->
        <section class="list-area list-area2 pt-115 pb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-12 col-lg-12">
                        <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <h4 class="kservice-text-title mb-40">Our Range of Services Includes as Below</h4>
                        </div>
                    </div>                
                </div>

                <div class="row custom-mar-20 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-10">
                       <div class="card">
	<div class="card-image kabout-img">
		<img class="kabout-img-small-icon"" src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/08/car.png">
	</div>
	<p class="name">
		<ul class="service-list">
				<li><i class="fa fa-check"></i>Cam-belt.</li>
				<li><i class="fa fa-check"></i>Radiator.</li>
				<li><i class="fa fa-check"></i>Water pump.</li>
				<li><i class="fa fa-check"></i>Thermostat.</li>
				<li><i class="fa fa-check"></i>Drive Belts.</li>
				<li><i class="fa fa-check"></i>Timing Chains.</li>
				<li><i class="fa fa-check"></i>Ignition Coils.</li>
				<li><i class="fa fa-check"></i>Spark Plugs.</li>
				<li><i class="fa fa-check"></i>Distributor.</li>
				<li><i class="fa fa-check"></i>Throttle body.</li>
				<li><i class="fa fa-check"></i>Air Flow sensor.</li>
				<li><i class="fa fa-check"></i>All Sensors.</li>
			<li><i class="fa fa-check"></i>Steering wheels.</li>
				<li><i class="fa fa-check"></i>Stereo Installation.</li>
				<li><i class="fa fa-check"></i>Cabin Filters.</li>
			<li><i class="fa fa-check"></i>Exhaust.</li>
				<li><i class="fa fa-check"></i>Suspension.</li>
							<li><i class="fa fa-check"></i>Suspension, Shock Absorbers.</li>
		</ul>
	</p>
</div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
			<div class="card">
	<div class="card-image kabout-img">
		<img class="kabout-img-small-icon"" src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/08/car.png">
	</div>
	<p class="name">
		<ul class="service-list">
				<li><i class="fa fa-check"></i>Air Conditioning.</li>
				<li><i class="fa fa-check"></i>Batteries.</li>
				<li><i class="fa fa-check"></i>Hose and Pipes.</li>
				<li><i class="fa fa-check"></i>Oil Leaks.</li>
				<li><i class="fa fa-check"></i>Wax and Polish.</li>
				<li><i class="fa fa-check"></i>Suspension.</li>
				<li><i class="fa fa-check"></i>Headlight Bulb Replacement and alignment, Parking.</li>
				<li><i class="fa fa-check"></i>Wiper and wiper blade replacement on the spot.</li>
				<li><i class="fa fa-check"></i>Tyres, Wheel Balancing & Wheel Alignment.</li>
				<li><i class="fa fa-check"></i>Lamps, Indicators/ Fog Lamps.</li>
				<li><i class="fa fa-check"></i>Spotlight/ Daytime running lights.</li>
			<li><i class="fa fa-check"></i>Accessory Socket.</li>
				<li><i class="fa fa-check"></i>Sunroof.</li>
				<li><i class="fa fa-check"></i>Cluster.</li>
		</ul>
	</p>
</div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
                        <div class="card">
	<div class="card-image kabout-img">
		<img class="kabout-img-small-icon"" src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/08/car.png">
	</div>
	<p class="name">
		<ul class="service-list">
				<li><i class="fa fa-check"></i>Central Locking and Remote Control.</li>
				<li><i class="fa fa-check"></i>Fuel Gauge / Speedometer / Odometer Replacement.</li>
				<li><i class="fa fa-check"></i>Structure Corrosion Check.</li>
				<li><i class="fa fa-check"></i>Suspension, Shock Absorbers.</li>
				<li><i class="fa fa-check"></i>Engine Oil.</li>
				<li><i class="fa fa-check"></i>Steering.</li>
				<li><i class="fa fa-check"></i>Brakes.</li>
				<li><i class="fa fa-check"></i>Air Filter.</li>
				<li><i class="fa fa-check"></i>Transmission CVT.</li>
				<li><i class="fa fa-check"></i>Mount.</li>
				<li><i class="fa fa-check"></i>Seat Belts.</li>
				<li><i class="fa fa-check"></i>Handbrakes.</li>
				<li><i class="fa fa-check"></i>Sun Visors.</li>
			<li><i class="fa fa-check"></i>Dashboard.</li>
				<li><i class="fa fa-check"></i>SRS/ABS check.</li>
	
			
		</ul>
	</p>
</div>
                    </div>
                   
            </div>
        </section>
        <!-- list area end here -->
	
				
					
					
					        <!-- about area start here --
        <section class="why-we bg-grey pt-125 pb-75 position-relative fix">
            <div class="common-shape-wrapper wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
            </div>
            <div class="container z-index">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="choose-left mb-40 mr-xs-0 mr-md-0 mr-lg-0 mr-90" data-aos="fade-up-right" data-aos-duration="1000">
                            <div class="section-title-wrapper">
                                <h5 class="section-subtitle mb-20">Frequently Asked Questions</h5>
                                 <div class="provide-thumb">
                           			 <img src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/03/41.jpg" alt="">
                        			</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="choose-right" data-aos="fade-left" data-aos-duration="1000">
               				
<button class="accordion">Section 1</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

                        </div>
    					 </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here ->




        <!-- brand area end here -->
        <div class="brand-area pt-100 pb-100">
            <div class="container">
                <div class="brand-active swiper-container">
                    <div class="swiper-wrapper align-items-center">
                    <?php if( have_rows('brand_slider') ):
                        $i=0; ?>
                        
                        <?php while( have_rows('brand_slider') ): the_row(); 
                            $image = get_sub_field('brand_image');
                            ?>
                            <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".<?php echo $i;?>s" data-swiper-autoplay="10000">
                            <a href="#"><img src="<?php echo $image['url']; ?>" class="img-fluid" alt="img"></a>
                            </div>
                        <?php 
                        $i++;
                    endwhile; ?>
                    
                    <?php endif; ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area start here -->


					<!-- about area start here -->
        <section class="why-we bg-grey pt-120 pb-125 pb-md-110 position-relative">
            <div class="common-shape-wrapper wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner wow slideInleft animated" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            </div>
            <div class="container z-index">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-thumb">
                            <div id="contact-map">
            					<?php the_field('location','option');?>
           				 	</div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-content">
                            <div class="section-title-wrapper mb-25">
                                <h5 class="section-subtitle mb-20">Contact Us</h5>
							</div>
									<div class="contact-form">
                       				 <?php echo do_shortcode('[contact-form-7 id="545" title="Service Contact Form"]');?>
                      			  </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->

					
					
</main>
<?php get_footer(); ?>	

				
				
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>