<main role="main">

    <section class="jumbotron text-center bg_headertitel">
        <div class="container">
            <h1>ข่าวประชาสัมพันธ์</h1>
            <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

        </div>
    </section>

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

            .more-services .card-title a {
                color: #222222;
                font-size: 14px;
            }
        }
    </style>

    <div class="album bg-light  more-services">
        <div class="container">
            <div class="row ">
                <?php foreach ($news as $key => $v_news): ?>
                <?php if ($v_news->news_facebook !== ''): ?>

                <div class="mb-2">
                    <div loading="lazy" class="fb-post" data-href="<?= $v_news->news_facebook ?>" data-width="100%"
                        data-show-text="true"></div>
                </div>

                <?php else: ?>
                    <?php if ($v_news->news_img == ''): ?>
                    <div class="col-md-4 d-flex align-items-stretch mt-4">
                        <div class="card aos-init aos-animate" style="background-image: url(<?= base_url(
                                    'asset/user/img/banner_main.jpg'
                                ) ?>);" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"><?= $v_news->news_topic ?></a></h5>
                                <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod
                                        tempor ut labore et dolore magna aliqua.</p> -->
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-muted"> <i class="icofont-eye-alt">
                                            <?= $v_news->news_view ?></i></small>

                                    <small class="text-muted"><?php echo $time_elapsed = $this->timeago->timeAgo_T(
                                        $v_news->news_date
                                    ); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="col-md-4 d-flex align-items-stretch mt-4">
                        <div class="card aos-init aos-animate"
                            style="background-image: url(<?= base_url('uploads/news/').$v_news->news_img ?>);"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"><?= $v_news->news_topic ?></a></h5>
                                <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod
                                        tempor ut labore et dolore magna aliqua.</p> -->
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-muted"> <i class="icofont-eye-alt">
                                            <?= $v_news->news_view ?></i></small>

                                    <small class="text-muted"><?php echo $time_elapsed = $this->timeago->timeAgo_T(
                                        $v_news->news_date
                                    ); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                <?php endif; ?>
                <?php endforeach; ?>

            </div>
            <p>
            <nav aria-label="Page navigation example">
            <?php echo $links; ?>
            </nav>
            </p>
         
        </div>
    </div>

</main>