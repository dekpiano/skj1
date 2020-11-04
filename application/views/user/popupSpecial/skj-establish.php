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
        transform: translateY(-30px);
    }
}

@keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-30px);
    }
}

.kt1 {
    position: relative;
    animation: mymove <?php echo rand(180, 200)."s";
    ?>ease 0s normal none infinite;
}

.kt2 {
    position: relative;
    animation: mymove <?php echo rand(150, 170)."s";
    ?>ease 0s normal none infinite;
}

.kt3 {
    position: relative;
    animation: mymove <?php echo rand(130, 160)."s";
    ?>ease 0s normal none infinite;
}

.kt4 {
    position: relative;
    animation: mymove <?php echo rand(100, 200)."s";
    ?>ease 0s normal none infinite;
}

.kt5 {
    position: relative;
    animation: mymove <?php echo rand(200, 300)."s";
    ?>ease 0s normal none infinite;
}

.kt3 img {
    position: relative;

    animation: mover <?php echo rand(111, 200)."s";
    ?>ease 0s normal none infinite;
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


@media (max-width: 575.98px) {

    .text-title-round {
        margin-top: 63px;
    }

    .text-title-round .title-2 {
        font-family: Pattaya;
        font-size: 140px;
        -webkit-text-stroke: 1px #000000eb;
        color: #fff704;
        text-shadow: 2px 2px 2px #000000;
        line-height: 120px;
    }

    .text-title-round .title-1 {
        font-family: Pattaya;
        font-size: 36px;
        color: honeydew;
        text-shadow: 2px 1px #000000;
    }

    .text-title-round .title-3 {
        font-family: Pattaya;
        font-size: 30px;
        color: #fa1477;
        text-shadow: 2px 1px 3px #ffffff;
        -webkit-text-stroke: 1px #000000eb;

    }

    .text-title-round .title-date {
        font-size: 18px;
        color: #ffffff;
    }

    .img-1 {
        width: 100px;
    }

    .img-2 {
        width: 100%;
    margin-top: 33px;
    }

    #oval {
        width: 94px;
    height: 19px;
    background: #00000059;
    border-radius: 105px / 22px;
    }

    #oval-s {
        width: 134px;
    height: 23px;
    background: #00000059;
    border-radius: 96px / 18px;
    }

    
}

/*Small devices (landscape phones, 576px and up)*/
@media (min-width: 576px) and (max-width: 767.98px) {}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {
    .text-title-round {
        margin-top: 63px;
    }

    .text-title-round .title-2 {
        font-family: Pattaya;
        font-size: 170px;
        -webkit-text-stroke: 1px #000000eb;
        color: #fff704;
        text-shadow: 2px 2px 2px #000000;
        line-height: 160px;
    }

    .text-title-round .title-1 {
        font-family: Pattaya;
        font-size: 36px;
        color: honeydew;
        text-shadow: 2px 1px #000000;
    }

    .text-title-round .title-3 {
        font-family: Pattaya;
        font-size: 60px;
        color: #fa1477;
        text-shadow: 2px 1px 3px #ffffff;
        -webkit-text-stroke: 1px #000000eb;

    }

    .text-title-round .title-date {
        font-size: 30px;
        color: #ffffff;
    }

    .img-1 {
        width: 185px;
    }

    .img-2 {
        width: 330px;
    }

    #oval {
        width: 138px;
        height: 27px;
        background: #00000059;
        border-radius: 105px / 22px;
    }

    #oval-s {
        width: 212px;
        height: 34px;
        background: #00000059;
        border-radius: 96px / 18px;
    }

}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {
    .text-title-round .title-2 {
        font-family: Pattaya;
        font-size: 120px;
        -webkit-text-stroke: 1px #000000eb;
        color: #fff704;
        text-shadow: 2px 2px 2px #000000;
        line-height: 160px;
    }

    .text-title-round .title-1 {
        font-family: Pattaya;
        font-size: 36px;
        color: honeydew;
        text-shadow: 2px 1px #000000;
    }

    .text-title-round .title-3 {
        font-family: Pattaya;
        font-size: 40px;
        color: #fa1477;
        text-shadow: 2px 1px 3px #ffffff;
        -webkit-text-stroke: 1px #000000eb;

    }

    .text-title-round .title-date {
        font-size: 25px;
        color: #ffffff;
    }

    .img-1 {
        width: 130px;
    }

    .img-2 {
        width: 100%;
    }

    #oval {
        width: 138px;
        height: 27px;
        background: #00000059;
        border-radius: 105px / 22px;
    }

    #oval-s {
        width: 212px;
        height: 34px;
        background: #00000059;
        border-radius: 110px / 15px;
    }
}

