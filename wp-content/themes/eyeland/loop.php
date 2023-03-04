<?php
/**
 * The loop that displays posts
 *
 * The loop displays the posts and the post content. See
 * https://codex.wordpress.org/The_Loop to understand it and
 * https://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>


<?php 
while ( have_posts() ) : the_post(); 
$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
?>
  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="our_blog_box">
                        <div class="our_blogImg"><img src="<?php echo $image[0];?>" alt="blog image" title="" /></div>
                        <a href="<?php the_permalink();?>" class="link"><?php the_title();?></a>
                        <div class="time_parson">
                            <ul>
                                <li><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon1.png"></span><?php echo get_the_date('F m Y'); ?></li>
                                <li><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon2.png"></span>Posted by <?php echo get_the_author(); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
               

<?php endwhile; // End the loop. Whew. ?>

