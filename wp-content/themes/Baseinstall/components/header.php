<header class="banner">
  <div class="container">
    <a class="brand col-md-3" href="<?= esc_url(home_url('/')); ?>">
<object class="pull-right" width="auto" height="300" data="<?php echo get_field('logo','options'); ?>"></object>
</a>
    <!-- <img src="" alt=""></a> -->
    <nav class="nav-primary col-md-8">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
       <small>
      <?php echo get_bloginfo('description','raw'); ?>
    </small>
    </nav>
   
  </div>
</header>
