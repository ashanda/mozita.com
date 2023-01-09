<?php
/*
Template Name: Hybrid Repair Services page
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
                                <h5 class="section-subtitle mb-20">Quality Hybrid Repairs</h5>
                                <h2 class="section-title mb-35">At Mozita Hybrid Repairs
                                </h2>
							 </div>
                                <p>Tired of dealing with the long wait and high cost of repairing your hybrid vehicle? Look no further than Mozita Hybrid Repairs, 
					a company that specializes in repairing hybrid vehicles. We provide fast, reliable service at a price that won’t break the bank. 
					From hybrid battery replacement to hybrid starter repair, we have the right service for you.
					<br/>
					Get your hybrid car back on the road with quality hybrid repairs. If you’re experiencing a decrease in fuel efficiency, increased engine noise, or a warning 
					light that indicates a problem, then you need to get your hybrid vehicle repaired.
					<br/>
					If you have been looking for a repair shop, look no further. We offer a wide range of services to ensure that your hybrid vehicle is running smoothly.</p>
                           
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
                                <i class="fas fa-car-battery"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title">Hybrid battery <br/>cooling system servicing</h5>
				<p>
				These are integral to the safe and efficient operations. We will make sure your battery is running at peak performance and efficiency. You’ll be driving again in no time. 
				</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                 <i class="fas fa-car-crash"></i>
                            </div>
                            <div class="kservice-content">
                                 <h5 class="kservice-content-title">Hybrid Vehicle <br/>Testing & diagnosticst</h5>
				<p> 
				This is the best solutions for your unique needs. We offer comprehensive testing for all hybrid vehicles, battery-electric, plug-in hybrid, and fuel cell.
				</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="fas fa-car-battery"></i>
                            </div>
                            <div class="kservice-content"> <h5 class="kservice-content-title">Hybrid battery <br/>cooling system servicing</h5>
				<p>
				These are integral to the safe and efficient operations. 
				Our experts will make sure your battery is running at peak performance and efficiency. You’ll be driving again in no time. 
				</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                              <i class='fas fa-prescription-bottle'></i>
                            </div>
                            <div class="kservice-content">
                                 <h5 class="kservice-content-title"> Fluid replacement <br/>services</h5>
				<p>
				At Mozita, we are committed to helping drivers get back on the road quickly. We offer services for foreign and domestic cars. We offer variety of services for car fluid replacement.
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
		<ul class="service-list">
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
						
                        <div class="card card-1">
	<div class="card-image kabout-img">
		<img class="kabout-img-small-icon"" src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/08/car.png">
	</div>
	<p class="name">
		<ul class="service-list">
				<li><i class="fa fa-check"></i>All lubricant points.</li>
				<li><i class="fa fa-check"></i>Coolant level & condition.</li>
 				<li><i class="fa fa-check"></i>Fuel evaporating and emission system</li>
				<li><i class="fa fa-check"></i>Transmission fluid condition & level check.</li>
				<li><i class="fa fa-check"></i>Air filter condition & clean up.</li>
				<li><i class="fa fa-check"></i>Brake fluid condition & level.</li>
				<li><i class="fa fa-check"></i>Underbody damage.</li>
			<li><i class="fa fa-check"></i>Fuel lines.</li>
				<li><i class="fa fa-check"></i>Driveline oil.</li>
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
				<li><i class="fa fa-check"></i>Wiper operation.</li>
				<li><i class="fa fa-check"></i>Air conditioning.</li>
			
				<li><i class="fa fa-check"></i>Brake lines.</li>
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
        </section>
        <!-- list area end here -->
	
					
					
					
					        <!-- about area start here -->
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
               				
<button class="accordion">We are MTA Assured</button>
<div class="panel">
  <p>Our customers are covered by the MTA repairer warrenty so you cab rest assured that any substandar repair that slips trough our quality controls will be remidied when brought bac within the warrenty period.</p>
</div>

<button class="accordion">What that means to you?</button>
<div class="panel">
  <p>All MTA members are bound to strick criteria which means that when you use a MTA member, you can expert to receive the highest quality service. Quality and affordable price is always assured and guarantee you a safe journey.</p>
</div>

<button class="accordion">MTA gift cards and vouchers</button>
<div class="panel">
  <p>Prefer way to say thank you! You can now purchase and reedem from us.</p>
</div>
							
<button class="accordion">Quality Workmanshio & repairs</button>
<div class="panel">
  <p>MTA repaires will only undertake work that yo hae authorized and will contact if you need any extra works.</p>
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