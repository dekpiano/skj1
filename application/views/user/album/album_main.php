
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full center">
                    <div class="heading_main text_align_center">
                        <h2 class="text-center">
                            <span class="theme_color"><i class="fas fa-bullhorn"></i> รูปภาพกิจกรรม
                            </span>ทั้งหมด
                        </h2>
                        <p class="large">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="card-columns">
            <?php foreach ($images as $key => $v_images) : ?>
            <div class="card">
                <a target="_blank" title="<?=$v_images->img_title;?>" href="<?=$v_images->img_link;?>">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img class="card-img-top " src="<?=$v_images->img_mainpic;?>" alt="<?=$v_images->img_title;?>"
                            style="width:100%">
                    </div>
                    <div class="card-body text-center">
                        <?=$v_images->img_title?>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    
