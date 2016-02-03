<?php
/**
 * Template Name: Home
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="container-fluid">
	
	<div class="jumbotron ">
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
		$colored_para[$i]['image']
		);
} 
unset($i);
?>
</section>

<div class="white-bg container-fluid">
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

<div id="carousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="..." alt="...">
     	<div class="hexogone">
     		<p>
        Bespoke Money
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea earum porro quis eveniet magni in, 
        aspernatur commodi, ad a voluptatibus quas tempora totam fugit? Provident magni vero est,
        temporibus officia.
        </p>
     	</div>
     	<a href="#">Find Out More</a>
    </div>

     <div class="item">
      <img src="..." alt="...">
     	<div class="hexogone">
      <p>
     		Bespoke Money
     		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea earum porro quis eveniet magni in, 
     		aspernatur commodi, ad a voluptatibus quas tempora totam fugit? Provident magni vero est,
     		temporibus officia.
        </p>
     	</div>
     	<a href="#">Find Out More</a>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<?php endwhile; ?>