/* // Extra large devices (large desktops, 1200px and up) */

@media (min-width: 1200px) {

    .text-title-round .title-2 {
        font-family: Pattaya;
        font-size: 200px;
        -webkit-text-stroke: 1px #000000eb;
        color: #fff704;
        text-shadow: 2px 2px 2px #000000;
        line-height: 160px;
    }

    .text-title-round .title-1 {
        font-family: Pattaya;
        font-size: 36px;
        color: honeydew;
        text-shadow: 2px 1px #000000;
    }

    .text-title-round .title-3 {
        font-family: Pattaya;
        font-size: 53px;
        color: #fa1477;
        text-shadow: 2px 1px 3px #ffffff;
        -webkit-text-stroke: 1px #000000eb;

    }

    .text-title-round .title-date {
        font-size: 34px;
        color: #ffffff;
    }

    .img-1 {
        width: 185px;
    }

    .img-2 {
        width: 330px;
        margin-top: 53px;
    }

    #oval {
        width: 138px;
        height: 27px;
        background: #00000059;
        border-radius: 105px / 22px;
    }

    #oval-s {
        width: 212px;
        height: 34px;
        background: #00000059;
        border-radius: 118px / 19px;
    }
}


#background-wrap {
    bottom: 0;
    left: 0;
    padding-top: 50px;
    position: absolute;
    right: 0;
    top: 29px;
    z-index: 1;
}

/* KEYFRAMES */

@-webkit-keyframes animateCloud {
    0% {
        margin-left: -1000px;
    }
    100% {
        margin-left: 100%;
    }
}

@-moz-keyframes animateCloud {
    0% {
        margin-left: -1000px;
    }
    100% {
        margin-left: 100%;
    }
}

@keyframes animateCloud {
    0% {
        margin-left: -1000px;
    }
    100% {
        margin-left: 100%;
    }
}

/* ANIMATIONS */

.x1 {
	-webkit-animation: animateCloud 35s linear infinite;
	-moz-animation: animateCloud 35s linear infinite;
	animation: animateCloud 35s linear infinite;
	
	-webkit-transform: scale(0.65);
	-moz-transform: scale(0.65);
	transform: scale(0.65);
}

.x2 {
	-webkit-animation: animateCloud 20s linear infinite;
	-moz-animation: animateCloud 20s linear infinite;
	animation: animateCloud 20s linear infinite;
	
	-webkit-transform: scale(0.3);
	-moz-transform: scale(0.3);
	transform: scale(0.3);
}

.x3 {
	-webkit-animation: animateCloud 30s linear infinite;
	-moz-animation: animateCloud 30s linear infinite;
	animation: animateCloud 30s linear infinite;
	
	-webkit-transform: scale(0.5);
	-moz-transform: scale(0.5);
	transform: scale(0.5);
}

.x4 {
	-webkit-animation: animateCloud 18s linear infinite;
	-moz-animation: animateCloud 18s linear infinite;
	animation: animateCloud 18s linear infinite;
	
	-webkit-transform: scale(0.4);
	-moz-transform: scale(0.4);
	transform: scale(0.4);
}

