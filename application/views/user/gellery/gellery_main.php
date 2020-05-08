<section id="portfolio" class="portfolio">
	<div class="container pad-3">
		<div class="col-12">
			<!--- หัวข้อ --->
			<div id="topic" class="row">
				<div class="centered ex-bl">
					<div class="text-block">
						SKJ Gellery
					</div>
				</div>
				<div>
					<img id="img_topic" src="<?=base_url()?>asset/user/img/b1.png">
				</div>
			</div>
			<!--- หัวข้อ --->
			
			<!-- เนื้อหา -->		
			<div class="container">
        

        <div class="row portfolio-container">

          <?php foreach ($images as $key => $v_images) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
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
        <center><a href="<?=base_url('Album');?>" class=" btn btn-outline-secondary my-2 my-sm-0">รูปกิจกรรมทั้งหมด</a></center>
      </div>
</section>