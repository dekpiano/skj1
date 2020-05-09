<section  class="content-area" style="padding-top: 159px;">
	
	
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
			<ol class="carousel-indicators">
				<?php foreach ($banner as $key => $v_banner) :?>
				<li data-target="#carouselExampleIndicators" data-slide-to="<?=$key;?>" class=""></li>			
				<?php endforeach; ?>
			</ol>
			<div class="carousel-inner">
				<?php foreach ($banner as $key => $v_banner) :?>
				<div class="carousel-item <?=$key==0 ? 'active' : ''?>">
					<a href="<?=$v_banner->banner_linkweb;?>">
					<img src="<?=base_url()?>uploads/banner/<?=$v_banner->banner_img;?>" class="d-block w-100" >
					</a>
				</div>
				<?php endforeach; ?>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	
</section> 