.x5 {
	-webkit-animation: animateCloud 25s linear infinite;
	-moz-animation: animateCloud 25s linear infinite;
	animation: animateCloud 25s linear infinite;
	
	-webkit-transform: scale(0.55);
	-moz-transform: scale(0.55);
	transform: scale(0.55);
}

/* OBJECTS */

.cloud {
	background: #fff;
	background: -moz-linear-gradient(top,  #fff 5%, #f1f1f1 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(5%,#fff), color-stop(100%,#f1f1f1));
	background: -webkit-linear-gradient(top,  #fff 5%,#f1f1f1 100%);
	background: -o-linear-gradient(top,  #fff 5%,#f1f1f1 100%);
	background: -ms-linear-gradient(top,  #fff 5%,#f1f1f1 100%);
	background: linear-gradient(top,  #fff 5%,#f1f1f1 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#f1f1f1',GradientType=0 );
	
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	border-radius: 100px;
	
	-webkit-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
	box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);

	height: 120px;
	position: relative;
	width: 350px;
}

.cloud:after, .cloud:before {
    background: #fff;
	content: '';
	position: absolute;
	z-indeX: -1;
}

.cloud:after {
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	border-radius: 100px;

	height: 100px;
	left: 50px;
	top: -50px;
	width: 100px;
}

.cloud:before {
	-webkit-border-radius: 200px;
	-moz-border-radius: 200px;
	border-radius: 200px;

	width: 180px;
	height: 180px;
	right: 50px;
	top: -90px;
}

</style>
<!--  -->
<div id="background-wrap">
    

    <div class="x2">
        <div class="cloud"></div>
    </div>
    <div class="x1">
        <div class="cloud"></div>
    </div>
    <div class="x3">
        <div class="cloud"></div>
    </div>
    
</div>
<div class="" style="background-color: #249ffd;background-image: url(uploads/banner/stpn/bg-main.svg);
    background-size: cover;     min-height: 100vh;position: relative; width: 100%;overflow: hidden;">

    <div class="container" style="z-index:1;">
        <div class="row vh-100 ">
            <div class="col-lg-2 col-sm-6 col-6 align-self-center order-1  order-sm-1  ">
                <div class="text-center ">
                    <img class="img-1" src="<?=base_url('uploads/logo/Logo-jira1.png');?>" style="position: relative;-webkit-animation: mover 3s infinite  alternate;
                            animation: mover 4s infinite  alternate;animation-timing-function: linear;">
                    <div style="text-align: -webkit-center;">
                        <div id="oval"> </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-6  align-self-center " style="z-index:1;">
                <div class="text-center text-title-round w-100">
                    <!-- <div class="title-1">ครบรอบ</div> -->
                    <div class="title-2 ">46 ปี</div>
                    <div class="title-3"> วันคล้ายวันสถาปนาโรงเรียน </div>
                    <div class="title-date"> วันศุกร์ที่ 6 พฤศจิกายน พ.ศ. 2563 <br>ขอเชิญร่วม ตักบาตรข้าวสารอาหารแห้ง
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-6 align-self-center order-2 order-sm-2 ">
                <div class="text-center ">
                    <img class="img-2" src="<?=base_url('uploads/logo/Logo-jira2.png');?>" style="position: relative;-webkit-animation: mover 1s infinite  alternate;
                            animation: mover 3s infinite  alternate;animation-timing-function: linear;">
                    <div style="text-align: -webkit-center;">
                        <div id="oval-s"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>














<!-- <div class="river ">
    <?php   for ($i=1; $i <= 15; $i++) : ?>
        <div class="item-relative">
            <div class="kt<?=rand(1,5);?> item-base-slide">
                <img src="<?= base_url('uploads/banner/kt/kt'.rand(1,7).'.png') ?>" class="mx-auto bounce vert-move" alt="slide" style="position: relative;-webkit-animation: mover 1s infinite  alternate;
                            animation: mover 2s infinite  alternate;animation-timing-function: linear;width: <?=rand(60,135);?>px;">
            </div>
        </div>
    <?php endfor; ?>
    </div> -->

</div>