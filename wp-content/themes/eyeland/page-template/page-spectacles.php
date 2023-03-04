<?php
/**
 * Template Name: Spectacles
 
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
                    
                    <li class="breadcrumb-item active" aria-current="page"> <?php the_title();?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container-xxl py-5">
        <div class="container">

             <div class="row">
            <p class="mb-4"><?php echo get_the_content();?></p>

                   <div class="accordion" id="accordionExample">
     <?php
                        $n=1;
                        if( have_rows('spectacles_qa') ):
                        
                        
                        while( have_rows('spectacles_qa') ) : the_row();
                        
                        $question = get_sub_field('squestion');
                       
                        $answer = get_sub_field('Sanswer');
                       
                          
                         ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading<?php echo $n;?>">
      <button class="accordion-button <?php if($n>1){ echo 'collapsed';} ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $n;?>" aria-expanded="<?php if($n==1){ echo 'true';}else{ echo 'false';}?>" aria-controls="collapse<?php echo $n;?>">
      <?php echo $question;?>
      </button>
    </h2>
    <div id="collapse<?php echo $n;?>" class="accordion-collapse collapse <?php if($n==1){ echo 'show';}?>" aria-labelledby="heading<?php echo $n;?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
           <?php echo $answer;?>
      </div>
    </div>
  </div>
  
    <?php $n++; endwhile; endif;?>

  
  
  
  
  
</div>
     
             </div>
        </div>
    </div>
<?php get_footer(); ?>
