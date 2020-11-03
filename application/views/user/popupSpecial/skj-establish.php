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
        margin: 300px 0px;
    }

    .text-title-kt h4 {
        font-family: Pattaya;
        font-size: 28px;
        color: #fff704;
        text-shadow: 2px 2px 2px #000000;

    }
    .text-title-kt h3 {
        font-family: Pattaya;
    font-size: 25px;
    color: #fa1477;
    text-shadow: 2px 1px 3px #ffffff;
    -webkit-text-stroke: 1px #000000eb;
   
    }

    .text-title-round{
        margin-top: 63px;
    }

    .text-title-round .title-2{
        font-family: Pattaya;
    font-size: 140px;
    -webkit-text-stroke: 1px #000000eb;
    color: #fff704;
    text-shadow: 2px 2px 2px #000000;    
    line-height: 120px;
    }

    .text-title-round .title-1{
        font-family: Pattaya;
    font-size: 36px;
    color: honeydew;
    text-shadow: 2px 1px #000000;
    }
    .text-title-round .title-3{
        font-family: Pattaya;
    font-size: 30px;
    color: #fa1477;
    text-shadow: 2px 1px 3px #ffffff;
    -webkit-text-stroke: 1px #000000eb;
    
    }

    .text-title-round .title-date{
        font-size: 18px;
    color: #ffffff;
    } 

    .img-1{
        width: 100px;
    }
    .img-2{
        width: 130px;
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

@media (min-width: 1200px) {
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

    .text-title-round .title-2{
        font-family: Pattaya;
    font-size: 200px;
    -webkit-text-stroke: 1px #000000eb;
    color: #fff704;
    text-shadow: 2px 2px 2px #000000;
    line-height: 160px;
    }

    .text-title-round .title-1{
        font-family: Pattaya;
    font-size: 36px;
    color: honeydew;
    text-shadow: 2px 1px #000000;
    }
    .text-title-round .title-3{
        font-family: Pattaya;
    font-size: 53px;
    color: #fa1477;
    text-shadow: 2px 1px 3px #ffffff;
    -webkit-text-stroke: 1px #000000eb;
    
    }

    .text-title-round .title-date{
        font-size: 34px;
    color: #ffffff;
    } 
    .img-1{
        width: 185px;
    }
    .img-2{
        width: 275px;
    }
}



</style>
<!--  -->

<div class="" style="background-color: #249ffd;background-image: url(uploads/banner/kt/bg.png);
    background-size: cover;     min-height: 100vh;position: relative; width: 100%;overflow: hidden;">

    <div class="container">
        <div class="row vh-100 ">
            <div class="col-lg-3 col-sm-4 col-6 align-self-center order-1  order-md-1">
            <div class="text-center ">   
                <img class="img-1" src="<?=base_url('uploads/logo/Logo-jira.png');?>" style="position: relative;-webkit-animation: mover 3s infinite  alternate;
                            animation: mover 4s infinite  alternate;animation-timing-function: linear;">
                </div>
            </div>
            <div class="col-lg-6 col-sm-4 align-self-center order-md-2">
                <div class="text-center text-title-round w-100">  
                    <!-- <div class="title-1">ครบรอบ</div> -->
                    <div class="title-2 ">46 ปี</div>
                    <div class="title-3"> วันคล้ายวันสถาปนาโรงเรียน </div>         
                    <div class="title-date"> วันศุกร์ที่ 6 พฤศจิกายน พ.ศ. 2563 <br>ขอเชิญร่วม ตักบาตรข้าวสารอาหารแห้ง</div>  
                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6 align-self-center order-2 order-md-3">
                <div class="text-center ">                
                <img class="img-2" src="<?=base_url('uploads/logo/LogoSKJ_5.png');?>" style="position: relative;-webkit-animation: mover 1s infinite  alternate;
                            animation: mover 2s infinite  alternate;animation-timing-function: linear;">            
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

