<?php
/**
 * Template Name: Home
 
 */

get_header();

if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/whyus.jpg';
endif;
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            
            
            <div class="carousel-inner">
                
                <?php
                        $n=1;
                        if( have_rows('home_slider') ):
                        
                        
                        while( have_rows('home_slider') ) : the_row();
                        
                        $slider = get_sub_field('slider_image');
                       
                       
                       
                          
                         ?>
                
                 <div class="carousel-item <?php if($n==1){ echo 'active';} ?>">
                    <img class="w-100" src="<?php echo $slider; ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                  <?php $n++; endwhile; endif;?>

                 
              
             
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex redCod">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-times text-primary textPink"></i>
                            </div>
                            <div class="ps-3 ">
                                <h4><?php echo get_field('hct')?></h4>
                                <span><?php echo get_field('no_hidden_cost_content')?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex redCod">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-users text-primary textPink"></i>
                            </div>
                            <div class="ps-3">
                                <h4><?php echo get_field('dedicated_team_title')?></h4>
                                <span><?php echo get_field('dedicated_team_content')?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex redCod">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone text-primary textPink"></i>
                            </div>
                            <div class="ps-3">
                                <h4><?php echo get_field('247_available_title')?></h4>
                                <span><?php echo get_field('247_available_content')?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Feature End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="<?php echo $bannerImage;?>">
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                   <?php the_content();?>
                 <a class="btn btn-primary custom-btn1 py-3 px-4" href="<?php echo get_page_link(13);?>">Explore More</a>
                </div>
                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-award fa-3x text-primary textPink mb-3"></i>
                               <h4><?php echo get_field('award_winning_title')?></h4>
                                <span><?php echo get_field('award_winning_content')?></span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-users fa-3x text-primary textPink mb-3"></i>
                               <h4><?php echo get_field('dedicated_team_title')?></h4>
                                <span><?php echo get_field('dedicated_team_content')?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/banner5.jpg">
        <div class="container py-5">
            <div class="row g-5">
               <h1 style="color:#fff !important;text-align:center"><?php echo get_field('information')?></h1>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    
                    <?php echo get_field('why_choose_us')?>
                <a class="btn btn-primary custom-btn1 py-3 px-4" href="<?php echo get_page_link(13);?>">More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-check fa-3x text-primary textPink"></i>
                                        </div>
                                        <h4 class="mb-0">100% Satisfaction</h4>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-users fa-3x text-primary textPink"></i>
                                        </div>
                                        <h4 class="mb-0">Dedicated Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <i class="fa fa-tools fa-3x text-primary textPink"></i>
                                </div>
                                <h4 class="mb-0">Modern Equipment</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


 


    <!-- Quote Start -->
    <div class="container-fluid quote my-5 py-5" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/banner1.jpg">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-5 text-center mb-5">Get A Free Quote</h1>
                        <?php echo do_shortcode('[contact-form-7 id="171" title="Free Quote"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary textPink"><?php echo get_field('logo_content')?></p>
              
            </div>
           
            <div class="slider-container">
    <ul class="controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
        <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
            <i class="fas fa-angle-left fa-5x"></i>
        </li>
        <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
            <i class="fas fa-angle-right fa-5x"></i>          
        </li>
    </ul>
    <div class="my-slider">
         <?php
                        if( have_rows('logo') ):
                        
                        
                        while( have_rows('logo') ) : the_row();
                        
                     
                       
                        $img = get_sub_field('logo_image');
                       
                          
                         ?>
        <div class="slider-item">
            <div class="card">                
               <img src=<?php echo $img;?>" height="121" width="236"/>
               
            </div>
        </div>
        
       <?php  endwhile; endif;?>
        
        
           </div>    
</div>

         
        </div>
    </div>
    <!-- Projects End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                
                <h1 class="display-5 mb-5">Our Team</h1>
            </div>
            <div class="row g-4">
                    <?php
                    $args = array(
                    'post_type' => 'page',
                    'post__in' => array(15)
                    );
                    $my_three_posts = new WP_Query( $args );
                    while ($my_three_posts -> have_posts()) : $my_three_posts -> the_post();
                        
                        if( have_rows('add_team') ):
                        
                        $n=1;
                        
                        while( have_rows('add_team') ) : the_row();
                        
                        $name = get_sub_field('name');
                        $deg = get_sub_field('designation');
                        $img = get_sub_field('profile_pic');
                        $fb = get_sub_field('facebook_link');
                        $tw = get_sub_field('twitter');
                        $ins = get_sub_field('instagram_link');
                          if($n<=3){
                         ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    
                    
                    <div class="team-item rounded">
                        <img class="img-fluid" src="<?php echo $img['url'];?>" alt="">
                        <div class="team-text">
                            <h4 class="mb-0"><?php echo  $name;?></h4>
                            <p class="text-primary"><?php echo  $deg;?></p>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle me-2" href="<?php echo $fb;?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href="<?php echo $tw;?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle me-2" href="<?php echo $ins;?>" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                 
                  
                
                
            </div>
             <?php  } $n++; endwhile; endif;  endwhile;?>
            </div>
            
        </div>
    </div>
    <p style="text-align:center;"><a class="btn btn-primary custom-btn1 py-3 px-4" href="<?php echo get_page_link(15);?>">View More</a></p>
  
<?php get_footer(); ?>
