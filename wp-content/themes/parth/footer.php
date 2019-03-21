<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package parth
*/
?>
<div class="container-fluid p-0">
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div class="footer-first-part">
                  <?php if( have_rows('footer_part_one','option') ): 
                     while( have_rows('footer_part_one','option') ): the_row(); ?>
                  <div>
                     <h3>
                        <?php the_sub_field('title_wgt','option') ?>
                     </h3>
                  </div>
                  <div>
                     <p>
                        <?php the_sub_field('address_wgt','option') ?>
                     </p>
                  </div>
                  <div>
                     <ul class="footer-li">
                        <?php if( have_rows('contact_info','option') ): 
                           while( have_rows('contact_info','option') ): the_row(); ?>
                        <li>
                           <?php 
                              $link = get_sub_field('label_wgt','option');
                              if( $link ): ?>
                           <a href="<?php echo $link['url']; ?>"><i class="fa <?php the_sub_field('icon_code','option') ?>" aria-hidden="true"></i>
                           <span>
                           <?php echo $link['title']; ?>
                           </span>
                           </a>
                           <?php endif; ?>
                        </li>
                        <?php endwhile; endif; ?>
                     </ul>
                  </div>
                  <?php endwhile; endif; ?>
               </div>
            </div>
            <div class="col-md-3">
               <div class="footer-second-part">
                  <?php if( have_rows('footer_part_two','option') ): 
                     while( have_rows('footer_part_two','option') ): the_row(); ?>
                  <div>
                     <p>
                        <?php the_sub_field('address_wgt_two','option') ?>
                     </p>
                  </div>
                  <div>
                     <ul class="footer-li">
                        <?php if( have_rows('contact_wgt_two','option') ): 
                           while( have_rows('contact_wgt_two','option') ): the_row(); ?>
                        <li>
                           <?php 
                              $links = get_sub_field('label_wgt_c','option');
                              if( $links ): ?>
                           <a href="<?php echo $links['url']; ?>"><i class="fa <?php the_sub_field('icon_code_c','option') ?>" aria-hidden="true"></i>
                           <span>
                           <?php echo $links['title']; ?>
                           </span>
                           </a>
                           <?php endif; ?>
                        </li>
                        <?php endwhile; endif; ?>
                     </ul>
                  </div>
                  <?php endwhile; endif; ?>
               </div>
            </div>
            <div class="col-md-3">
               <div class="footer-third-part">
                  <?php if( have_rows('footer_part_3','option') ): 
                     while( have_rows('footer_part_3','option') ): the_row(); ?>
                  <div>
                     <h3>
                        <?php the_sub_field('title_last','option') ?>
                     </h3>
                  </div>
                  <div>
                     <ul class="footer-li">
                        <?php if( have_rows('footer_menu','option') ): 
                           while( have_rows('footer_menu','option') ): the_row(); ?>
                        <li>
                           <?php 
                              $linke = get_sub_field('page_lk','option');
                              if( $linke ): ?>
                           <a href="<?php echo $linke['url']; ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span><?php echo $linke['title']; ?></span></a>
                           <?php endif; ?>
                        </li>
                        <?php endwhile; endif; ?>
                     </ul>
                  </div>
                  <?php endwhile; endif; ?>
               </div>
            </div>
            <div class="col-md-3">
               <div class="footer-fourth-part">
                  <?php if( have_rows('footer_part_4','option') ): 
                     while( have_rows('footer_part_4','option') ): the_row(); ?>
                  <div>
                     <h3>
                        <?php the_sub_field('title_four','option') ?>
                     </h3>
                  </div>
                  <div>
                     <?php 
                        $location = get_sub_field('gmap','option');
                        
                        if( !empty($location) ):
                        ?>
                     <div data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                     </div>
                     <?php endif; ?>
                     <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/marker-gps-sm_0.png" alt="Map Images"/></a> 
                  </div>
                  <?php endwhile; endif; ?>
               </div>
            </div>
         </div>
      </div>
      <div class="bottom-footer">
         <p>
            <?php the_field('copyright','option') ?>
         </p>
      </div>
   </footer>
</div>
<!--Footer Section-->
<?php wp_footer(); ?>
</body>
</html>