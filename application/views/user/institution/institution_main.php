

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

        .slick-track {
            display: flex;
        }

        .items-institution .slick-track .slick-slide {
            display: flex;
            height: 139px;
        }
        </style>

        <!--- หัวข้อ --->
        <h4 class="text-center">หน่วยงานภายนอก</h4>
        <div class="items-institution">
            <?php foreach ($institution as $key => $v_institution) : ?>
            <a target="_blank" href="<?=$v_institution->instiO_link?>">
                <img loading="lazy" src="<?=base_url('uploads/institutionO/'.$v_institution->instiO_img)?>"></a>
            <?php endforeach; ?>
        </div>



    </div>
</section>