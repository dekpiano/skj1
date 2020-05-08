<section id="portfolio" class="portfolio" style="background: #e9ebee;">
	<div class="container">
		<center> 
			<h1>รูปภาพกิจกรรมทั้งหมด</h1>
	    	<p>โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
		</center>
	   
	       
	    <div class="row portfolio-container">
	        <?php foreach ($images as $key => $v_images) : ?>
	          <div class="col-lg-3 col-md-6 portfolio-item filter-app wow fadeInUp">
	            <div class="portfolio-wrap">
	              <figure>
	                <img style="height: 250px;" src="<?=$v_images->img_mainpic;?>"  alt="<?=$v_images->img_title;?>">
	                <a href="<?=$v_images->img_mainpic;?>" data-gall="portfolioGallery" class="link-preview venobox" title="Preview"><i class="bx bx-plus"></i></a>
	                <a target="_blank" href="<?=$v_images->img_link;?>" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
	              </figure>

	              <div class="portfolio-info">
	                <h4><a target="_blank" href="<?=$v_images->img_link;?>"><?=$v_images->img_title;?></a></h4>
	                <p><?=$v_images->img_date;?></p>
	              </div>
	            </div>
	          </div>
	        <?php endforeach; ?>
	    </div>
	</div>

</section>



