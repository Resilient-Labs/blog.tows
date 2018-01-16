<div class="explore-collection-card"> 
    <div class="explore-collection-media-wrapper"> 
        <?php if (has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif ?>
    </div>
    <div class="explore-collection-content-wrapper">
        <?php if (get_the_title() ) : ?>
            <h4><?php the_title(); ?></h4>
        <?php endif ?>
        <?php if (get_the_content() ) : ?>
            <p><?php the_content(); ?></p>
        <?php endif ?>
        <a class="button" href="<?php the_permalink() ?>">Explore Topic</a>
    </div>
</div>