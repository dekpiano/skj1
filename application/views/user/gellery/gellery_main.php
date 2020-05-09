<section id="portfolio" class="">
    <div class="container ">
   
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