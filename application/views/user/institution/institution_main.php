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
        <h4 class="text-center">หน่วยงานภายนอก</h4>
        <div class="items-institution">
            <?php foreach ($institution as $key => $v_institution) : ?>
            <a target="_blank" href="<?=$v_institution->instiO_link?>" >
            <img src="<?=base_url('uploads/institutionO/'.$v_institution->instiO_img)?>" style="    width: 100px;"></a>
            <?php endforeach; ?>
        </div>



    </div>
</section>