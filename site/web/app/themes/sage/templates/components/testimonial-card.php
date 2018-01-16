<?php // testimonials can be Repeater field with content field ?>
<?php if( have_rows('testimonials') ): ?>
    <section class="testimonial">
        <?php while( have_rows('testimonials') ): ?>
            <?php if (get_sub_field('content')): ?>
                <?php the_sub_field('content'); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    </section>
<?php endif; ?>