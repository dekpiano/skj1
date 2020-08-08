<section class="jumbotron text-center bg_headertitel">
    <div class="container">
        <h1>รูปภาพกิจกรรม</h1>
        <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

    </div>
</section>


<div class="container">
    <div class="card-columns">
        <?php foreach ($images as $key => $v_images) : ?>
        <div class="card "  >
            <a target="_blank" title="<?=$v_images->img_title;?>" href="<?=$v_images->img_link;?>">
                <div class="img-hover-zoom img-hover-zoom--basic">
                    <img loading="lazy" class="card-img-top " src="<?=base_url('uploads/images/').$v_images->img_mainpic;?>" alt="<?=$v_images->img_title;?>"
                    width="100%" height="225px">
                </div>
                <div class="card-body text-center">
                    <?=$v_images->img_title?>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
    </div>
</div>