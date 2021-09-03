
<!-- Banner Section -->
<section class="banner-section">
    <div class="main-slider-carousel">

        <div class="swiper-wrapper">

            <div class="swiper-slide"
                style="background-image: url(<?=base_url();?>asset/user/images/background/bannermain.jpg);">
                <div class="auto-container">

                    <div class="content-boxed">
                        <div class="inner-box">
                            <!-- <div class="title">lawa Law Firm</div> -->
                            <h1 style="line-height: 1.3em">สวนกุหลาบวิทยาลัย <br>(จิรประวัติ) นครสวรรค์</h1>
                            <div class="text">เป็นผู้นำ รักเพื่อน นับถือพี่ เคารพครู กตัญญูพ่อแม่ ดูแลน้อง
                                สนองคุณแผ่นดิน</div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <!-- Slider Icon Scroll -->
    <div class="slider-icon-scroll scroll-to-target" data-target=".about-section"><span
            class="icofont-scroll-down"></span></div>

</section>
<!-- End Banner Section -->

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <!-- <div class="title">testimonial</div> -->
            <h2>SKJ News</h2>
        </div>
        <div class="testimonial-carousel">

            <div class="row clearfix">
                <?php foreach ($news as $key => $v_news): ?>
                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="block-inner">
                        <div class="image">
                            <a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"><img src="<?= base_url('uploads/news/').$v_news->news_img ?>" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">
                                <?=$this->datethai->thai_date_fullmonth(strtotime($v_news->news_date))?>
                                by <span>Admin</span>
                                <?php echo $time_elapsed = $this->timeago->timeAgo_T($v_news->news_date); ?></div>
                            <h4><a href="<?= base_url('news/newsDetail/').$v_news->news_id ?>">
                                    <div
                                        style="-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;overflow: hidden;">
                                        <?=($v_news->news_topic)?></div>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>


            </div>


        </div>
    </div>
</section>
<!-- End Testimonial Section -->

<!-- About Section -->
<section class="about-section">
    <div class="auto-container">

        <style>
        .about-block .inner-box .text {
            margin-top: 0px;
        }

        .about-section .lower-section .content-column .text {
            margin-bottom: 0px;
        }
        </style>
        <!-- Lower Section -->
        <div class="lower-section">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-sm-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h2> หลักสูตรที่เปิดสอน ห้องเรียนความเป็นเลิศ</h2>
                    </div>
                    <div class="inner-column">
                        <!-- About Block -->
                        <div class="about-block  col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon icofont-flask"></div>
                                <h3><a href="service-detail.html">ด้านวิชาการ</a></h3>
                                <div class="text">ส่งเสริมทางด้านคณิตศาสตร์ วิทยาศาสตร์</div>
                            </div>
                        </div>

                        <!-- About Block -->
                        <div class="about-block col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                                <div class="icon icofont-world"></div>
                                <h3><a href="service-detail.html">ด้านภาษา</a></h3>
                                <div class="text"> ส่งเสริมการใช้ภาษาอังกฤษ ภาษาจีน</div>
                            </div>
                        </div>

                        <!-- About Block -->
                        <div class="about-block col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">

                                <div class="icon icofont-music-notes"></div>
                                <h3><a href="service-detail.html">ด้านดนตรี ศิลปะ การแสดง</a></h3>
                                <div class="text"> ส่งเสริมทางด้านดนตรี ศิลปะการวาด การแสดง</div>
                            </div>
                        </div>
                        <!-- About Block -->
                        <div class="about-block  col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">

                                <div class="icon icofont-engineer"></div>
                                <h3><a href="service-detail.html">ด้านการงาน อาชีพ</a></h3>
                                <div class="text">ส่งเสริมการทำงานอาชีพสู่เอเซียน</div>
                            </div>
                        </div>
                        <!-- About Block -->
                        <div class="about-block  col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon icofont-result-sport"></div>
                                <h3><a href="service-detail.html">ด้านกีฬา</a></h3>
                                <div class="text"> ส่งเสริมทักษะด้านกีฬาต่าง ๆ สู่มืออาชีพ</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-sm-12 col-sm-12">
                    <div class="inner-column wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="<?=base_url();?>asset/user/images/resource/m1.png" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Lower Section -->

    </div>
</section>
<!-- End About Section -->

