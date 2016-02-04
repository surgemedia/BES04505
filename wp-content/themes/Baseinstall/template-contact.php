<?php
/**
 * Template Name: Contact 
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="single-page container white-bg">
<h1 class="text-center huge"><?php the_field('title'); ?></h1>
<div class=" text-box">
	<?php // the_content(); ?>
	<?php displayGravityForm(get_field('form')); ?>
	</div>
</div>
<section class="contact-details">
<h2 class="uppercase">Contact Details</h2>
	<?php 
$contact_details = get_field('contact_details','option'); ?>
<?php  for ($i=0; $i < sizeof($contact_details); $i++) {  ?>
	<div>
	    <h4><?php echo $contact_details[$i]['title']; ?></h4>
	    <p><?php echo $contact_details[$i]['text']; ?></p>
	</div>
<?php } ?>
</section>
<?php endwhile; ?>
