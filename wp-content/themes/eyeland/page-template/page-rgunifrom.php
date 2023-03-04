<?php
/**
 * Template Name: RG Uniforms
 
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
            <h1 class="display-3 text-white mb-4 animated slideInDown"><?php the_title();?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
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
               
            </div>
            <div class="row">
            <p class="mb-4"><?php echo get_the_content();?> </p>
            </div>
            <div class="row g-4">
                 <?php
						if( have_rows('uniforms') ):

					
						while( have_rows('uniforms') ) : the_row();

						$title = get_sub_field('uniforms_title');
						$img = get_sub_field('uniforms_image');
						
						?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="<?php echo 	$img['url'];?>" alt="">
                        <div class="team-text">
                            <h4 class="mb-0"><?php echo $title;?></h4>
                           
                        </div>
                    </div>
                </div>
             
                
                 <?php  endwhile; endif;?>
                
                
            </div>
        </div>
    </div>
    <!-- Team End -->
                      
                 

            
<?php get_footer(); ?>
