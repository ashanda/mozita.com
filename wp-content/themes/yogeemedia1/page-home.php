<?php
/*
Template Name: Home Page
*/
?>
<?php get_header();  ?> 
<main>
        <!-- slider area start here -->
        <section class="slider-area fix position-relative">
            <div class="slider-active swiper-container">		
                <div class="swiper-wrapper">
                <?php if( have_rows('home_slider') ): ?>
                  <?php while( have_rows('home_slider') ): the_row(); 
                    $image = get_sub_field('slider_image');
                    ?>
                    <div class="single-slider slider-height swiper-slide" data-swiper-autoplay="10000">
                        <div class="slide-bg" data-background="<?php echo $image['url']; ?>"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="kslider z-index">
                                        <h5 class="kslider--subtitle mb-25" data-animation="fadeInUp" data-delay="0.3s"><?php the_sub_field('main_title'); ?></h5>
                                        <h2 class="kslider--title mb-40" data-animation="fadeInUp" data-delay="0.5s"><?php the_sub_field('sub_title'); ?></h2>
                                        <div class="kslider--btn" data-animation="fadeInUp" data-delay="0.7s">
                                            <a href="<?php the_sub_field('button_link'); ?>" class="theme-btn"><?php the_sub_field('button_text'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-shape shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider-shape-1.png" class="img-fluid" alt="shape-img"></div>
                        <!--div class="slide-shape shape-2"><img src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/08/slider-shape-2.png" class="img-fluid" alt="shape-img"></div-->
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>  
                </div>
                <!-- If we need pagination -->
                <div class="slider-paginations slide-dots"></div>
            </div>
        </section>
        <!-- slider area end here -->

	
	
	
	
	
	
	<!-- service area start here -->
        <section class="service-2 pt-120 pb-90">
            <div class="container">
                <div class="row">
					
					
					<div class="col-xxl-12 col-lg-12">
                        <div class="kservice-text mb-50" data-aos="fade-right" data-aos-duration="1000">
                            <h5 class="kservice-text-subtitle mb-15"><?php the_field('service_area_sub_title');?></h5>
                            <h2 class="kservice-text-title mb-40"><?php the_field('service_area_title');?></h2>
                            <p class="mb-45"><?php the_field('service_area_description');?></p>
                            <!--div class="kservice-author">
                                <div class="kservice-author-img mr-30">
                                    <img src="<?php the_field('service_area_author_image');?>" class="img-fluid" alt="author-img">
                                </div>
                                <div class="kservice-author-sign">
                                    <span><?php the_field('service_area_author_signature');?></span>
                                </div>
                            </div-->
                        </div>
                    </div>
					
					
                <?php
                        $loop = new WP_Query(
                            array(
                                'post_type' => 'service',
                                'posts_per_page' => 6 
                            )
                        );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        // The content you want to loop goes in here:
                        ?>
                    <div class="col-xl-6 col-lg-6 col-sm-6">
                        <div class="kservice-2 mb-30 wow fadeInUp" data-wow-duration=".3s">
                            <div class="kservice-text-2">
                                <span>Services</span>
                                <h4 class="kservice-title-2"><a href="<?php the_field('page_link');?>"><?php the_title();?></a></h4>
                                
                            </div>
<!--                             <a href="<?php echo get_permalink();?>"> -->
								<a href="<?php the_field('page_link');?>">
                            <div class="kservice-img-2">
                                <img src="<?php the_field('service_image_in_service_page');?>" class="img-fluid" alt="service-img">
                            </div>
                            </a>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                   
                   
                   
                </div>
            </div>
        </section>
        <!-- service area end here -->

	
	
	
	
	
	
	
	
	
	
	
	
	
        <!-- service area start here -->
        <section class="service-area pt-120 pb-130" data-background="<?php the_field('service_area_background_image');?>">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-5 col-lg-6">
                        <div class="kservice-text mb-50" data-aos="fade-right" data-aos-duration="1000">
                            <h5 class="kservice-text-subtitle mb-15"><?php the_field('service_area_sub_title');?></h5>
                            <h2 class="kservice-text-title mb-40"><?php the_field('service_area_title');?></h2>
                            <p class="mb-45"><?php the_field('service_area_description');?></p>
                            <!--div class="kservice-author">
                                <div class="kservice-author-img mr-30">
                                    <img src="<?php the_field('service_area_author_image');?>" class="img-fluid" alt="author-img">
                                </div>
                                <div class="kservice-author-sign">
                                    <span><?php the_field('service_area_author_signature');?></span>
                                </div>
                            </div-->
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="row custom-mar-20" data-aos="fade-down" data-aos-duration="1000">
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="fas fa-car"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a href="<?php the_field('service_area_category_01_link');?>"><?php the_field('service_area_category_01_title');?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="fas fa-car-battery"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a href="<?php the_field('service_area_category_02_link');?>"><?php the_field('service_area_category_02_title');?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="fas fa-car-crash"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a href="<?php the_field('service_area_category_03_link');?>"><?php the_field('service_area_category_03_title');?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                      <i class="fab fa-wpforms" ></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a href="<?php the_field('service_area_category_04_link');?>"><?php the_field('service_area_category_04_title');?></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end here -->

        <!-- cta area start here -->
        <section class="cta-area mt--60 z-index" data-aos="fade-up">
            <div class="container">
                <div class="cta-bg bg-theme">
                    <div class="cta-number">
<!--                         <div class="cta-number-icon mr-30">
                            <i class="flaticon-reaction"></i>
                        </div> -->
                        <div class="cta-number-text fix">
                            
							<span class="uppercase">Toll Free</span>
                            <h3><a href="tell:<?php the_field('toll_free','option')?>"><?php the_field('telephone_number_uk','option')?></a></h3>
							
                        </div>
                    </div>
					 <div class="cta-number">
<!--                         <div class="cta-number-icon mr-30">
                            <i class="flaticon-reaction"></i>
                        </div> -->
                        <div class="cta-number-text fix">
                            
							<span class="uppercase">Land Line</span>
                            <h3><a href="tell:<?php the_field('land_line','option')?>"><?php the_field('land_line','option')?></a></h3>
							
                        </div>
                    </div>
			
                    </div--->
<!--                     <div class="cta-description">						
                    </div> -->
                    <div class="cta-btn text-lg-end text-start">
                        <a href="<?php the_field('contact_area_button_link');?>" class="theme-btn black-btn"><?php the_field('contact_area_button_text');?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta area end here -->

        <!-- about area start here -->
        <section class="about-area pt-120 pb-70 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="kabout-img mb-50 mr-70" data-aos="zoom-out-up" data-swiper-autoplay="10000">
                            <div class="kabout-img-shape"></div>
                            <img src="<?php the_field('about_area_large_image');?>" class="img-fluid z-index" alt="about-img">
                            <div class="kabout-img-small">
                                <img src="<?php the_field('about_area_small_image');?>" class="img-fluid" alt="about-img">
                                <div class="kabout-img-small-icon play_btn">
                                    <span>
                                        <i class="flaticon-idea"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="kabout mb-50" data-aos="zoom-out-down" data-swiper-autoplay="10000">
                            <div class="section-title-wrapper mb-45">
                                <h5 class="section-subtitle mb-20"><?php the_field('about_area_sub_title');?></h5>
                                <h2 class="section-title mb-35"><?php the_field('about_area_title');?></h2>
                                <p><?php the_field('about_area_description');?></p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="kabout-service mb-30">
                                        <h4 class="kabout-service-title">
											<?php the_field('about_service_block_left');?></h4>
                                        <p><?php the_field('about_service_block_left_description');?></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="kabout-service mb-30">
                                        <h4 class="kabout-service-title"><?php the_field('about_service_block_right');?></h4>
                                        <p><?php the_field('about_service_block_right_description');?></p>
                                    </div>
                                </div>
                            </div>
                            <ul class="mt-20 mb-55">
                            <?php if( have_rows('about_area_key_points') ): ?>
                            
                            <?php while( have_rows('about_area_key_points') ): the_row();?>
                                <li>
                               <i class="fal fa-check"></i> <?php the_sub_field('points'); ?>   
                                </li>
                            <?php endwhile; ?>
                           
                        <?php endif; ?>
                                
                            </ul>
                            <div class="kabout-btn">
                                <a href="mozita/about/" class="theme-btn border-btn"><?php the_field('about_area_button_text');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->
        
        <!-- project area strat here -->
        <section class="project-area bg-grey pt-115 pb-100 fix" >
            <div class="common-shape-wrapper wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-title-wrapper mb-45">
                            <h5 class="section-subtitle mb-20"><?php the_field('project_area_sub_title');?></h5>
                            <h2 class="section-title"><?php the_field('project_area_title');?></h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="lol text-md-end">
                            <!-- If we need navigation buttons -->
                            <div class="project-button-prev slide-prev"><i class="far fa-long-arrow-left"></i></div>
                             <div class="project-button-next slide-next"><i class="far fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-active swiper-container">
                <div class="swiper-wrapper">
                <?php
                        $loop = new WP_Query(
                            array(
                                'post_type' => 'project',
                                'posts_per_page' => -1 
                            )
                        );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        // The content you want to loop goes in here:
                        ?>
                    <div class="kproject swiper-slide">
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                        <img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                            <?php
                                $post_id = get_the_ID() ;
                                $categories = get_the_terms($post_id ,'project_category' );
                                    
                                foreach ( $categories as $cat){
                                if(!empty($cat)){?>
                                <span><?php echo $cat->name;?></span>
                                <?php }else{ ?>
                                
                                <span>Not category select</span>
                                
                                
                                <?php
                                }
                                }
                                ?>
                                <h5 class="kproject-text-title"><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="<?php echo get_permalink();?>"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>                    
                </div>
            </div>
        </section>
        <!-- project area end here -->
        
        <!-- video area start here -->
        <section class="video-area z-index" style="display:none;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper mb-45 text-center">
                            <h5 class="section-subtitle mb-20"><?php the_field('video_area_sub_title');?></h5>
                            <h2 class="section-title mb-35"><?php the_field('video_area_title');?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="kvideo-wrapper" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="kvideo" data-background="<?php the_field('video_thumbnail');?>">
                                <div class="kvideo-sign text-center">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video" href="<?php the_field('video_url');?>"><i class="fas fa-play"></i></a>
                                    <h2><?php the_field('video_title');?></h2>
                                </div>
                                <div class="kvideo-number">
                                    <span>get estimate</span>
                                    <a href="tel:<?php the_field('telephone_number','option');?>"><?php the_field('telephone_number','option');?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video area end here -->

        <!-- testimonial area start here -->
        <section class="testimonial-area pt-115 pb-85" style="display:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center mb-45">
                            <h5 class="section-subtitle mb-20"><?php the_field('testimonials_sub_title');?></h5>
                            <h2 class="section-title mb-35"><?php the_field('testimonials_area_title');?></h2>
                        </div>
                    </div>
                </div>

                <div class="testimonial-active swiper-container">
                    <div class="swiper-wrapper">
                    <?php if( have_rows('reviews') ): ?>
                        <?php while( have_rows('reviews') ): the_row(); 
                            $image = get_sub_field('customer_image');
                            ?>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p><?php the_sub_field('descriptions'); ?></p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="<?php echo $image["url"]; ?>" class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase"><?php the_sub_field('customer_name'); ?></h5>
                                    <span class="uppercase"><?php the_sub_field('customer_jobrole'); ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end here -->

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

        <!-- trust area start here -->
        <section class="trust-area pt-105 pb-120">
           <div class="trust-bg" data-background="<?php the_field('trusted_area_background_image');?>"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ktrust text-center z-index">
                            <h2 class="ktrust-title mb-45 wow fadeInUp" data-wow-delay=".2s"><?php the_field('trusted_area_title');?></h2>
                            <div class="ktrust-btn">
                                <a href="<?php the_field('button_link');?>" class="theme-btn"><?php the_field('button_text');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trust area end here -->
        
        <!-- blog area start here -->
        <section class="blog-area pt-120" data-background="<?php the_field('blog_area_background_image');?>">
            <div class="blog-space pb-120">
                <div class="blog-text pt-60" data-aos="zoom-in">
                    <div class="section-title-wrapper pr-25 mb-50">
                        <h5 class="section-subtitle mb-20"><?php the_field('blog_area_subtitle');?></h5>
                        <h2 class="section-title mb-35"><?php the_field('blog_are_title');?></h2>
                        <p class="pr-50"><?php the_field('blog_area_description');?></p>
                    </div>
                    <!-- If we need navigation buttons -->
                   <div class="kblog-arrow">
                        <div class="blog-button-prev slide-prev"><i class="far fa-long-arrow-left"></i></div>
                        <div class="blog-button-next slide-next"><i class="far fa-long-arrow-right"></i></div> 
                   </div>
                </div>
                <div class="blog-active swiper-container">
                    <div class="swiper-wrapper">
                    <?php
                        $loop = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'posts_per_page' => 6 
                            )
                        );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        // The content you want to loop goes in here:
                        ?>
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="<?php echo get_permalink();?>">
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?><img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="blog-img"></a>
                                <span><?php echo get_the_date( 'F j' );?></span>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                </div>
                                <h3 class="kblog-text-title mb-20"><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                                <div class="kblog-text-link">
                                    <a href="<?php echo get_permalink();?>">Read more <i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                    wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end here -->
        
        <!-- quality area start here -->
        <section class="quality-area pt-120 pb-90 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="kquality mb-30" data-aos="zoom-in-right">
                            <div class="kquality-icon">
                                <img src="https://yogeemedia.xyz/websites/mozita/wp-content/uploads/2022/07/Untitled-design-1.png">
                            </div>
                            <div class="kquality-text fix">
                                <h3 class="mb-20 kquality-text-title"><?php the_field('qulity_area_title');?></h3>
                                <p><?php the_field('qulity_area_description');?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-lg-end mb-30" data-aos="zoom-in-left">
                            <div class="kquality-img">
                                <img src="<?php the_field('qulity_area_image');?>" class="img-fluid" alt="cta-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quality area end here -->

        <!-- map area start here -->
        <div class="map-area">
        <?php the_field('location','option');?>
        </div>
        <!-- map area end here -->

    </main>


<?php get_footer(); ?>	