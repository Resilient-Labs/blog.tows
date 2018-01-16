<section class="hero-banner-section">
    <div class="hero-banner-section-row">
        <div class="hero-banner-media-wrapper">
            <div class="hero-banner-overlay"></div>
            <?php if (get_sub_field('image')) : ?>
                <img src="<?php the_sub_field('image')?>" />
            <?php elseif (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php elseif (get_sub_field('video')) : ?>

            <?php
            $iframe = get_sub_field('video'); // get iframe HTML

            // use preg_match to find iframe src
            preg_match('/src="(.+?)"/', $iframe, $matches);
            $src = $matches[1];

            // add extra params to iframe src
            $params = array(
                'controls'    => 0,
                'showinfo' => 0,
                'hd'        => 1,
                'autohide'    => 1,
                'autoplay' => 1,
                'loop' => 1,
                'mute' => 1,
            );

            $new_src = add_query_arg($params, $src);
            $iframe = str_replace($src, $new_src, $iframe);

            $attributes = 'frameborder="0"'; // add extra attributes to iframe html

            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

            echo $iframe;
            ?>
            <?php endif; ?>
        </div>
        <div class="hero-banner-content-wrapper">
            <?php if (get_sub_field('content')) : ?>
                <?php the_sub_field('content'); ?>
            <?php endif; ?>
        </div>
    </div>
</section>


