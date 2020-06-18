<section id="" class=" section section-bg">
    <div class="container pad-3">
        <?php 
$cowid19 =file_get_contents('https://covid19.th-stat.com/api/open/today');
    $users=json_decode($cowid19);
?>

        <div class="col-12">
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

            <!-- Countdown 1-->
            <div class="rounded bg-gradient-1 text-white shadow text-center mb-5">
                <p class=" font-weight-bold text-uppercase h2">เปิดภาคเรียนที่ 1 ปีการศึกษา 2563 </p>
                <div id="clock-b" class="countdown-circles d-flex flex-wrap justify-content-center pt-4"></div>
            </div>

            <div class="col-12 py-4 ">
                <div class="row">

                    <div class="col-md-3 col-lg-2 pr-md-0">
                        <div class="p-2 bg-primary text-white text-center breaking-caret"><span
                                class="font-weight-bold"><i class="icofont-mega-phone"></i> ข่าวด่วน</span></div>
                    </div>

                    <div class="col-md-9 col-lg-10 pl-md-4 py-2">
                        <div class="breaking-box">
                            <div id="carouselbreaking" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner" style="font-size: 20px;">
                                    <div class="carousel-item active">
                                        <a href="http://admission.skj.ac.th/">
                                            <span
                                                class="position-relative mx-2 badge badge-primary rounded-0">ประชาสัมพันธ์</span></a>
                                        <a class=""
                                            href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">เปิดภาคเรียนวันที่
                                            1 กรกฎาคม 2563
                                        </a>
                                    </div>
                                    <div class="carousel-item ">
                                        <a href="http://admission.skj.ac.th/">
                                            <span
                                                class="position-relative mx-2 badge badge-primary rounded-0">ประชาสัมพันธ์</span></a>
                                        <a class=""
                                            href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">รายงานตัวเพื่อเข้าเรียน
                                            6-7 มิถุนายน 2563
                                        </a>
                                    </div>
                                </div>

                                <div class="navigation-box p-2 d-none d-sm-block">

                                    <a class="carousel-control-prev text-primary" href="#carouselbreaking" role="button"
                                        data-slide="prev">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>

                                    <a class="carousel-control-next text-primary" href="#carouselbreaking" role="button"
                                        data-slide="next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--Start code-->
            <div class="row " data-aos="zoom-in">
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

<?php $this->load->view('user/documents/documents_main.php'); ?>

<section id="" class="section bg-dark">
    <div class="  text-white   " data-aos="fade-down">
        <div class="container pad-3">
            <div class="row">
                <div class="col-md-6 px-2 align-self-center">
                    <img src="<?=base_url('asset/user/img/covid.png');?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 px-2 align-self-center">
                    <h1 class="display-5 text-white">รายงานสถานการณ์ โควิด-19</h1>
                    <div class="list-group">

                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            ติดเชื้อสะสม <small>[เพิ่มขึ้น <?=$users->NewConfirmed;?>]</small>
                            <span class="badge badge-primary badge-pill"><?=number_format($users->Confirmed);?></span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            หายแล้ว <small>[เพิ่มขึ้น <?=$users->NewRecovered;?>]</small>
                            <span class="badge badge-primary badge-pill"><?=number_format($users->Recovered);?></span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            รักษาอยู่ใน รพ.
                            <span
                                class="badge badge-primary badge-pill"><?=number_format($users->Hospitalized);?></span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            เสียชีวิต
                            <span class="badge badge-primary badge-pill"><?=number_format($users->Deaths);?></span>
                        </a>

                    </div>

                    <div class="text-center display-6">อัพเดทข้อมูลล่าสุด <?=$users->UpdateDate;?></div>
                </div>
            </div>
        </div>
    </div>
</section>