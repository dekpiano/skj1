<section class="jumbotron text-center bg_headertitel mb-0">
    <div class="container">
        <h1>รูปภาพกิจกรรม</h1>
        <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

    </div>
</section>

<section class="section" style="background: #202c62;">
    <div class="container">
        <div class="card-columns">
            <?php foreach ($images as $key => $v_images) : ?>
            <div class="card aos-animate" data-aos="zoom-in" data-aos-delay="<?=$key?>00">
                <a target="_blank" title="<?=$v_images->img_title;?>" href="<?=$v_images->img_link;?>">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img class="card-img-top " src="<?=base_url('uploads/images/').$v_images->img_mainpic;?>"
                            alt="<?=$v_images->img_title;?>" style="width:100%">
                    </div>
                    <div class="card-body text-center">
                        <?=$v_images->img_title?>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
</section>