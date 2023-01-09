<?php
/*
Template Name: Services Page
*/
?>
<?php get_header();  ?> 
<main>
<?php get_template_part("innerbanner");?>

        <!-- service area start here -->
        <section class="service-2 pt-120 pb-90">
            <div class="container">
                <div class="row">
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
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="kservice-2 mb-30 wow fadeInUp" data-wow-duration=".3s">
                            <div class="kservice-text-2">
                                <span>Services</span>
                                <h4 class="kservice-title-2"><a href="<?php the_field('page_link');?>"><?php the_title();?></a></h4>
                                
                            </div>
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

        <!-- about area start here -->
        <section class="why-we bg-grey pt-120 pb-125 pb-md-110 position-relative">
            <div class="common-shape-wrapper wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner wow slideInleft animated" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            </div>
            <div class="container z-index">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-thumb">
                            <img src="<?php the_field('about_area_image');?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-content">
                            <div class="section-title-wrapper mb-25">
                                <h5 class="section-subtitle mb-20"><?php the_field('about_area_sub_title');?></h5>
                                <h2 class="section-title mb-35"><?php the_field('about_area_title');?>
                                </h2>
                                <p><?php the_field('about_area_italic_description');?></p>
                            </div>
                            <p><?php the_field('about_area_description');?></p>
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
					 
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
                        <div class="kservice kservice_serv text-center mb-20">
                            <div class="kservice-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title">Automotive <br>Repair</h5>
                            </div>
                        </div>
                    </div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
                        <div class="kservice kservice_serv text-center mb-20">
                            <div class="kservice-icon">
                                 <i class="fas fa-car-crash"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title">Collision Repair <br>& Paint</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
                        <div class="kservice kservice_serv text-center mb-20">
                            <div class="kservice-icon">
                                <i class="fas fa-car-battery"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title">Hybrid <br>Services</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
                        <div class="kservice kservice_serv text-center mb-20">
                            <div class="kservice-icon">
                              <i class="fab fa-wpforms" ></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title">Recruitment <br>Services</h5>
                            </div>
                        </div>
                    </div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
                        <div class="kservice kservice_serv text-center mb-20">
                            <div class="kservice-icon">
                                <i class="fas fa-desktop"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title">Digital <br>Services</h5>
                            </div>
                        </div>
                    </div>
					<div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 custom-pad-20">
                        <div class="kservice kservice_serv text-center mb-20">
                            <div class="kservice-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title">Study | Invest <br>in New Zealand</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end here -->

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
    </main>

<?php get_footer(); ?>	