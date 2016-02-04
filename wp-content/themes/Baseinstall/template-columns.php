<?php
/**
 * Template Name: Three Column Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="single-page container white-bg">
<section id="main-title" class="white-bg">
	<div class="container">
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
		$colored_para[$i]['image']
		);
} 
unset($i);
?>
</section>

<div class="white-bg container">
<?php 
$text_columns = get_field('text_columns'); ?>
<?php  for ($i=0; $i < sizeof($text_columns); $i++) {  ?>
    <section class="col-md-4">
    <div class="text-box">
      <?php echo $text_columns[$i]['paragraph'] ?>
      </div>
    </section>
<?php } ?>
</div>





<section class="col-md-4">
<!-- Repeater -->
	<h4></h4>
	<p></p>
</section>
<section class="col-md-4">
<!-- Repeater -->
	<h4></h4>
	<p></p>
</section>
<div class="container text-center">
	<a href="" class="btn pink"> Contact Bespoke Money</a>
</div>

<?php //includePart('components/organism-carosoul.php') ?>
</div>


<?php endwhile; ?>
