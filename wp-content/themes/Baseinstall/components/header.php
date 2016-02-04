<header class="banner">
  <div class="container">
    <a class="brand col-md-3 hidden-md hidden-sm hidden-xs" href="<?= esc_url(home_url('/')); ?>">
<object class="pull-right" width="auto" height="300" data="<?php echo get_field('logo','options'); ?>"></object>
</a>
    <!-- <img src="" alt=""></a> -->
    <nav class="nav-primary col-lg-8 col-md-12 col-sm-12 col-xs-12">
       <!-- Brand and toggle get grouped for better mobile display -->
    <div id="dropdown-toggle" class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand col-lg-3 col-md-8 hidden-lg " href="<?= esc_url(home_url('/')); ?>">
<object class="pull-right" width="auto" height="300" data="<?php echo get_field('logo','options'); ?>"></object>
</a>
    </div>
     <div class="collapse navbar-collapse" id="main-nav">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
      </div>
       <small class="hidden-md hidden-sm hidden-xs">
      <?php echo get_bloginfo('description','raw'); ?>
    </small>
    </nav>
   
  </div>
</header>
