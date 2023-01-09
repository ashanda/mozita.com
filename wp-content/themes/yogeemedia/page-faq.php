<?php
/*
Template Name: Faq Page
*/
?>
<?php get_header();  ?>
<main>
<?php get_template_part("innerbanner");?>

        <!-- faq area start -->
        <section class="faq-area pt-120 pb-100 bg-grey fix">
            <div class="container z-index">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-wrapper">
                        <div class="choose-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="accordion" id="accordionExample">
                            <?php if( have_rows('faq_left') ): 
                                $i=0; 
                                $area;
                                $show;
                                $collapsed;?>
                                
                                <?php while( have_rows('faq_left') ): the_row(); 
                                 
                                 ?>
                                 <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading<?php echo $i;?>">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i;?>" aria-expanded=<?php echo $area;?> aria-controls="collapse<?php echo $i;?>">
                                    <?php the_sub_field('question'); ?>
                                    </button>
                                  </h2>
                                  <div id="collapse<?php echo $i;?>" class="accordion-collapse collapse <?php echo $show;?>" aria-labelledby="heading<?php echo $i;?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php the_sub_field('answer'); ?></p>
                                    </div>
                                  </div>
                                </div>
                                <?php 
                                $i++;
                            endwhile; ?>
                            <?php endif; ?>
                                

                              
                              </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-wrapper-2">
                        <div class="choose-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="accordion" id="accordionExample">
                            <?php if( have_rows('faq_right') ): 
                                $j=0; 
                                $area;
                                $show;
                                $collapsed;?>
                                
                                <?php while( have_rows('faq_right') ): the_row(); 
                                 
                                 ?>
                                 <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading<?php echo $j;?>">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $j;?>" aria-expanded=<?php echo $area;?> aria-controls="collapse<?php echo $j;?>">
                                    <?php the_sub_field('question'); ?>
                                    </button>
                                  </h2>
                                  <div id="collapse<?php echo $j;?>" class="accordion-collapse collapse <?php echo $show;?>" aria-labelledby="heading<?php echo $j;?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php the_sub_field('answer'); ?></p>
                                    </div>
                                  </div>
                                </div>
                                <?php 
                                $j++;
                            endwhile; ?>
                            <?php endif; ?>
                                

                              
                              </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq area end -->

        <!-- faq form start -->
        <section class="faq-form pt-110 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="faq-form-title-wrapper text-center">
                            <h3 class="faq-form-title"><?php the_field('contact_form_title');?></h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?php echo do_shortcode('[contact-form-7 id="207" title="Contact us"]');?>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq form end -->

        <!-- cta area start here -->
        <section class="cta-area mt--60 z-index" data-aos="fade-up">
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
        </section>
        <!-- cta area end here -->
    </main>



<?php get_footer(); ?>	