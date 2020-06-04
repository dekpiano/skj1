<section id="portfolio" class="section" >
    <div class="container " data-aos="fade-up" >
   
            <!--- หัวข้อ --->
            <div class="section ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full center">
                                <div class="heading_main text_align_center text-center">
                                    <h2><span class="theme_color">SKJ</span> Gellery</h2>
                                    <p class="large">สวนกุหลาบวิทยาลัย จิรประวัติ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!--- หัวข้อ --->

            <!-- เนื้อหา -->
           
                <div class="card-columns">
                    <?php foreach ($images as $key => $v_images) : ?>
                    <div class="card">
                        <a target="_blank" title="<?=$v_images->img_title;?>" href="<?=$v_images->img_link;?>">
                            <div class="img-hover-zoom img-hover-zoom--basic">
                                <img class="card-img-top " src="<?=$v_images->img_mainpic;?>"
                                    alt="<?=$v_images->img_title;?>" style="width:100%">
                            </div>
                            <div class="card-body text-center">
                                <?=$v_images->img_title?>
                                </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <center><a href="<?=base_url('Album');?>"
                        class=" btn btn-outline-secondary my-2 my-sm-0">รูปกิจกรรมทั้งหมด</a></center>
           
        
    </div>
</section>