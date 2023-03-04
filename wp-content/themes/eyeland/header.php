<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	
    <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/img/icon/favicon_ico.png">
    <!-- Favicon -->
   
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
	

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.3.11/tiny-slider.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?php bloginfo( 'template_url' ); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php bloginfo( 'template_url' ); ?>/css/style.css" rel="stylesheet">

   
	<?php wp_head(); ?>
	
   </head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span><?php echo get_field('hphone','option');?></span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span><?php echo get_field('hemail','option');?></span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                     <a class="btn btn-link text-light" href="<?php echo get_field('twittwe_link','option');?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-link text-light" href="<?php echo get_field('facebook_link','option');?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-link text-light" href="<?php echo get_field('youtube_link','option');?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-link text-light" href="<?php echo get_field('link','option');?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
  
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a class="navbar-brand d-flex align-items-center px-4 px-lg-5" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo['url'] = get_field('logo','option');?>" alt=""></a>
       
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="https://eyeland.co.in/" class="nav-item nav-link <?php if(is_front_page()){echo 'active';} ?>">Home</a>
                <a href="<?php echo get_page_link(13);?>" class="nav-item nav-link <?php if(is_page(13)){ echo 'active';}?>">Why Us</a>
                <a href="<?php echo get_page_link(15);?>" class="nav-item nav-link <?php if(is_page(15)){ echo 'active';}?>">Our Team</a>
               
                  <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                    <div class="dropdown-menu bg-light m-0">
                         <a href="<?php echo get_page_link(17);?>" class="dropdown-item">Spectacles</a>
                         <a href="<?php echo get_page_link(19);?>" class="dropdown-item">Sunglasses</a>
                         <a href="<?php echo get_page_link(21);?>" class="dropdown-item">Contact Lenses</a>
                        
                       

                    </div>
                </div>
                <a href="<?php echo get_page_link(23);?>" class="nav-item nav-link <?php if(is_page(23)){ echo 'active';}?>">Services</a>
                <a href="<?php echo get_page_link(25);?>" class="nav-item nav-link <?php if(is_page(25)){ echo 'active';}?>">Achievements</a>
             
                <a href="<?php echo get_page_link(27);?>" class="nav-item nav-link <?php if(is_page(27)){ echo 'active';}?>">Contact</a>
            </div>
            <a href="<?php echo get_page_link(38);?>" class="btn btn-primary py-4 px-lg-4 rounded-0  d-lg-block custom-btn1">RG Uniforms<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

	