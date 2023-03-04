 <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Contact info</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo get_field('address','option');?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo get_field('phone','option');?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo get_field('email','option');?></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="<?php echo get_field('twittwe_link','option');?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="<?php echo get_field('facebook_link','option');?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="<?php echo get_field('youtube_link','option');?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="<?php echo get_field('link','option');?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Products & Services</h4>
                    <a href="<?php echo get_page_link(17)?>" class="btn btn-link">Spectacles</a>
                    <a href="<?php echo get_page_link(19)?>" class="btn btn-link">Sunglasses</a>
                    <a href="<?php echo get_page_link(21)?>" class="btn btn-link">Contact Lenses</a>
                    <a href="<?php echo get_page_link(23)?>" class="btn btn-link">Services</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="<?php echo get_page_link(11)?>">Home</a>
                    <a class="btn btn-link" href="<?php echo get_page_link(13)?>">Why Us</a>
                    <a class="btn btn-link" href="<?php echo get_page_link(15)?>">Our Team</a>
                    <a class="btn btn-link" href="<?php echo get_page_link(25)?>">Our Achievements</a>
                    <a class="btn btn-link" href="<?php echo get_page_link(27)?>">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Buy Online</h4>
                    <p><?php echo get_field('buy_online_text','option');?></p>
                    <div class="position-relative w-100">
                        <p>
                            <!--<a href="http://www.amazon.in/s/ref=sr_nr_seeall_1?rh=k%3Aeyeland+sunglass%2Ci%3Aapparel&amp;keywords=eyeland+sunglass&amp;ie=UTF8&amp;qid=1453641971" target="_blank"><img src="https://web.archive.org/web/20191227082815im_/http://eyeland.co.in/wp-content/themes/eyeland/images/Amazon-logo.jpg" alt="" height="26" width="92"></a>-->&nbsp;
                        <a href="<?php echo get_field('flipcart_link','option');?>" target="_blank"><img src="https://eyeland.co.in/wp-content/uploads/2023/01/flipcart.jpg" alt="" height="26" width="92"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; 2023 Eyeland  All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Developed By <strong><a class="border-bottom mks" href="https://.www.mkstechnosoft.com" target="_blank" >MKS Technosoft</a> </strong>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary custom-btn1 btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.3.11/min/tiny-slider.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/lib/wow/wow.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/lib/easing/easing.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/lib/counterup/counterup.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/lib/parallax/parallax.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/lib/isotope/isotope.pkgd.min.js"></script>
  
    <!-- Template Javascript -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
  
</html>
