<header class="banner">
  <div class="container">
    <nav class="nav-primary menu">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav','menu_id' => 'left-menu']);
      endif;
      ?>
    </nav>
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri() . '/dist/images/soif-logo.svg';?>" /></a>
    <nav class="nav-secondary">
      <?php if (has_nav_menu('secondary_navigation')) :
        wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav','menu_id' => 'right-menu']);
      endif;
      ?>
    </nav>
  </div>
</header>