<?php get_header();  ?> 
<main>
<?php get_template_part("innerbanner");?>

        <!-- project details area start  -->
        <section class="project-details-area pt-120 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="project-big-thumb">
                            <img src="<?php the_field('project_image_in_project_page'); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                        <div class="p-details-content mb-40">
                            <h3><?php the_field('project_page_title'); ?></h3>
                            <?php the_field('project_description'); ?>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="sidebar-wrap mb-40">
                            <div class="sidebar-right">
								<?php if( have_rows('info') ): ?>
								
								<?php while( have_rows('info') ): the_row(); 
									
									?>
									<div class="sidebar-single">
                                    <label><?php the_sub_field('title'); ?></label>
                                    <span><?php the_sub_field('content'); ?></span>
                                	</div>
								<?php endwhile; ?>
							<?php endif; ?>
                                
                                
                                
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project detials area end  -->

        

        <!-- project area start  -->
        <section class="project-2 pt-115 pb-90 fix">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title-wrapper mb-50 text-center">
                            <h5 class="section-subtitle mb-20">Our recent work</h5>
                            <h2 class="section-title">More similar work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<?php
						// Set the post type here, and sort them randomly
						$args = array(
							'post_type' => 'project',
							'posts_per_page'=> 3, 
							'order_by' => 'rand',
						);
						// Initiate a custom query
						$my_query = new WP_Query($args);
						// If the query has any post, start the loop
						if($my_query->have_posts()){
							while($my_query->have_posts()){
								// Output a link and a thumbnail of the post
								$my_query->the_post(); ?>
					
								 <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-duration="1000">
                        <div class="kproject kproject-2 mb-30">
                            <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="project_img">
                            <div class="kproject-text kproject-text-2">
                                <div class="kproject-text-content">
                                    <span></span>
                                    <h5 class="kproject-text-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                                </div>
                                <div class="kproject-text-icon">
                                    <a href="<?php the_permalink();?>"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
							}
						} ?>
                    
					
                   
                  
                </div>
            </div>
        </section>
        <!-- project area end  -->
    </main>
    <?php get_footer(); ?>	