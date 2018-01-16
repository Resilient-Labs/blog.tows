<section class="footer-footnote-section">
    <div class="footer-footnote-row">
        <?php
        $args = array(
            'menu_class' => 'footer-footnote-nav-wrapper', 
            'container' => false,
            'container_class' => 'delete-me',
            'items_wrap' => '<nav id="%1$s" class="footer-footnote-nav-wrapper">%3$s</nav>'
        );
        wp_nav_menu($args);
        ?>
        <small class="footer-footnote-text">
            <span>Designed and Developed by 
                <a href="http://www.resilientcoders.org" class="resilient-coders" target="_blank">Resilient Coders</a>
            </span>
            <span>
                &copy; <?php echo date("Y"); ?> <?php echo bloginfo($show = 'name'); ?>
            </span>
        </small>
    </div>
</section>