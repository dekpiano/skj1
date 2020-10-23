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

            .more-services .card-title a {
                color: #222222;
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
        <div class=" more-services" data-aos="zoom-in">
            <div class="album ">
                <div class="section-title">
                    <h2>SKJ ประชาสัมพันธ์</h2>
                </div>

            </div>
            <div class=" " data-aos="fade-down">

                <div class="row">
                    <?php foreach ($news as $key => $v_news): ?>
                    <?php if ($v_news->news_facebook !== ''): ?>

                    <div class="mb-2">
                        <div loading="lazy" class="fb-post" data-href="<?= $v_news->news_facebook ?>" data-width="100%"
                            data-show-text="true"></div>
                    </div>

                    <?php else: ?>
                    <?php if ($v_news->news_img == ''): ?>
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
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
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
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
            </div>
        </div>
    </div>
    <!--end code-->
    <center class="mb-5"><a href="<?= base_url('news/all') ?>"
            class=" btn btn-outline-secondary mt-3 my-2 ">ข่าวสารทั้งหมด</a></center>




    </div>

</section>