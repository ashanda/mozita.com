<?php
/*
Template Name: Blog Page
*/
?>
<?php get_header();  ?> 
<main>
<?php get_template_part("innerbanner");?>

        <!-- blog area start  -->
        <section class="blog-2 pt-120 pb-115">
            <div class="container">
                <div class="row">
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
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 mb-30">
                        <div class="kblog">
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
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="basic-pagination mt-20 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <ul>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="next page-numbers" href="#">
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end  -->
    </main>
<?php get_footer(); ?>	