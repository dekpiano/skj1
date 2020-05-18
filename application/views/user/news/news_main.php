<section id="activity" class="services section-bg">
    <div class="container pad-3">
        <div class="col-12">
            <!--- หัวข้อ --->
            <div class="section ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full center">
                                <div class="heading_main text_align_center text-center">
                                    <h2><span class="theme_color">ประชาสัมพันธ์</span> กิจกรรม</h2>
                                    <p class="large">สวนกุหลาบวิทยาลัย จิรประวัติ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--- หัวข้อ --->
            <div class="row">
                <?php foreach ($news as $key => $v_news) : ?>

                <div class="col-md-6 col-sm-6  col-lg-4 mb-3 animated fadeInUp">
                    <a href="<?=base_url('news/newsDetail/').$v_news->news_id;?>">
                        <div class="card mb-4 box-shadow h-100">
                            <?php if ($v_news->news_img == '') : ?>
                            <img class="card-img-top"
                                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                                src="<?=base_url('asset/user/img/banner_main.jpg')?>" >
                            <?php else: ?>
                            <img class="card-img-top" src="<?=base_url('uploads/news/').$v_news->news_img;?>"
                                style="height: 225px; width: 100%; display: block;">
                            <?php endif; ?>
                            <div class="card-body">
                                <h4><?=$v_news->news_topic?></h4>
                                <!--  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"> <i
                                                class="icofont-eye-alt"> <?=$v_news->news_view;?></i></button>
                                        <button type="button"
                                            class="btn btn-sm btn-outline-secondary"><?=$v_news->news_category;?></button>
                                    </div>
                                    <small
                                        class="text-muted"><?php echo $time_elapsed = $this->timeago->timeAgo_T($v_news->news_date); ?></small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>