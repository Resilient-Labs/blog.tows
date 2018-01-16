<?php if ( have_posts() ) : // check if the Page or Post Type has data to show ?>
    <section class="template front layout">
        <?php while ( have_posts() ) : the_post(); // loop through the data ?>

        <?php if( have_rows('generic_layout') ): // check if the flexible content field has rows of data ?>
                <?php while ( have_rows('generic_layout') ) : the_row(); // loop through the rows of data ?>
                
                    <?php if( get_row_layout() == 'hero_banner_row_layout' ): // check if the page has information ?>
                        
                        <?php get_template_part('templates/layouts/hero-banner-row-layout'); ?>

                    <?php elseif ( get_row_layout() == 'media_row_layout'): // check if the page has information ?>
                        
                        <?php get_template_part('templates/layouts/media-row-layout'); ?>

                    <?php elseif ( get_row_layout() == 'media_cta_row_layout'): // check if the page has information ?>

                        <?php get_template_part('templates/layouts/media-cta-row-layout'); ?>
                    
                    <?php elseif ( get_row_layout() == 'explore_more_posts_cards_row_layout'): // check if the page has information ?>

                        <?php get_template_part('templates/layouts/explore-more-posts-card-row-layout'); ?>

                    <?php endif; // end layouts conditional ?>

                <?php endwhile; ?>
            <?php else : // no layouts found ?>
                <p>Nothing loaded</p>
            <?php endif; ?>

        <?php endwhile; ?>
    </section>
<?php endif; ?>