<?php
/**
 * Template Name: Our Team
 
 */

get_header();
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

 ?>
   <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"> <?php the_title();?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                     <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page"> <?php the_title();?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    
    
      <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary"><?php the_title();?></p>
                <h1 class="display-5 mb-5"><?php echo get_the_content();?></h1>
            </div>
            <div class="row g-4">
                 <?php
                        if( have_rows('add_team') ):
                        
                        
                        while( have_rows('add_team') ) : the_row();
                        
                        $name = get_sub_field('name');
                        $deg = get_sub_field('designation');
                        $img = get_sub_field('profile_pic');
                        $fb = get_sub_field('facebook_link');
                        $tw = get_sub_field('twitter');
                        $ins = get_sub_field('instagram_link');
                          
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
             <?php  endwhile; endif;?>
            </div>
        </div>
    </div>
    <!-- Team End -->


   
<?php get_footer(); ?>
