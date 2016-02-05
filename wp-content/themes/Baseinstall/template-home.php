<?php
/**
 * Template Name: Home
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="container-fluid">
	
	<div class="jumbotron">
		<h1><?php the_field('jumbotron_title') ?></h1>
		<a class="btn text" href="<?php the_field('link_location') ?>"><?php the_field('link_text') ?></a>
	</div>
</div>
<section id="main-title" class="white-bg">
	<div class="container-fluid">
  <div class="text-box">
  		<h4 class="text-center uppercase thin">Bespoke Money</h4>
  		<h2 class="text-center uppercase"><?php the_field('title') ?></h2>
    </div>
	</div>
</section>

<section id="services" class="white-bg content">
<?php 
$colored_para = get_field('colored_para');
for ($i=0; $i < sizeof($colored_para); $i++) { 
	//debug($colored_para[$i]);
	includePart(
		'components/molecule-colored-para.php',
		$colored_para[$i]['subtitleOne'],
		$colored_para[$i]['subtitleTwo'],
		$colored_para[$i]['subtitleThree'],
		$colored_para[$i]['column_one'],
		$colored_para[$i]['column_two'],
		$colored_para[$i]['column_three'],
		$colored_para[$i]['image'],
		$colored_para[$i]['image_title']

		);
} 
unset($i);
?>
</section>

<div class="white-bg container-fluid">
<?php 
$text_columns = get_field('text_columns'); ?>
<?php  for ($i=0; $i < sizeof($text_columns); $i++) {  ?>
    <section class="col-md-4 col-sm-12">
    <div class="text-box">
      <?php echo $text_columns[$i]['paragraph'] ?>
      </div>
    </section>
<?php } ?>
</div>
<div class="container text-center">
	<a href="<?php the_field('call_to_action_link') ?>" class="btn pink"> <?php the_field('call_to_action') ?></a>
</div>

<?php includePart('components/organism-carosoul.php') ?>



<?php endwhile; ?>
