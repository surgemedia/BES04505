<?php 
$title1 = $args[1];
$title2 = $args[2];
$title3 = $args[3];
$content1 = $args[4];
$content2 = $args[5];
$content3= $args[6];
$image =  aq_resize($args[7], 1920,350,true,true,true);
 ?>
<section class="container-fluid colored-para">
	<div class="row  ">
	
		<div class="col-md-8 grey-bg">
			<div class="col-md-6">
			<?php if(strlen($title1) > 0){ ?>
				<div class="text-box ">
					<h5><?php echo $title1  ?></h5>
					<?php } else {  ?>
				<div class="text-box fake-header">
					<?php } ?>
				<?php echo $content1  ?>
			</div>
		</div>

			<div class="col-md-6">
			<?php if(strlen($title2) > 0){ ?>
				<div class="text-box ">
					<h5><?php echo $title2  ?></h5>
					<?php } else {  ?>
				<div class="text-box fake-header">
					<?php } ?>
				<?php echo $content2  ?>
			</div>	</div>
		</div>
		<div class="col-md-4 pink-bg">
			<?php if(strlen($title3) > 0){ ?>
				<div class="text-box ">
					<h5><?php echo $title3  ?></h5>
					<?php } else {  ?>
				<div class="text-box fake-header">
					<?php } ?>
			<?php echo $content3  ?>
		</div>
		</div>

		<img class="img-responsive" src="<?php echo $image ?>" alt="">
	</div>

</section>