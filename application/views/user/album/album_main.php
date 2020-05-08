<section id="portfolio" class="portfolio" style="background: #e9ebee;">
	<div class="container-fluid">
		<center> 
			<h1>รูปภาพกิจกรรมทั้งหมด</h1>
	    	<p>โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
		</center>
	   
	       
	    <div class="row portfolio-container">
	        <?php foreach ($images as $key => $v_images) : ?>
	          <div class="col-lg-2 col-md-6 portfolio-item filter-app wow fadeInUp">
	            <div class="portfolio-wrap">
	              <figure>
	                <img style="height: 250px;" src="<?=$v_images->img_mainpic;?>"  alt="<?=$v_images->img_title;?>">
	                <a href="<?=$v_images->img_mainpic;?>" data-gall="portfolioGallery" class="link-preview venobox" title="Preview"><i class="bx bx-plus"></i></a>
	                <a target="_blank" href="<?=$v_images->img_link;?>" class="link-details" title="More Details"><i class="bx bx-link"></i></a>

	              </figure>
	              	<div class="text-center" style="padding: 10px;">
	                  <a target="_blank" title="<?=$v_images->img_title;?>" href="<?=$v_images->img_link;?>">                    
	                    <?php if(strlen($v_images->img_title)>40){echo mb_substr($v_images->img_title,0,30).'...';}else{echo $v_images->img_title;}?>
	                  </a>
	                </div>
	            </div>
	          </div>
	        <?php endforeach; ?>
	    </div>
	</div>

</section>



