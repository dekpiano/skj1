<link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


<section id="portfolio " class="section-bg section" data-aos="fade-down">
    <div class="container ">

        <style>
        .items {
            width: 90%;
            margin: 0px auto;
        }

        .slick-slide {
            margin: 10px
        }

        .slick-slide img {
            width: 100%;
            border: 0px solid #fff
        }
        </style>

        <!--- หัวข้อ --->
         <!--- หัวข้อ --->
         <div class="section ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full center">
                                <div class="heading_main text_align_center text-center">
                                    <h2><span class="theme_color">SKJ</span> วารสาร</h2>
                                    <p class="large">สวนกุหลาบวิทยาลัย จิรประวัติ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="items ">
            <?php foreach ($journal as $key => $v_journal) : ?>
            <a class="venobox" href="<?=base_url('uploads/journal/'.$v_journal->jour_img)?>" ><img loading="lazy" src="<?=base_url('uploads/journal/'.$v_journal->jour_img)?>"></a>
            <?php endforeach; ?>
        </div>
        <center><a href="<?=base_url('journal');?>" class=" btn btn-outline-secondary my-2 my-sm-0">วารสารทั้งหมด</a>
        </center>
        <!-- เนื้อหา -->



    </div>
</section>