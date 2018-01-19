<?php 
/**
* Template Name: Blog Layout
*/
?>

<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
<?php if ( $wpb_all_query->have_posts() ) : ?>
 <section class="blog-layout-section">
    <div class="blog-layout-row">
        <h2>Our Stories</h2>
        <h3>Featured</h3>
        <div class="blog-post-card-wrapper">
        <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <div class="blog-post-card">
                        <div class="blog-post-content-wrapper">
                            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p> 
                        </div>
                        <div class="blog-post-media-wrapper">
                            <?php if (has_post_thumbnail() ) : ?>
                                <img src=<?php the_post_thumbnail(); ?>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endwhile; ?>
        <!-- end of the loop -->
        </div>
    </div>
</section> 
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>