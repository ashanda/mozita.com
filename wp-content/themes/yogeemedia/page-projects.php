<?php
/*
Template Name: Projects Page
*/
?>
<?php get_header();  ?> 
<main>
<?php get_template_part("innerbanner");?>
        <!-- project area start  -->
        <section class="project-2 pt-115 pb-90 fix">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 mb-55">
                        <div class="aportfolio-menu text-start text-lg-end">
                            <button data-filter="*" class="active">All</button>
                            <?php
                                $i=0; 
                                $terms = get_terms('project_category',array('parent' => 0) );
                                   
                                foreach ( $terms as $cat):?>
                                <button data-filter=".cat<?php echo $i;?>" class=""><?php echo $cat->name;?></button>
                                <?php
                                $i++;
                                endforeach;
                                ?>
                            
                        </div>
                    </div>
                </div>
                <div class="row aportfolio-active" style="position: relative; height: 878.934px;">
                <?php
                        $loop = new WP_Query(
                            array(
                                'post_type' => 'project',
                                'posts_per_page' => -1 
                            )
                        );
                        $i=0;
                        while ( $loop->have_posts() ) : $loop->the_post();
                        // The content you want to loop goes in here:
                        ?>
                    <div class="col-lg-4 col-md-6 grid-item cat<?php echo $i;?>">
                        <div class="kproject kproject-2 mb-30">
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                        
                            <a href="<?php echo $featured_img_url; ?>" data-gall="myGallery" class="venobox"><img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="project_img"></a>
                            <div class="kproject-text kproject-text-2">
                                <div class="kproject-text-content">
                                <?php
                                $post_id = get_the_ID() ;
                                $categories = get_the_terms($post_id ,'project_category' );
                                    
                                foreach ( $categories as $cat){?>
                                <span><?php echo $cat->name;?></span>
                                <?php
                                }
                                ?>
									
                                   <h5 class="kproject-text-title"><a href="<?php the_field("website_link"); //echo get_permalink();?>" target="_blank"><?php the_title();?></a></h5>
                                </div>
                                <div class="kproject-text-icon">
                                    <a  target="_blank" href="<?php the_field("website_link");  ?>"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                $i++;    
                endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
        <!-- project area end  -->
    </main>


<?php get_footer(); ?>	