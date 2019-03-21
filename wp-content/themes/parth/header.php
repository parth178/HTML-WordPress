<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package parth
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
      <!--meta Tag Description-->
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--meta Tag Description-->
      <!--Page Title Description-->
      <title><?php wp_title(); ?></title>
      <!--Page Title Description-->
      <!--Font Description-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700,700i,800" rel="stylesheet">
      <!--Font Description-->
      <!--Fevicon Icon Start-->
      <link rel="icon" href="<?php the_field('favicon_site','option'); ?>" type="image/x-icon">
      <!--Fevicon Icon End-->
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <div class="container-fluid p-0">
         <header>
            <nav>
               <div class="top_head">
                  <div class="container">
                     <ul class="nav justify-content-end">
                        <?php if( have_rows('top_menu','option') ): 
                           while( have_rows('top_menu','option') ): the_row(); ?>
                        <li class="nav-item">
                           <a class="nav-link" href="tel:<?php the_sub_field('mobile_cnt','option'); ?>"><i class="fa fa-mobile" aria-hidden="true"></i><span><?php the_sub_field('mobile_cnt','option'); ?></span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="tel:<?php the_sub_field('phone_cnt','option'); ?>"><i class="fa fa-phone" aria-hidden="true"></i><span><?php the_sub_field('phone_cnt','option'); ?></span> </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link active" href="mailto:?php the_sub_field('email_cnt','option'); ?>"><i class="fas fa-envelope"></i><span><?php the_sub_field('email_cnt','option'); ?></span></a>
                        </li>
                        <?php endwhile; endif; ?>
                     </ul>
                  </div>
               </div>
            </nav>
            <div class="bottom_head">
               <div class="container">
                  <nav class="navbar navbar-expand-lg p-0">
                     <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                     <img src="<?php the_field('logo_site','option') ?>" alt="Logo" width="155px;">
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php 
                           wp_nav_menu( array(
                               'theme' => 'tmenu',
                               'menu_class' => 'navbar-nav ml-auto justify-content-end header_li',
                               'container' => 'false'
                           ) ); ?>
                        <div>
                           <form class="form-inline my-2 my-lg-0 custom_searchbox">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <i class="fas fa-search"></i>
                           </form>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
            </nav>
         </header>
      </div>