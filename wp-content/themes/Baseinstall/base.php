<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<?php 

if(has_post_thumbnail()){
$page_bg = getFeaturedUrl();
} else {
 $page_bg =  get_field('default_background','options');
}


 ?>
<html <?php language_attributes(); ?> >
  <?php get_template_part('components/head'); ?>
  <body <?php body_class(); ?> style="background-image:url(<?php echo $page_bg ?>);">
  <?php unset($page_bg); ?>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('components/header');
    ?>
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->   
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('components/footer');
      wp_footer();
    ?>
  </body>
</html>
