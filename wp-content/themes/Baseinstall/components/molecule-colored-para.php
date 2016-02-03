<?php 
$title1 = $args[1];
$title2 = $args[2];
$title3 = $args[3];
$content1 = $args[4];
$content2 = $args[5];
$content3= $args[6];
$image = $args[7];



 ?>

<section class="container-fluid colored-para">
	<div class="row  ">
	
		<div class="col-md-8 grey-bg">
			<div class="col-md-6">
			<div class="text-box ">
				<h5><?php echo $title1  ?></h5>
				<p><?php echo $content1  ?></p>
			</div>
		</div>

			<div class="col-md-6">
			<div class="text-box ">
				<h5><?php echo $title2  ?></h5>
				<p><?php echo $content2  ?></p>
			</div>	</div>
		</div>
		<div class="col-md-4 pink-bg">
		<div class="text-box ">
			<h5><?php echo $title3  ?></h5>
			<p><?php echo $content3  ?></p>
		</div>
		</div>
		<img src="<?php echo $image ?>" alt="">
	</div>

</section>