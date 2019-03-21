<?php get_header(); ?>
<section>
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="<?php the_field('image_slid'); ?>" alt="Slider First Image"/>
            <?php
               if( have_rows('slider_top') ):
                while ( have_rows('slider_top') ) : the_row(); ?>
            <div class="carousel-caption d-none d-md-block">
               <h5><?php the_sub_field('title_slid'); ?></h5>
               <p><?php the_sub_field('sub_title_slid'); ?></p>
            </div>
            <?php 
               endwhile;
               endif; ?>
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
   <div class="container-fluid p-0">
      <div class="welcome_text">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="welcome_text_inner">
                     <h2>
                        <?php the_field('title_row'); ?>
                     </h2>
                     <div class="line_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/title_decore.svg" alt="Line"/>
                     </div>
                     <p>
                        <?php the_field('sub_title_row'); ?>
                     </p>
                     <p class="inner_text">
                        <?php the_field('content_row'); ?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid p-0">
      <div class="stratagtics">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="welcome_text_inner">
                     <h2>
                        <?php the_field('title_two'); ?>
                     </h2>
                     <div class="line_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/title_decore.svg" alt="Line"/>
                     </div>
                     <p><?php the_field('content_two'); ?></p>
                  </div>
               </div>
            </div>
            <div class="inner-points">
               <div class="row">
                  <?php
                     $d=0;
                     while ( have_rows('stratagtics_page') ) : the_row(); $d++ ?>
                  <?php if ($d % 2 == 1) {?>
                  <div class="col-md-6">
                     <div class="stratagtics_inner stratagtics_border">
                        <ul>
                           <li>
                              <span>
                              <?php the_sub_field('stratagtic_row'); ?>
                              </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <?php }else{ ?>
                  <div class="col-md-6">
                     <div class="stratagtics_inner">
                        <ul>
                           <li>
                              <span>
                              <?php the_sub_field('stratagtic_row'); ?>
                              </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <?php } ?>
                  <?php endwhile; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="welcome_text_inner">
                     <p><?php the_field('short_discription'); ?></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php
                  if( have_rows('services') ):
                  while ( have_rows('services') ) : the_row(); ?>
               <div class="col-md-4">
                  <div class="stratagtics_service">
                     <div class="front_img_service">
                        <img src="<?php the_sub_field('icon_img'); ?>" alt="Consulant Service">
                     </div>
                     <div class="stratagtics_service_text">
                        <h3>
                           <?php the_sub_field('title_serv'); ?>
                        </h3>
                        <div class="stratagtics_service_list">
                           <ul>
                              <?php
                                 if( have_rows('service_type') ):
                                 while ( have_rows('service_type') ) : the_row(); ?>
                              <li>
                                 <a><?php the_sub_field('label_service'); ?></a>
                              </li>
                              <?php endwhile; endif; ?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endwhile; endif; ?>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid p-0">
      <div class="Committed_Clients">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="welcome_text_inner">
                     <h2>
                        <?php the_field('title_four'); ?>
                     </h2>
                     <div class="line_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/title_decore.svg" alt="Line"/>
                     </div>
                     <?php the_field('discription'); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid p-0">
      <div class="contact_us">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="welcome_text_inner">
                     <h2>
                        <?php the_field('title_five'); ?>
                     </h2>
                     <div class="line_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/title_decore.svg" alt="Line"/>
                     </div>
                  </div>
                  <div class="contact_form">
                     <?php $cf_id = get_field( 'shortcode_cnt'); ?>
                     <?php echo do_shortcode($cf_id); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Middel Section-->
<?php get_footer(); ?>