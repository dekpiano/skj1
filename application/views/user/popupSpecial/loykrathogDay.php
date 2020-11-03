<style>

@media (min-width: 576px) {
    .content-area {
        margin-top: 3rem !important;
    }
}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .content-area {
        margin-top: 3rem !important;
    }
}

@keyframes mymove {
    from {
        left: -50px;
    }

    to {
        left: 100%;
    }
}


@-webkit-keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-10px);
    }
}

@keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-10px);
    }
}

.kt1 {
    position: relative;
    animation: mymove <?php echo rand(180,200)."s";?> ease 0s normal none infinite;
}

.kt2 {
    position: relative;
    animation: mymove <?php echo rand(150,170)."s";?> ease 0s normal none infinite;
}

.kt3 {
    position: relative;
    animation: mymove <?php echo rand(130,160)."s";?> ease 0s normal none infinite;
}

.kt4 {
    position: relative;
    animation: mymove <?php echo rand(100,200)."s";?> ease 0s normal none infinite;
}

.kt5 {
    position: relative;
    animation: mymove <?php echo rand(200,300)."s";?> ease 0s normal none infinite;
}

.kt3 img {
    position: relative;

    animation: mover <?php echo rand(111,200)."s";?> ease 0s normal none infinite;
    ;
    animation-timing-function: ease-out;
    width: 80px;
}

.river {
    height: 144px;
    position: absolute;
    z-index: 9;
    width: 100%;
    bottom: 0;
}

.river .item-relative {
    position: relative;
}

.river .item-base-slide {
    position: absolute;
    float: left;
}


@media (min-width: 300px) {
    .text-title-kt {
        position: absolute;
        margin: 112px 0px;
    }

    .text-title-kt h4 {
        font-family: Pattaya;
        font-size: 46px;
        color: #fff704;
        text-shadow: 2px 2px 2px #000000;

    }
    .text-title-kt h3 {
        font-family: Pattaya;
    font-size: 36px;
    color: #fa1477;
    text-shadow: 2px 1px 3px #ffffff;
    -webkit-text-stroke: 1px #000000eb;
   
    }
}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 992px) {
    .text-title-kt {
        position: absolute;
        margin: 256px 0px;
    }

    .text-title-kt h4 {
        font-family: Pattaya;
        font-size: 50px;
        color: #fff704;
        text-shadow: 2px 2px 2px #000000;
    }
    .text-title-kt h3 {
        font-family: Pattaya;
    font-size: 52px;
    color: #fa1477;
    text-shadow: 2px 1px 3px #ffffff;
    -webkit-text-stroke: 1px #000000eb;
   
    }
}

@media (min-width: 576px) {}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .text-title-kt {
        position: absolute;
        margin: 256px -227px;
    }

    .text-title-kt h4 {
        font-family: Pattaya;
        font-size: 50px;
        color: #fff704;
        text-shadow: 2px 2px 2px #000000;
    }
    .text-title-kt h3 {
        font-family: Pattaya;
    font-size: 52px;
    color: #fa1477;
    text-shadow: 2px 1px 3px #ffffff;
    -webkit-text-stroke: 1px #000000eb;
    text-shadow: 3px 3px 0 #b7b7b7, -1px -1px 0 #e4e4e4, 1px -1px 0 #fff, -1px 1px 0 #000, 1px 1px 0 #fff;
    }
}

@media (min-width: 1440px) {
    .text-title-kt {
        position: absolute;
        margin: 256px -330px;
    }

    .text-title-kt h4 {
        font-family: Pattaya;
        font-size: 95px;
        color: #fff704;
        text-shadow: 2px 2px 2px #000000;
    }

    .text-title-kt h3 {
        font-family: Pattaya;
    font-size: 52px;
    color: #fa1477;
    text-shadow: 2px 1px 3px #ffffff;
    -webkit-text-stroke: 1px #000000eb;
    text-shadow: 3px 3px 0 #b7b7b7, -1px -1px 0 #e4e4e4, 1px -1px 0 #fff, -1px 1px 0 #000, 1px 1px 0 #fff;
    }
}
</style>
<!--  -->
<div class="" style="background-image: url(uploads/banner/kt/bg.png);
    background-size: cover;     min-height: 100vh;position: relative; width: 100%;overflow: hidden;">


    <div class="text-center text-title-kt w-100">
        <h4 > ประเพณีลอยกระทง </h4>
                        <h3> Loy Krathong Festival </h3>
                 <h5 class="text-white text-center">
            คืนวันเพ็ญเดือน 12 หรือวันขึ้น 15 ค่ำเดือน 12 <br> วันเสาร์ที่ 31 ตุลาคม 2563 <br>
        </h5>
    </div>
    >




    <div class="river ">
    <?php   for ($i=1; $i <= 15; $i++) : ?>
        <div class="item-relative">
            <div class="kt<?=rand(1,5);?> item-base-slide">
                <img src="<?= base_url('uploads/banner/kt/kt'.rand(1,7).'.png') ?>" class="mx-auto bounce vert-move" alt="slide" style="position: relative;-webkit-animation: mover 1s infinite  alternate;
                            animation: mover 2s infinite  alternate;animation-timing-function: linear;width: <?=rand(60,135);?>px;">
            </div>
        </div>
    <?php endfor; ?>


    </div>

</div>

