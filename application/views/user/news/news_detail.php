<section class="banner-section-two">
    <div class="main-slider-carousel swiper-container-horizontal">

        <div class="swiper-wrapper " style="transform: translate3d(-1146px, 0px, 0px); transition-duration: 0ms;">

            <?php foreach ($news_banner as $key => $v_news_banner) : ?>
            <div class="swiper-slide swiper-slide-next "
                style="background-image: linear-gradient(0deg, rgba(46,46,46,0.6166841736694677) 0%, rgba(46,46,46,1.5) 100%), url(<?=base_url('uploads/news/').$news[0]->news_img;?>); width: 1146px;"
                data-swiper-slide-index="1">
                <div class="auto-container">

                    <div class="content-boxed">
                        <div class="inner-box">
                            <div class="title"><?=$news[0]->news_category?></div>
                            <h1><?=$news[0]->news_topic;?></h1>   
                            <div class="text">
                            <?php $d=strtotime($news[0]->news_date); echo $this->datethai->thai_date_fullmonth($d);?>
                            </div>                         
                        </div>
                    </div>

                </div>
            </div>
            <?php endforeach ?>


        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="our-blogs">
                <?=$news[0]->news_content;?>
                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top">

                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <div class="sidebar-title">
                            <h3>Search</h3>
                        </div>
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Type &amp; Hit Enter..."
                                    required="">
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget categories-widget">
                        <div class="widget-content">
                            <div class="sidebar-title">
                                <h3>Categories</h3>
                            </div>
                            <ul class="service-cat-two">
                                <li class="active"><a href="service-detail.html">All<span><?=($news_count)?></span></a>
                                </li>
                                <?php foreach ($news_group as $key => $v_news_group) : ?>
                                <li><a
                                        href="service-detail.html"><?=$v_news_group->news_category?><span><?=$v_news_group->C?></span></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Popular Posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h3>ข่าวล่าสุด</h3>
                        </div>
                        <div class="widget-content">
                            <?php foreach ($news_banner as $key => $v_news_banner):?>
                            <article class="post">
                                <figure class="post-thumb"><a href="<?= base_url('news/newsDetail/') .
                        $v_news_banner->news_id ?>"><img src="<?= base_url('uploads/news/').$v_news_banner->news_img ?>" alt=""></a></figure>
                                <div class="text"><a href="<?= base_url('news/newsDetail/') .
                        $v_news_banner->news_id ?>"><?=$v_news_banner->news_topic;?></a>
                                </div>
                            </article>
                            <?php endforeach ?>

                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="sidebar-widget tags">
                        <div class="sidebar-title">
                            <h3>Tags</h3>
                        </div>
                        <div class="widget-content">
                            <a href="#">Structure</a>
                            <a href="#">Envato</a>
                            <a href="#">Premium</a>
                            <a href="#">Clean</a>
                            <a href="#">WordPress</a>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>