<div class="shop-item-card">
    <?php if (has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
    <?php endif ?>
    <?php if (get_the_title() ) : ?>
        <h4><?php the_title(); ?></h4>
    <?php endif ?>
    <?php if (get_the_content() ) : ?>
        <p><?php the_content(); ?></p>
    <?php endif ?>
    <div class="shop-item-card-purchase-links"> 
        <label class="shop-item-card-purchase-labels"> 
        Purchase: 
        </label>
        <?php if (have_rows('links') ): // check if the repeater field named Audio List has rows of data ?>
            <?php while ( have_rows('links') ) : the_row(); // loop through the rows of data ?>
                <?php if (get_sub_field('purchase_links')) : ?>
                    <a class="button" href="<?php echo get_sub_field('purchase_links')['url']; ?>">
                        <?php echo get_sub_field('purchase_links')['title']; ?>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>