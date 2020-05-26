<section id="" class="services section-bg">
    <div class="container pad-3">
        <div class="col-12">
            <!--- หัวข้อ --->           
                
           

            <style>
            /* Tablet */
            @media (min-width: 768px) {
                img.img_news {
                    height: 275px;
                }

                img.img_news_small {
                    height: 134px;
                }

                h2.post-title {
                    font-size: 20px;
                }

                .hvrbox-text {
                    font-size: 12px;
                }

                .breaking-caret:after {
                    content: "";
                    width: 0;
                    height: 0;
                    border-top: 20px solid transparent;
                    border-left: 15px solid #007bff;
                    border-bottom: 20px solid transparent;
                    position: absolute;
                    right: -15px;
                    top: 0;
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

                .hvrbox-text {
                    font-size: 21px;
                }
            }

            /* โทรศัพท์ 55*/
            @media screen and (max-width: 576px) {
                h2.post-title {
                    font-size: 14px;
                }
            }

            .navigation-box {
                top: .4rem;
                right: .8rem;
                width: 2rem;
                position: absolute;
            }
            </style>
            <!--Container-->
            <div class="col-12 py-4 ">
                <div class="row">
                    <!--Breaking box-->
                    <div class="col-md-3 col-lg-2 pr-md-0">
                        <div class="p-2 bg-primary text-white text-center breaking-caret"><span
                                class="font-weight-bold"><i class="icofont-mega-phone"></i> ข่าวด่วน</span></div>
                    </div>
                    <!--end breaking box-->
                    <!--Breaking content-->
                    <div class="col-md-9 col-lg-10 pl-md-4 py-2">
                        <div class="breaking-box">
                            <div id="carouselbreaking" class="carousel slide" data-ride="carousel">
                                <!--breaking news-->
                                <div class="carousel-inner" style="font-size: 20px;">
                                    <!--post-->
                                    
                                    <div class="carousel-item active">
                                        <a href="http://admission.skj.ac.th/"><span
                                                class="position-relative mx-2 badge badge-primary rounded-0">ประชาสัมพันธ์</span></a>
                                        <a class=""
                                            href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">ประกาศรายชื่อผู้มีสิทธิ์สอบคัดเลือกเข้าศึกษาชั้นมัธยมศึกษาปีที่ 1 และ 4 ทั้ง 2 รอบ </a>
                                    </div>
                                    <div class="carousel-item ">
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"><span
                                                class="position-relative mx-2 badge badge-primary rounded-0">ประชาสัมพันธ์</span></a>
                                        <a class=""
                                            href="http://admission.skj.ac.th/">สำหรับนักเรียนที่สมัคร ผู้ใดยังไม่สามารถพิมพ์สมัครได้ ให้ตรวจสอบได้ ในขณะนี้</a>
                                    </div>
                                   
                                    
                                </div>
                                <!--end breaking news-->

                                <!--navigation slider-->
                                <div class="navigation-box p-2 d-none d-sm-block">
                                    <!--nav left-->
                                    <a class="carousel-control-prev text-primary" href="#carouselbreaking" role="button"
                                        data-slide="prev">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <!--nav right-->
                                    <a class="carousel-control-next text-primary" href="#carouselbreaking" role="button"
                                        data-slide="next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!--end navigation slider-->
                            </div>
                        </div>
                    </div>
                    <!--end breaking content-->
                </div>
            </div>

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


                                <div class="col-6 col-md-6 p-1 hvrbox">
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


            <center><a href="<?=base_url('news/all')?>"
                    class=" btn btn-outline-secondary my-2 my-sm-0">ข่าวสารทั้งหมด</a></center>
        </div>
    </div>
</section>