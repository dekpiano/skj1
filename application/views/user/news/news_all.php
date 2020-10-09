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
    </style>

    <div class="album bg-light">
        <div class="container">
        <div class="row ">
            <?php foreach ($news as $key => $v_news): ?>
            <?php if ($v_news->news_facebook !== ''): ?>

            <div class="mb-2">
                <div loading="lazy" class="fb-post" data-href="<?= $v_news->news_facebook ?>" data-width="100%"
                    data-show-text="true"></div>
            </div>

            <?php else: ?>

           
                <div class="col-md-6 mb-2 col-lg-4">
                    <a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>">
                        <div class="card box-shadow h-100 overflow zoom ">
                            <?php if ($v_news->news_img == ''): ?>
                            <img loading="lazy" class="card-img-top" alt="Thumbnail [100%x225]"
                                style="height: 225px; width: 100%; display: block;" src="<?= base_url(
                                    'asset/user/img/banner_main.jpg'
                                ) ?>">
                            <?php else: ?>
                            <img style="object-fit: cover;" loading="lazy" class="card-img-top" src="<?= base_url(
                                'uploads/news/'
                            ) .
                                $v_news->news_img ?>" style="object-fit: cover;" height="225px" height="225px">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="text-overflow"><?= $v_news->news_topic ?></h5>
                                <!--  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"> <i
                                                class="icofont-eye-alt"> <?= $v_news->news_view ?></i></button>
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

</main>