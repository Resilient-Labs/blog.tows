<section class="generic-page-content-section">
    <div class="generic-page-content-row">
        <?php if (get_the_title()) : ?>
            <h1><?php the_title(); ?></h1>
        <? endif; ?>
        <?php the_content(); // will render the content placed in each WYSIWYG Editor ?>
    </div>
</section>