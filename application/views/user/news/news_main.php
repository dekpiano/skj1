<section id="activity" class="services section-bg">
    <div class="container pad-3">
        <div class="col-12">
            <!--- หัวข้อ --->
            <div class=" ">
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

            <style>
            /* Tablet */
            @media (min-width: 768px) {
                img.img_news {
                    height: 275px;
                }

                img.img_news_small {
                    height: 134px;
                }

                h2.post-title  {
                    font-size: 20px;
                }
                .hvrbox-text{
                    font-size: 12px;
                }
            }

            /* Laptop */
            @media (min-width: 1024px) {
                img.img_news {
                    height: 453px;
                }

                img.img_news_small {
                    height: 222px;
                }

                h2.post-title {
                    font-size: 26px;
                }

                .hvrbox-text{
                    font-size: 21px;
                }
            }

            /* โทรศัพท์ 55*/
            @media screen and (max-width: 576px) {
                h2.post-title {
                    font-size: 14px;
                }
            }

            
            </style>
            <!--Container-->
            <div class="container">
                <!--Start code-->
                <div class="row">
                    <div class="col-12">
                        <!--SECTION START-->
                        <section class="row">
                            <!--Start slider news-->
                            <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                                <div id="featured" class="carousel slide carousel" data-ride="carousel">
                                    <!--dots navigate-->
                                    <ol class="carousel-indicators top-indicator">
                                        <?php foreach ($news as $key => $v_news) : ?>
                                        <li data-target="#featured" data-slide-to="<?=$key?>"
                                            <?=($key == 0 ? 'class="active"'  : '' );?>></li>
                                        <?php endforeach; ?>
                                    </ol>

                                    <!--carousel inner-->
                                    <div class="carousel-inner">
                                        <!--Item slider-->
                                        <?php foreach ($news as $key => $v_news) : ?>
                                        <div class="carousel-item <?=$key == 0 ? 'active' : '' ?>">
                                            <div class="card border-0 rounded-0 text-light overflow zoom">
                                                <div class="position-relative hvrbox">
                                                    <!--thumbnail img-->
                                                    <div class="ratio_left-cover-1 image-wrapper">
                                                        <a href="<?=base_url('news/newsDetail/').$v_news->news_id;?>">
                                                            <?php if ($v_news->news_img == '') : ?>
                                                            <img class="card-img-top img_news"
                                                                alt="<?=$v_news->news_topic?>"
                                                                src="<?=base_url('asset/user/img/banner_main.jpg')?>">
                                                            <?php else: ?>
                                                            <img class="w-100 img_news"
                                                                src="<?=base_url('uploads/news/').$v_news->news_img;?>"
                                                                alt="<?=$v_news->news_topic?>">
                                                            <?php endif; ?>

                                                        </a>
                                                    </div>
                                                  
                                                        <!--title-->
                                                        <div class="hvrbox-layer_top">
                                                        <a href="<?=base_url('news/newsDetail/').$v_news->news_id;?>">
                                                            <h2 class="hvrbox-text post-title text-white my-1">
                                                                <?=$v_news->news_topic?></h2>
                                                        </a>
                                                        <!-- meta title -->
                                                        <div class="news-meta">
                                                            <span class="news-author"><i class="icofont-eye-alt">
                                                                    <?=$v_news->news_view;?></i></span>
                                                            <span
                                                                class="news-date"><?php echo $time_elapsed = $this->timeago->timeAgo_T($v_news->news_date); ?></span>
                                                        </div>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        <!--end item slider-->
                                    </div>
                                    <!--end carousel inner-->
                                </div>

                                <!--navigation-->
                                <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--End slider news-->

                            <!--Start box news-->
                            <div class="col-12 col-md-6 pt-1  mb-3 mb-lg-4">
                                <div class="row ">
                                    <!--news box-->
                                    <?php foreach ($news as $key => $v_news) : ?>


                                    <div class="col-12 col-md-6 p-1 hvrbox">
                                        <div class="card border-0 rounded-0 text-white overflow zoom ">
                                            <div class="position-relative ">
                                                <!--thumbnail img-->
                                                <div class="ratio_right-cover-2 image-wrapper">
                                                    <a href="<?=base_url('news/newsDetail/').$v_news->news_id;?>">
                                                        <?php if ($v_news->news_img == '') : ?>
                                                        <img class="card-img-top img_news_small hvrbox-layer_bottom"
                                                            alt="<?=$v_news->news_topic?>"
                                                            src="<?=base_url('asset/user/img/banner_main.jpg')?>">
                                                        <?php else: ?>
                                                        <img class="w-100 img_news_small hvrbox-layer_bottom"
                                                            src="<?=base_url('uploads/news/').$v_news->news_img;?>"
                                                            alt="<?=$v_news->news_topic?>">
                                                        <?php endif; ?>

                                                    </a>
                                                </div>

                                                <!-- category -->

                                                <div class="hvrbox-layer_top">
                                                    <a class="p-1 badge badge-primary rounded-0"
                                                        href="<?=base_url('news/newsDetail/').$v_news->news_id;?>"><?=$v_news->news_category?>
                                                    </a>

                                                    <!--title-->
                                                    <a href="<?=base_url('news/newsDetail/').$v_news->news_id;?>">
                                                        <h5 class="hvrbox-text text-white my-1">
                                                            <?=$v_news->news_topic?></h5>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <!--end news box-->
                                </div>
                            </div>
                            <!--End box news-->
                        </section>
                        <!--END SECTION-->
                    </div>
                </div>
                <!--end code-->
            </div>

            <center><a href="<?=base_url('news/all')?>"
                    class=" btn btn-outline-secondary my-2 my-sm-0">ข่าวสารทั้งหมด</a></center>
        </div>
    </div>
</section>