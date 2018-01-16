<?php global $post; ?>
<?php
// Set up values for arguments of Query 
$args = array(
    'post_type' => 'page', 'posts_per_page' => -1, 'post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order'
 );

 $argsForChild = array(
    'post_type' => 'page', 'posts_per_page' => -1, 'post_parent' => $post->post_parent, 'order' => 'ASC', 'orderby' => 'menu_order'
 );

$parent = new WP_Query( $args );
$child = new WP_Query($argsForChild);

if ( $parent->have_posts() ) : ?>
    <?php // display only the links for the current page's children ?>
    <div class="sidebar-navigation">
        <a class="sidebar-navigation-link<?php if (is_page( get_the_title() )) echo ' active'; ?>" href="<?php echo get_permalink($post->post_parent); ?>">
            <h5><?php echo get_the_title( $post->post_parent ); ?></h5>
        </a>
        <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
        
            <a class="sidebar-navigation-link<?php if (is_page( get_the_title() )) echo ' active'; ?>" href="<?php the_permalink(); ?>">
                <h5><?php the_title(); ?></h5>
            </a>

        <?php endwhile; wp_reset_postdata(); ?>
    </div>

<?php else: ?> 

    <?php if ( $post->post_parent !== 0) :  ?>

        <?php if ( $child->have_posts() ) : ?>
            <div class="sidebar-navigation">
                <a class="sidebar-navigation-link" href="<?php echo get_permalink($post->post_parent); ?>">
                    <h5><?php echo get_the_title( $post->post_parent ); ?></h5>
                </a>
                <?php while ( $child->have_posts() ) : $child->the_post(); ?>
                    <a class="sidebar-navigation-link<?php if (is_page( get_the_title() )) echo ' active'; ?>" href="<?php the_permalink(); ?>">
                        <h5><?php the_title(); ?></h5>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>

    <?php endif; ?>

<?php endif; wp_reset_postdata(); ?>