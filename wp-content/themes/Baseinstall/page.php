<?php while (have_posts()) : the_post(); ?>

<div class="single-page container white-bg">
<section id="main-title" class="white-bg no-padding">
	<div class="container">
  <div class="text-box">
  		<!-- <h4 class="text-center uppercase thin">Bespoke Money</h4> -->
  		<h2 class="text-center"><?php the_field('title') ?></h2>
    </div>
	</div>
</section>
	<div class=" text-box">
		<?php the_content(); ?>
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
