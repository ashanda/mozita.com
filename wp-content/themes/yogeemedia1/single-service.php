<?php get_header();  ?> 
<main>
<?php get_template_part("innerbanner");?>

        <!-- service details area start here -->
        <section class="service-detals pt-120 pb-100 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="develop-wrapper">
                            <div class="develop-thumb">
                                <img src="<?php the_field('service_image_in_service_page'); ?>" alt="">
                            </div>
                            <div class="develop-content">
                                <h3 class="service-title"><?php the_field('service_page_title');?></h3>
                                <?php the_field('service_description');?>
                            </div>
                        </div>

                        

                        
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="sidebar-wrap">
                            <div class="widget_categories grey-bg">
                                <h4 class="bs-widget-title pl-20">Categories</h4>

									<?php
                               $post_type = 'service';
								$taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type, 'hide_empty' => true ) ); ?>
									<ul>
								<?php foreach( $taxonomies as $taxonomy ){
									echo $taxonomy->name;

									$terms = get_terms( $taxonomy );
									foreach( $terms as $term ){
										echo '<li>';
										echo '<a href="javascript:void(0)">';
										echo $term->name;
										echo '</a>';
										echo '</li>';
									}
								}?>
										</ul>
								
                            </div>
                            <div class="widget-btn mt-30">
                                <a href="<?php echo get_home_url(); ?>/contact-us" class="theme-btn border-btn">get a free estimate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service details area end here -->


        <!-- cta area  -->
        <?php/*<section class="cta-area mt--60 z-index" data-aos="fade-up">
            <div class="container">
                <div class="cta-bg bg-theme">
                    <div class="cta-number">
                        <div class="cta-number-icon mr-30">
                            <i class="flaticon-reaction"></i>
                        </div>
                        <div class="cta-number-text fix">
                            <span class="uppercase"><?php the_field('contact_area_title');?></span>
                            <h3><a href="tell:<?php the_field('telephone_number','option')?>"><?php the_field('telephone_number','option')?></a></h3>
                        </div>
                    </div>
                    <div class="cta-description">
                        <p><?php the_field('contact_area_description');?></p>
                    </div>
                    <div class="cta-btn text-lg-end text-start">
                        <a href="<?php the_field('contact_area_button_link');?>" class="theme-btn black-btn"><?php the_field('contact_area_button_text');?></a>
                    </div>
                </div>
            </div>
        </section>*/?>
        <!-- cta area end  -->
    </main>

<?php get_footer(); ?>	
