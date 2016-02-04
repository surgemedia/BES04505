<div id="carousel" class="carousel slide hidden-sm hidden-xs" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
<?php $slider = get_field('slider');
for ($i=0; $i < sizeof($slider); $i++) { ?>
<?php //debug(); ?>
<?php //debug($slider[$i]['content']); ?>

    <div class="item <?php if($i == 1){echo 'active';} ?>" style="background-image:url(<?php echo $slider[$i]['background_image']; ?>)">
     	<div class="hexogone">
     	
       <?php echo $slider[$i]['content'] ?>
      <div class="border-hexo"></div>
     	</div>
     	<a class="btn text" href="#">Find Out More</a>
    </div>
<?php } ?>
   </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="bespoke-icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="bespoke-icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>