<!-- Services Section -->
<section class="services-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">pratices area</div>
            <h2>How we can’ help you</h2>
        </div>
        <div class="row clearfix">

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-layer"
                        style="background-image: url(<?=base_url();?>asset/user/images/resource/service-1.jpg)">
                    </div>
                    <div class="icon-box">
                        <span class="icon flaticon-money-1"></span>
                    </div>
                    <h5><a href="service-detail.html">Bank And <br> Finacial</a></h5>
                    <div class="text">Lorem ipsum dolor sitori dolo <br> tur adipiscing elit.Aenean me <br> vel
                        suscipit magna
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-layer"
                        style="background-image: url(<?=base_url();?>asset/user/images/resource/service-1.jpg)">
                    </div>
                    <div class="icon-box">
                        <span class="icon flaticon-sedan-car-front"></span>
                    </div>
                    <h5><a href="service-detail.html">Car & Motorcycle <br> Accidents</a></h5>
                    <div class="text">Lorem ipsum dolor sitori dolo <br> tur adipiscing elit.Aenean me <br> vel
                        suscipit magna
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-layer"
                        style="background-image: url(<?=base_url();?>asset/user/images/resource/service-1.jpg)">
                    </div>
                    <div class="icon-box">
                        <span class="icon flaticon-shelter"></span>
                    </div>
                    <h5><a href="service-detail.html">Personal <br> Injury</a></h5>
                    <div class="text">Lorem ipsum dolor sitori dolo <br> tur adipiscing elit.Aenean me <br> vel
                        suscipit magna
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-layer"
                        style="background-image: url(<?=base_url();?>asset/user/images/resource/service-1.jpg)">
                    </div>
                    <div class="icon-box">
                        <span class="icon flaticon-dollar"></span>
                    </div>
                    <h5><a href="service-detail.html">Family <br> Law</a></h5>
                    <div class="text">Lorem ipsum dolor sitori dolo <br> tur adipiscing elit.Aenean me <br> vel
                        suscipit magna
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-layer"
                        style="background-image: url(<?=base_url();?>asset/user/images/resource/service-1.jpg)">
                    </div>
                    <div class="icon-box">
                        <span class="icon flaticon-trend"></span>
                    </div>
                    <h5><a href="service-detail.html">Capital <br> Markets</a></h5>
                    <div class="text">Lorem ipsum dolor sitori dolo <br> tur adipiscing elit.Aenean me <br> vel
                        suscipit magna
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-layer"
                        style="background-image: url(<?=base_url();?>asset/user/images/resource/service-1.jpg)">
                    </div>
                    <div class="icon-box">
                        <span class="icon flaticon-plumber"></span>
                    </div>
                    <h5><a href="service-detail.html">Employment <br> Law</a></h5>
                    <div class="text">Lorem ipsum dolor sitori dolo <br> tur adipiscing elit.Aenean me <br> vel
                        suscipit magna
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-layer"
                        style="background-image: url(<?=base_url();?>asset/user/images/resource/service-1.jpg)">
                    </div>
                    <div class="icon-box">
                        <span class="icon flaticon-building"></span>
                    </div>
                    <h5><a href="service-detail.html">House & Estate <br> Litigation</a></h5>
                    <div class="text">Lorem ipsum dolor sitori dolo <br> tur adipiscing elit.Aenean me <br> vel
                        suscipit magna
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-layer"
                        style="background-image: url(<?=base_url();?>asset/user/images/resource/service-1.jpg)">
                    </div>
                    <div class="icon-box">
                        <span class="icon flaticon-handcuff"></span>
                    </div>
                    <h5><a href="service-detail.html">Criminal <br> Law</a></h5>
                    <div class="text">Lorem ipsum dolor sitori dolo <br> tur adipiscing elit.Aenean me <br> vel
                        suscipit magna
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services Section -->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <div class="title"> "ผู้รู้ดีเป็นผู้เจริญ" </div>
            <h2>พบกับผู้บริหารโรงเรียน</h2>
        </div>
        <div class="team-carousel">
            <div class="swiper-wrapper">

            <?php foreach ($pers as $key => $v_pers) : ?>
                <div class="swiper-slide">
               
                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="service-detail.html"><img
                                        src="<?=base_url('uploads/personnel/').$v_pers->pers_img;?>" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html"><?=$v_pers->pers_prefix.$v_pers->pers_firstname.' '.$v_pers->pers_lastname?></a></h3>
                                <div class="text"><?=$v_pers->posi_name;?></div>
                                <!-- Social Box -->
                                <!-- <ul class="social-box">
                                    <li><a href="https://twitter.com/"><span class="icofont-twitter"></span></a>
                                    </li>
                                    <li><a href="https://www.behance.net/"><span class="icofont-behance"></span></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/"><span class="icofont-instagram"></span></a>
                                    </li>
                                </ul> -->
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
    </div>
</section>
<!-- Team Section -->


<!-- Clients Section -->
<section class="clients-section">
    <div class="auto-container">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <div class="sponsors-carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="image-box"><a href="about.html"><img
                                    src="<?=base_url();?>asset/user/images/clients/1.png" alt=""></a></figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="image-box"><a href="about.html"><img
                                    src="<?=base_url();?>asset/user/images/clients/2.png" alt=""></a></figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="image-box"><a href="about.html"><img
                                    src="<?=base_url();?>asset/user/images/clients/3.png" alt=""></a></figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="image-box"><a href="about.html"><img
                                    src="<?=base_url();?>asset/user/images/clients/4.png" alt=""></a></figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="image-box"><a href="about.html"><img
                                    src="<?=base_url();?>asset/user/images/clients/5.png" alt=""></a></figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="image-box"><a href="about.html"><img
                                    src="<?=base_url();?>asset/user/images/clients/1.png" alt=""></a></figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="image-box"><a href="about.html"><img
                                    src="<?=base_url();?>asset/user/images/clients/2.png" alt=""></a></figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="image-box"><a href="about.html"><img
                                    src="<?=base_url();?>asset/user/images/clients/3.png" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Clients Section -->

<!-- CTA Section -->
<section class="cta-section" style="background-image: url(asset/user/images/background/teacherAll.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="title">No Obligation. Free consultation</div>
                <a class="phone" href="tel:+0014-323-68-48">(0014) 323 68 48</a>
            </div>
            <div class="pull-right">
                <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Contact Us</span></a>
            </div>
        </div>
    </div>
</section>
<!-- End CTA Section -->