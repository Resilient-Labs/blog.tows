<?php $recent_posts = wp_get_recent_posts(array('post_type'=>'collections', 'posts_per_page' => 4,)); ?>
<section class="explore-next-section">
  <div class="explore-next-row">
    <h2 class="title">What do you want to explore next?</h2>
    <?php foreach( $recent_posts as $recent ) : ?>

      <div class="explore-next-card">
        <h4><?php echo $recent["post_title"]; ?></h4>
        <p><?php echo $recent["post_content"]; ?></p>
        <a href="<?php echo get_permalink($recent["ID"]) ; ?>">Explore More </a>
      </div>

    <?php endforeach ?>
  </div>
</section>
<?php wp_reset_postdata(); ?>