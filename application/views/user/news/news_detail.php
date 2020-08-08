<style type="text/css">
img {
    max-width: 100%;
    height: auto;
}
</style>

<!--- หัวข้อ --->
<div class="section " >
    <div class="container">
        <div class="row">
          
        </div>
    </div>
</div>
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details ">
    <div class="container">

        <div class="portfolio-details-container">

            <div class="owl-carousel portfolio-details-carousel">
                <img loading="lazy" src="<?=base_url('uploads/news/').$news[0]->news_img;?>" class="img-fluid" alt="">
            </div>
        </div>

        <div class="mt-5">
            <h2><?=$news[0]->news_topic;?>
                <!-- Your share button code -->
                <div class="fb-share-button float-right" data-href="<?=$full_url;?>" data-layout="button_count">
                </div>
            </h2>
            <strong><i class="icofont-user"></i></strong>
            <?=$news[0]->personnel_id=='1' ? 'Admin SKJ' : '';?>&nbsp;&nbsp;
            <strong><i class="icofont-ui-calendar"></i></strong>
            <?php $d=strtotime($news[0]->news_date); echo $this->datethai->thai_date_fullmonth($d);?>&nbsp;&nbsp;
            <strong><i class="icofont-eye-alt"></i> <?=$news[0]->news_view;?></strong>

            <hr>
            <p>
                <?=$news[0]->news_content;?>
            </p>
        </div>

    </div>
</section><!-- End Portfolio Details Section -->