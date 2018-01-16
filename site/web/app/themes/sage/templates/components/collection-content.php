<?php $posts = get_field('collections'); ?>
<?php if( $posts ): ?> 
    <section class="collection-section"> 
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <div class="collection-row">
                    <?php setup_postdata($post); ?>

                    <div class="collection-media-wrapper">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif ?>
                    </div>
                    <div class="collection-content-wrapper">
                        <h4><?php the_title(); ?></h4>
                        <?php if (get_the_content() ): ?>
                            <p><?php echo wp_trim_words( get_the_content(), 28, '...' ); ?></p>
                        <?php elseif (get_field('details')) : ?>
                            <p><?php the_field('details'); ?></p>
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php if ('audios' == get_post_type() ): ?>
                                Listen
                            <?php elseif ('videos' == get_post_type() ): ?>
                                Watch Video
                            <?php elseif ('post' == get_post_type() ): ?>
                                Read Article
                            <?php endif; ?>
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>
    </section>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>