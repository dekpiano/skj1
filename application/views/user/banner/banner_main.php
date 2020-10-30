<style>
#myCarousel .carousel-item .mask {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-attachment: fixed
}

#myCarousel h4 {
    font-size: 30px;
    margin-bottom: 15px;
    color: #FFF;
    line-height: 100%;
    letter-spacing: 0.5px;
    font-weight: 600
}

#myCarousel h5 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #FFF;
    line-height: 100%;
    font-weight: 400
}

#myCarousel p {
    font-size: 18px;
    margin-bottom: 15px;
    color: #d5d5d5
}

#myCarousel .carousel-item a {
    /* background: #ff1490; */
    font-size: 14px;
    color: #FFF;
    /* padding: 13px 32px; */
    display: inline-block
}

#myCarousel .carousel-item a:hover {
    background: #ff59b1;
    text-decoration: none
}

#myCarousel .carousel-item h4 {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

#myCarousel .carousel-item p,
#myCarousel .carousel-item h5 {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}


#myCarousel .carousel-item a {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}

#myCarousel .carousel-item .mask img {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight;
    display: block;
    height: auto;
    max-width: 100%
}

#myCarousel h4,
#myCarousel h5,
#myCarousel p,
#myCarousel a,
#myCarousel .carousel-item .mask img {
    -webkit-animation-duration: 1s;
    animation-duration: 1.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

#myCarousel .carousel-item {
    height: 100%;
    min-height: 450px
}

#myCarousel {
    position: relative;
    z-index: 1;
    background: #3c94f2;
    background-size: cover
}

.carousel-control-next,
.carousel-control-prev {
    height: 40px;
    width: 40px;
    padding: 12px;
    top: 50%;
    bottom: auto;
    transform: translateY(-50%);
    background-color: #3c94f200
}

.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease, -webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px
}

.carousel-fade .carousel-item {
    opacity: 0;
    -webkit-transition-duration: .6s;
    transition-duration: .6s;
    -webkit-transition-property: opacity;
    transition-property: opacity
}

.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right,
.carousel-fade .carousel-item.active {
    opacity: 1
}

.carousel-fade .carousel-item-left.active,
.carousel-fade .carousel-item-right.active {
    opacity: 0
}

.carousel-fade .carousel-item-left.active,
.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item-prev.active,
.carousel-fade .carousel-item.active {
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0)
}

@supports (transform-style:preserve-3d) {

    .carousel-fade .carousel-item-left.active,
    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item-prev.active,
    .carousel-fade .carousel-item.active {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.carousel-fade .carousel-item-left.active,
.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item-prev.active,
.carousel-fade .carousel-item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

@-webkit-keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

@-webkit-keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}

@-webkit-keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}

@-webkit-keyframes bounce {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes bounce {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.bounce {
    -webkit-animation-name: bounce;
    animation-name: bounce;
}

#myCarousel::after {
    content: "";
    position: absolute;
    top: 372px;
    left: 0;
    height: 78px;
    width: 100%;
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/rip.svg) bottom center;
    background-size: 150%;
    transform: rotate(180deg);
}

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




    <div class="river">
    <?php   for ($i=1; $i <= 15; $i++) : ?>
        <div class="item-relative">
            <div class="kt<?=rand(1,5);?> item-base-slide">
                <img src="<?= base_url(
                                'uploads/banner/kt/kt'.rand(1,7).'.png'
                            ) ?>" class="mx-auto bounce vert-move" alt="slide" style="position: relative;-webkit-animation: mover 1s infinite  alternate;
                            animation: mover 2s infinite  alternate;animation-timing-function: linear;width: <?=rand(60,135);?>px;">
            </div>
        </div>
    <?php endfor; ?>


    </div>

</div>


<!-- <section class="content-area d-none d-md-block ">


    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="30000">

        <div class="carousel-inner">
       
            <div class="carousel-item active">
                <div class="mask d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-12 order-md-1 order-2 text-center">
                                <h5>23 ตุลาคม </h5>
                                <h4
                                    style="font-family: Pattaya;    font-size: 36px;    color: #fff704;text-shadow: 2px 2px 2px #000000;">
                                    วันปิยมหาราช</h4>
                                <h5 class="text-white text-center">
                                    น้อมรำลึก ในพระมหากรุณาธิคุณ <br> พระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว <br>
                                </h5>
                                <p><a class="btn btn-outline-danger"
                                        href="https://publicholidays.asia/thailand/th/chulalongkorn-memorial-day/">รายละเอียด</a>
                                </p>
                            </div>
                            <div class="col-md-6 col-12  "><img loading="lazy" src="<?= base_url(
                                'uploads/banner/23.png'
                            ) ?>" class="mx-auto bounce" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="mask d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2 text-center">
                                <h4>น้อมรำลึก เนื่องในวันคล้ายวันสวรรคต </h4>
                                <h5 class="text-white text-center">
                                    พระบาทสมเด็จพระบรมชนกาธิเบศร <br> มหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร <br>13 ตุลาคม
                                    2563
                                </h5>
                                <p><a class="btn btn-outline-danger"
                                        href="https://skj.ac.th/news/newsDetail/news_024">รายละเอียด</a> </p>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img loading="lazy" src="<?= base_url(
                                'uploads/banner/r9.png'
                            ) ?>" class="mx-auto bounce" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="mask d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2 text-center">
                                <h4>คำขวัญวันแม่แห่งชาติพระราชทาน ประจำปี 2563 </h4>
                                <h5 class="text-white text-center">
                                    “รักเอยรักลูก <Br>แม่จึงปลูกคุณธรรมให้รักษา <Br>
                                    รดความรักพรวนความดีมีเมตตา <Br>ลูกเติบใหญ่แทนคุณค่าของแผ่นดิน”
                                </h5>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img
                                    src="https://4.bp.blogspot.com/-VBFQJXoaqSo/V3TBGqo56dI/AAAAAAAAAAc/dGGClmDggWcvnhhEmh_309xr-I5wjekAgCLcB/s1600/m2558-01.png"
                                    class="mx-auto bounce" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2 text-center">
                                <h4>ยินดีต้อนรับ ส.ก.จ.</h4>
                                <h5>เป็นผู้นำ รักเพื่อน นับถือพี่ เคารพครู กตัญญูพ่อแม่ ดูแลน้อง</h5>
                                <p>โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวสรค์</p>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img loading="lazy" src="<?= base_url(
                                'asset/user/img/Logo-SKJ2.png'
                            ) ?>" class="mx-auto bounce" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span
                class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span
                class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>

</section> -->

<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
			<ol class="carousel-indicators">
				<?php foreach ($banner as $key => $v_banner): ?>
				<li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class=""></li>			
				<?php endforeach; ?>
			</ol>
			<div class="carousel-inner">
				<?php foreach ($banner as $key => $v_banner): ?>
				<div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
					<a href="<?= $v_banner->banner_linkweb ?>">
					<img loading="lazy" src="<?= base_url() ?>uploads/banner/<?= $v_banner->banner_img ?>" class="d-block w-100" >
					</a>
				</div>
				<?php endforeach; ?>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div> -->