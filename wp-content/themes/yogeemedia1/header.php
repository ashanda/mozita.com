<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yogeemedia
 */

?>
<!doctype html>
<html lang="<?php language_attributes(); ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- All CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/backToTop.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom-animation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/spacing.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/venobox.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <img src="https://mozita.co.nz/wp-content/uploads/2022/08/076_-loading_animated_dribbble_copy.gif">
        </div>
    </div>
    <!-- preloader end  -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header-area-start -->
    <header>
        <div class="transparent-header">
            <div class="container-fluid">
                <div class="header-space">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-8">
                            <div class="header-logo">
                                <a href="<?php echo get_home_url(); ?>"><img src="<?php the_field('company_logo','option');?>" class="img-fluid" alt="logo-img"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-4">
                            <div class="main-menu">
                                <nav id="mobile-menu">
								<?php
									wp_nav_menu( array(
									'theme_location'  => 'menu-1',
									'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
									'container'       => 'ul',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
									'walker'          => new WP_Bootstrap_Navwalker(),
								) );
								?>
                                    
                                </nav>
															
							
							
                            </div>
                            <div class="side-menu-icon d-xl-none text-end">
                                <button class="side-toggle"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-xl-6 d-none d-xl-block">
							
                            <div class="header-right text-end">
								<div class="time">
									<?php echo date(get_option('date_format')); ?> |
									<span id="span">
									<?php echo date(get_option('time_format')); ?>
									</span>
									
								</div>
                                <div class="header-social">
                                <?php if( have_rows('social_media','option') ): ?>
                                    
                                    <?php while( have_rows('social_media','option') ): the_row(); ?>
                                        <a href="<?php the_sub_field('social_link'); ?>" target="_blank"><i class="fab <?php the_sub_field('social_icon'); ?>"></i></a>
                                    <?php endwhile; ?>
                                    
                                <?php endif; ?>
                                </div>
                                <!--div class="header-search">
                                    <a class="search-btn nav-search search-trigger" href="#"><i class="far fa-search"></i></a>
                                </div-->
                                <div class="header-btn">
                                    <a href="<?php echo get_home_url(); ?>/contact-us/" class="theme-btn theme-btn-small" >Free Estimate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->
	
	
	
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="mobile-menu"></div>
                <div class="contact-infos mb-30">
                    <div class="contact-list mb-30">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/sidebar-icon-1.png" class="img-fluid" alt="icon-img">162 Corporation road, Newport, NP19 0DL, UK</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/sidebar-icon-1.png" class="img-fluid" alt="icon-img">No 1, Suriya Residence, Wijaya Road, Gampaha, Sri Lanka</li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/footer-icon-1.png" class="img-fluid" alt="icon-img"><a href="mailto:info@yogeemedia.com">info@yogeemedia.com</a></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/footer-icon-2.png" class="img-fluid" alt="icon-img"><a href="tel:+447360774299">+44 73 6077 4299</a></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/footer-icon-2.png" class="img-fluid" alt="icon-img"><a href="tel:0764002007">+94 76 400 2007</a></li>
                        </ul>
                        <div class="sidebar__menu--social">
							<a href="https://www.facebook.com/YogeeMedia/?ti=as" target="_blank"><i class="fab fa-facebook"></i></a>
							<a href="https://www.linkedin.com/company/yogeemedia" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>                          
                            <a href="https://instagram.com/yogeemedia?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>

    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fal fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Entire Store...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->
