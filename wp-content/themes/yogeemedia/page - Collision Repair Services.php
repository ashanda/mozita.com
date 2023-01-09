<?php
/*
Template Name: Collision Repair Services page
*/
?>
<?php get_header();  ?> 


<main>
<?php get_template_part("innerbanner");?>
	<style>
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
                                <h5 class="section-subtitle mb-20">Quality Collision Repairs</h5>
                                <h2 class="section-title mb-35">At Mozita Collision Repairs
                                </h2>
							 </div>
                                <p>When you’re in need of collision repairs, we are the best go to place. We’ll provide you with a clear estimate for your repairs, and will make sure you are completely satisfied with the work.
					<br/>
					We are proud to offer the highest quality work at an affordable price. Our skilled technicians are up-to-date on the latest industry trends and techniques. Quality Collision Repairs at Mozita is a place where you can trust your car will be fixed right the first time.
					<br/>
					We have everything you need to make your car look as good as new.
					<br/>
					If you have been in a car accident, you know the stress and worry that come with it. From a simple paint job to a full collision repair. It doesn’t matter if you have been in a minor fender bender or a serious collision, Mozita Collision Repairs can help.
					</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->



 <!-- about area start here -->
        <section class="why-we bg-grey pt-120 pb-125 pb-md-110 position-relative">
            <div class="common-shape-wrapper wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner wow slideInleft animated" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            </div>
            <div class="container z-index">
                <div class="row justify-content-between">
                    
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-content">
                            <div class="section-title-wrapper mb-25">
                                <h2 class="section-title mb-35">Our Working Process
                                </h2>
							 </div>
                                <p>Have you been in a car accident? If so, we’re here to help. At Mozita Collision and repairs, we specialize in fixing and repairing your car after an accident. Our team is knowledgeable and trained to handle any situation.
					<br/>
					We will work with you to make sure you get the best possible service for your needs. We offer repairs for all makes and models, including foreign and domestic.
					</p>
                           
                        </div>
                    </div>
		<div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-thumb">
                            <img src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/03/16.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->





	      


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