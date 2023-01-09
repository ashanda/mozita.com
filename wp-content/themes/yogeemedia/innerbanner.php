<?php 
				if (wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) && !(is_singular('service')) && !(is_singular('project')) && !(is_singular('post')) && !(is_singular('product'))  && !(is_category()) )
				  {
					$bannerUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    
				  }else{
                    $banner = get_field('default_inner_banner', 'option');
                    $bannerUrl = $banner['url'];
				}
?>


<!-- page title area  -->
<section class="page-title-area breadcrumb-spacing" data-background="<?php echo $bannerUrl;?>">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25"><?php the_title();?></h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="<?php echo get_home_url(); ?>"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span><?php the_title();?></span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </section>
<!-- page title area end -->