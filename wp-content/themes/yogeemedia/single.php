<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Yogeemedia
 */

get_header();
?>

<main>
<?php get_template_part("innerbanner");?>

        <!-- blog details area -->
        <section class="blog-details-area  pt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                        <div class="kblog">
                            <div class="kblog-img">
                                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-img-12.jpg" class="img-fluid" alt="blog-img"></a>
                                <span>21 May</span>
                            </div>
                            <div class="kblog-text kblog-text2">
                                <div class="kblog-meta">
                                    <a href="blog-details.html"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="blog-details.html"><i class="fal fa-comments"></i> 2 Comments</a>
                                </div>
                                <h3 class="kblog-text-title2 mb-40"><a href="blog-details.html">Our Strategy Create Business Growth</a></h3>
                                <p class="mb-35">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some injected or words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrang hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. </p>

                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type simen book. It has survived not only five centuries, but also the leap into electronic typesetting. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into unchanged.</p>
                            </div>
                        </div>
                        <div class="row pt-30 pb-20">
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="tag_cloud">
                                    <span>Tags: </span>
                                    <a href="#" class="tag-cloud-link">Graphics,</a>
                                    <a href="#" class="tag-cloud-link">Design,</a>
                                    <a href="#" class="tag-cloud-link">Business</a>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="blog-social text-md-end ">
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-15 pl-15">
                            <div class="blog-author bg-grey">
                                <div class="blog-author-img f-left">
                                    <a href="blog-details.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-img-author.jpg" alt="blog-img"></a>
                                </div>
                                <div class="blog-author-text fixed">
                                    <h4>Christive eve</h4>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It was popularised in the sheets containing lorem ipsum is simply free text.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-15 pl-15">
                            <div class="blog-comment-box">
                                <div class="comment-title">
                                    <h3 class="comment-box-title"><a href="blog-details.html">2 Comments</a></h3>
                                </div>
                                <div class="blog-single-comment d-flex">
                                    <div class="blog-comment-img">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-img-author2.png" alt="blog-img"></a>
                                    </div>
                                    <div class="blog-comment-text">
                                        <h4>Kevin Martin</h4>
                                        <p>A step-by-step tutorial on adding authentication and authorization to your Next.js apps, with Auth0. We’ll be using a Next.js SDK to connect our application. </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="comment-btn">reply</a>
                                    </div>
                                </div>
                                <div class="blog-single-comment no-pt d-flex">
                                    <div class="blog-comment-img">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-img-author3.png" alt="blog-img"></a>
                                    </div>
                                    <div class="blog-comment-text">
                                        <h4>Jessica Brown</h4>
                                        <p>Everything to keep in mind when designing and building a mega-dropdown, common pitfalls, hover entry/exit delays, trajectory triangle technique. </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="comment-btn">reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-comment-form">
                            <div class="comment-title2">
                                <h3 class="comment-box-title"><a href="#">Leave a Comment</a></h3>
                            </div>
                            <form action="mail.php" id="contact-form" method="POST">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                        <input name="name" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                        <input name="email" type="text" placeholder="Your Email">
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 mb-20">
                                        <textarea name="message" placeholder="Write Massage"></textarea>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 mb-20">
                                        <button type="submit" class="theme-btn border-btn">Submit comment</button>
                                    </div>
                                </div>
                            </form>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-md-40 mt-xs-40">
                        <div class="sidebar-wrap">
                            <div class="sidebar-search-from mb-30">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"> <i class="fal fa-search"></i> </button>
                                </form>
                            </div>

                            <div class="widget_-latest-posts mb-30">
                                <h4 class="bs-widget-title mb-25"> Latest Posts </h4>
                                <div class="sidebar__widget-content">
                                    <div class="rc-post d-flex mb-15">
                                        <div class="rc-thumb">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/sidebar-post-img1.jpg" alt="blog-img"></a>
                                        </div>
                                        <div class="rc-text">
                                            <div class="kblog-meta">
                                                <a href="blog-details.html"><i class="fal fa-user-circle"></i> by Admin</a>
                                            </div>
                                            <h5>
                                                <a href="#">experiences that connect us</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="rc-post d-flex mb-15">
                                        <div class="rc-thumb">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/sidebar-post-img2.jpg" alt="blog-img"></a>
                                        </div>
                                        <div class="rc-text">
                                            <div class="kblog-meta">
                                                <a href="blog-details.html"><i class="fal fa-user-circle"></i> by Admin</a>
                                            </div>
                                            <h5>
                                                <a href="#">From banking and insurance to</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="rc-post d-flex">
                                        <div class="rc-thumb">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/sidebar-post-img3.jpg" alt="blog-img"></a>
                                        </div>
                                        <div class="rc-text">
                                            <div class="kblog-meta">
                                                <a href="blog-details.html"><i class="fal fa-user-circle"></i> by Admin</a>
                                            </div>
                                            <h5>
                                                <a href="#">We work with you to business</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget_categories grey-bg mb-30">
                                <h4 class="bs-widget-title pl-15">Categories</h4>
                                <ul>
                                    <li><a href="#">Web Developement</a></li>
                                    <li><a href="#">Graphic Design</a></li>
                                    <li><a href="#">SEO &amp; Content Writting</a></li>
                                    <li><a href="#">Digital Marketing</a></li>
                                    <li><a href="#">App Development</a></li>
                                </ul>
                            </div>

                            <div class="widget_tag_cloud">
                                <h4 class="bs-widget-title mb-25"> Tags </h4>
                                <div class="tagcloud">
                                    <a href="#" class="tag-cloud-link">Graphics</a>
                                    <a href="#" class="tag-cloud-link">Design</a>
                                    <a href="#" class="tag-cloud-link">Business</a>
                                    <a href="#" class="tag-cloud-link">development</a>
                                    <a href="#" class="tag-cloud-link">Technology</a>
                                    <a href="#" class="tag-cloud-link">Content</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog details area end  -->
    </main>


<?php get_footer(); ?>
