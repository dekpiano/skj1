<style>
@media (max-width: 575.98px) {
    .card-columns {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
    }
}

@media (min-width: 768px) and (max-width: 991.98px) {
    .card-columns {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;
    }
}

@media (min-width: 1366px) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
    }
}
</style>
<section id="" class=" section section-bg">
    <div class="container ">
        <?php
        $cowid19 = @file_get_contents(
            'https://covid19.th-stat.com/api/open/today'
        );
        $users = json_decode($cowid19);
        ?>

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


            <!-- ข่าวด่วน -->
            <!-- <?php $this->load->view('user/news/news_breaking.php'); ?> -->


            <!--Start code-->
            <div class=" " data-aos="zoom-in">

                <div class="album ">
                    <div class="section-title">
                        <h2>SKJ ประชาสัมพันธ์</h2>
                    </div>
                    <div class=" " data-aos="fade-down">
                        <div class="row">                           
                                <?php foreach ($news as $key => $v_news): ?>
                                <?php if ($v_news->news_facebook !== ''): ?>

                                <div class="mb-2">
                                    <div loading="lazy" class="fb-post" data-href="<?= $v_news->news_facebook ?>"
                                        data-width="100%" data-show-text="true"></div>
                                </div>

                                <?php else: ?>

                                <div class="col-md-6 mb-2 col-lg-4 ">
                                    <a href="<?= base_url('news/newsDetail/') .
                                    $v_news->news_id ?>">
                                        <div class="card box-shadow h-100 overflow zoom ">
                                            <?php if ($v_news->news_img == ''): ?>
                                            <img loading="lazy" class="card-img-top" alt="Thumbnail [100%x225]"
                                                style="height: 225px; width: 100%; display: block;" src="<?= base_url(
                                                'asset/user/img/banner_main.jpg'
                                            ) ?>">
                                            <?php else: ?>
                                            <img loading="lazy" class="card-img-top" src="<?= base_url(
                                            'uploads/news/'
                                        ) .
                                            $v_news->news_img ?>" style="object-fit: cover;" height="225px">
                                            <?php endif; ?>
                                            <div class="card-body">
                                                <h5 class="text-overflow"><?= $v_news->news_topic ?></h5>
                                                <!--  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                                            <i class="icofont-eye-alt">
                                                                <?= $v_news->news_view ?></i></button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-secondary"><?= $v_news->news_category ?></button>
                                                    </div>
                                                    <small class="text-muted"><?php echo $time_elapsed = $this->timeago->timeAgo_T(
                                                    $v_news->news_date
                                                ); ?></small>
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
            </div>
            <!--end code-->
            <center><a href="<?= base_url('news/all') ?>"
                    class=" btn btn-outline-secondary mt-3 my-2 ">ข่าวสารทั้งหมด</a></center>
       



    </div>
    <?php $this->load->view('user/youtube/youtube_main.php'); ?>
</section>
<?php $this->load->view('user/services/services_skj.php'); ?>

<section id="" class="section bg-dark">
    <div class="  text-white   " data-aos="fade-down">
        <div class="container pad-3">
            <div class="row">
                <div class="col-md-6 px-2 align-self-center">
                    <img loading="lazy" src="<?= base_url(
                        'asset/user/img/covid.png'
                    ) ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 px-2 align-self-center">
                    <h1 class="display-5 text-white">รายงานสถานการณ์ โควิด-19</h1>
                    <div class="list-group">

                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            ติดเชื้อสะสม <small>[เพิ่มขึ้น <?= $users->NewConfirmed ?>]</small>
                            <span class="badge badge-primary badge-pill"><?= number_format(
                                $users->Confirmed
                            ) ?></span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            หายแล้ว <small>[เพิ่มขึ้น <?= $users->NewRecovered ?>]</small>
                            <span class="badge badge-primary badge-pill"><?= number_format(
                                $users->Recovered
                            ) ?></span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            รักษาอยู่ใน รพ.
                            <span class="badge badge-primary badge-pill"><?= number_format(
                                $users->Hospitalized
                            ) ?></span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center h3">
                            เสียชีวิต
                            <span class="badge badge-primary badge-pill"><?= number_format(
                                $users->Deaths
                            ) ?></span>
                        </a>

                    </div>

                    <div class="text-center display-6">อัพเดทข้อมูลล่าสุด <?= $users->UpdateDate ?></div>
                </div>
            </div>
        </div>
    </div>
</section>