<style>

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
        <div class="" data-aos="zoom-in">
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
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-4">
                        <article class="card w-100">

                            <header class="card__thumb"
                                style="background-image: url(<?= base_url('asset/user/img/banner_main.jpg') ?>);">
                                <a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"></a>
                            </header>
                            <div class="card__date">
                                <span class="card__date__day"> <?=date('d',strtotime($v_news->news_date));?></span>
                                <span class="card__date__month"> <?=date('M',strtotime($v_news->news_date));?></span>
                            </div>
                            <div class="card__body">
                                <div class="card__category"><a href="#"><?= $v_news->news_category ?></a></div>
                                <div class="card__title"><a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"><?=$v_news->news_topic;?></a></div>
                                <!-- <div class="card__subtitle">Donec posuere vulputate</div> -->
                                <p class="card__description">
                                    <?=strip_tags($v_news->news_content);;?>
                                </p>
                            </div>
                            <footer class="card__footer">
                                <span><?php echo $time_elapsed = $this->timeago->timeAgo_T(
                                        $v_news->news_date
                                    ); ?></span>
                                <span><i class="icofont-eye-alt"> <?= $v_news->news_view ?></i></span>
                            </footer>
                        </article>
                    </div>
                    <?php else: ?>
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-4">
                        <article class="card w-100">
                            <header class="card__thumb"
                                style="background-image: url(<?= base_url('uploads/news/').$v_news->news_img ?>);">
                                <a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"></a>
                            </header>
                            <div class="card__date">
                                <span class="card__date__day"> <?=date('d',strtotime($v_news->news_date));?></span>
                                <span class="card__date__month"> <?=date('M',strtotime($v_news->news_date));?></span>
                            </div>
                            <div class="card__body">
                                <div class="card__category"><a href="#"><?= $v_news->news_category ?></a></div>
                                <div class="card__title"><a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"><?=$v_news->news_topic?></a></div>
                                <!-- <div class="card__subtitle">Donec posuere vulputate</div> -->
                                <p class="card__description">
                                    <?=strip_tags($v_news->news_content);;?>

                                </p>
                            </div>
                            <footer class="card__footer">
                                <span class="ml-2"><i class="icofont-wall-clock"></i> <?php echo $time_elapsed = $this->timeago->timeAgo_T(
                                        $v_news->news_date
                                    ); ?></span>
                                <span class="ml-2"><i class="icofont-eye-alt"> <?= $v_news->news_view ?></i></span>
                            </footer>
                        </article>


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

