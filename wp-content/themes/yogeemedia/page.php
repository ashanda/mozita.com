<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yogeemedia
 */

get_header();
?>

<main>
<?php get_template_part("innerbanner");?>

        <!-- service details area start here -->
        <section class="service-detals pt-120 pb-100 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="develop-wrapper">
                            
                            <div class="develop-content">
                                <h3 class="service-title"><?php the_title();?></h3>
                                <?php the_content();?>
                            </div>
                        </div>

                        

                        
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- service details area end here -->


        
    </main>

<?php get_footer(); ?>	
