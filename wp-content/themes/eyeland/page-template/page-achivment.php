<?php
/**
 * Template Name: Achivment
 
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
            <h1 class="display-3 text-white mb-4 animated slideInDown">Our <?php the_title();?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                     <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page">Our <?php the_title();?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container-xxl py-5">
        <div class="container">
             <div class="row">
            <?php
            if( have_rows('achievements') ):
            
            
            while( have_rows('achievements') ) : the_row();
            
            $title = get_sub_field('achievements_title');
            $img = get_sub_field('achievements_image');
            
            ?>
       <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12">
       
          <img src="<?php echo 	$img['url'];?>" height="95%" alt="" style="width:100%"/>
       
      </div>
      
       <?php  endwhile; endif;?>
     
    </div>
        </div>
    </div>
<?php get_footer(); ?>
