<?php
/**
 * Template Name: Contact Lenses
 
 */

get_header(); 

if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/comprehensive.jpg';
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
         
         <p><?php echo get_the_content();?></p>
         
         <div class="row">
            
                      <?php
                        if( have_rows('contactlenses') ):
                        
                        
                        while( have_rows('contactlenses') ) : the_row();
                        
                        $name = get_sub_field('lense_name');
                       
                        $img = get_sub_field('lense_image');
                       
                          
                         ?>
	        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6   wow fadeInUp" data-wow-delay="0.1s">
         <div class="team-item rounded"> <a href="javascript:void(0);"><img src="<?php echo $img;?>" alt=""></a> </div>
        <div class="team-txt">
          
          <h4 class="mb-3" align="center" style="padding:8px; color:<?php echo $name;?>"><?php echo $name;?></h4>
         
           
           </div>
      </div>
      
      <?php  endwhile; endif;?>
         
         
        </div>
        <div class="row">
            
 <div class="accordion" id="accordionExample">
       <?php
                        $n=1;
                        if( have_rows('why_contact_lenses') ):
                        
                        
                        while( have_rows('why_contact_lenses') ) : the_row();
                        
                        $question = get_sub_field('question');
                       
                        $answer = get_sub_field('answer');
                       
                          
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
