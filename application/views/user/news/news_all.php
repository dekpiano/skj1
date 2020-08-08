<main role="main">

    <section class="jumbotron text-center bg_headertitel">
        <div class="container">
            <h1>ข่าวประชาสัมพันธ์</h1>
            <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                <?php foreach ($news as $key => $v_news) : ?>
                <?php if($v_news->news_facebook !== ''): ?>

                <div class="col-md-6 col-sm-6  col-lg-4 mb-3  aos-animate" data-aos="zoom-in"
                    data-aos-delay="<?=$key?>00">
                    <div loading="lazy" class="fb-post" data-href="<?=$v_news->news_facebook;?>" data-width="100"  data-show-text="true"></div>
                </div>

                <?php else : ?>

                <div class="col-md-6 col-sm-6  col-lg-4 mb-3  aos-animate" data-aos="zoom-in"
                    data-aos-delay="<?=$key?>00">
                    <a href="<?=base_url('news/newsDetail/').$v_news->news_id;?>">
                        <div class="card mb-4 box-shadow h-100 overflow zoom ">
                            <?php if ($v_news->news_img == '') : ?>
                            <img loading="lazy" class="card-img-top" alt="Thumbnail [100%x225]"
                                style="height: 225px; width: 100%; display: block;"
                                src="<?=base_url('asset/user/img/banner_main.jpg')?>">
                            <?php else: ?>
                            <img loading="lazy" class="card-img-top"
                                src="<?=base_url('uploads/news/').$v_news->news_img;?>" width="100%" height="225px">
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
                <?php endif; ?>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

</main>