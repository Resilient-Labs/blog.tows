<header class="header-compact">
  <nav class="header-compact-nav">
    <a class="header-compact-logo" href="<?= esc_url(home_url('/')); ?>">
    <img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" />
    </a>
    <?php $MainMenu = array('menu'=> 'Main Menu', 'container' => false,
        'container_class' => false, 'menu_class' => false, );
    wp_nav_menu($MainMenu);
    ?>
    <a class="header-compact-search" >
        <i class="fa fa-search" aria-hidden="true"></i>
    </a>
    <div class="header-compact-nav-mobile">
      
      <a class="header-compact-nav-icon" id="mobile-nav-icon">
        <span class="header-compact-nav-icon-line line-1"></span>
        <span class="header-compact-nav-icon-line line-2"></span>
        <span class="header-compact-nav-icon-line line-3"></span>
      </a>
      <div class="header-compact-nav-mobile-container">  
        <?php get_search_form(); ?>
        <?php $MainMenu = array('menu'=> 'Main Menu', 'container' => false,
          'container_class' => false, 'menu_class' => false, );
        wp_nav_menu($MainMenu);
        ?>
      </div>
    </div>
  </nav>
</header>
