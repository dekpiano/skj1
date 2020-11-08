<style>
div.img-cloud {
    pointer-events: none;
    background-repeat: repeat-x;
    background-position: center top;
    background-size: auto 100%;
    min-height: 180px;
    width: 100%;
    position: absolute;
    left: 0;
    /* margin-top: -5px; */
    background-image: url(uploads/banner/welcome/2.png);
    bottom: -2px;
    z-index: 0;
    -webkit-animation: animation-clune 110s linear infinite;
    animation: animation-clune 110s linear infinite;
}

@-webkit-keyframes animation-clune {
    0% {
        /* background-position: 0 0; */
    }

    100% {
        background-position: -1027.29px 0;
    }
}

@keyframes animation-clune {
    0% {
        /* background-position: 0 0; */
    }

    100% {
        background-position: -1027.29px 0;
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

.up1 {
    position: relative;
    -webkit-animation: mover 1s infinite alternate;
}

.img-user {
    position: absolute;
    margin: 150px 186px;
}




@-webkit-keyframes fadeIn {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}

.text-detail {
    -webkit-animation-duration: 10s;
    animation-duration: 10s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}


.slider-wrapper {
    color: #aaa;
    text-transform: uppercase;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.slider {

    font-weight: 700;
    height: 5rem;
}

.slider-text {
    height: 4.7rem;
    /*padding: 0.7rem;*/
    margin-bottom: 1.65rem;
    /*background-color: rgba(0, 132, 255, 0.63);*/
    text-align: center;
    border-radius: 1rem;
    color: white;
    letter-spacing: 2px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: none;
    text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.15);
}

.slider-text:first-child {
    animation: slide 15s linear infinite;
}

@keyframes slide {
    0% {
        margin-top: 200px;
    }

    2% {
        margin-top: 100px;
    }

    12% {
        margin-top: 0px;
    }

    14% {
        margin-top: 0px;
    }

    24% {
        margin-top: -100px;
    }

    26% {
        margin-top: -100px;
    }

    36% {
        margin-top: -200px;
    }

    38% {
        margin-top: -200px;
    }

    48% {
        margin-top: -300px;
    }

    50% {
        margin-top: -300px;
    }

    60% {
        margin-top: -400px;
    }

    62% {
        margin-top: -400px;
    }

    72% {
        margin-top: -500px;
    }

    74% {
        margin-top: -500px;
    }

    84% {
        margin-top: -600px;
    }

    86% {
        margin-top: -600px;
    }

    96% {
        margin-top: -700px;
    }

    100% {
        margin-top: -700px;
    }
}


/*==========  Mobile First Method  ==========*/
/*Extra large devices (large desktops, 1200px and up)*/

.seletion .row {
    margin: 0px auto;
    align-content: center;
}

.seletion .row .logo img {
    width: 350px;
}

.titel-skj {
    text-align: center;
    font-size: 2rem;
    color: #fff;
    text-shadow: 2px 2px 3px #000000;
}

.slider-wrapper {
    font-size: 3.8rem;
}

.img-skj {
    width: 200px;
}

/* Custom, iPhone Retina */
@media (min-width : 320px) and (max-width : 479px) {
    .seletion .row {
        margin: 0px auto;
        align-content: center;
    }

    .seletion .row .logo img {
        width: 240px;
    }

    .titel-skj {
        text-align: center;
        font-size: 2rem;
        color: #fff;
        text-shadow: 2px 2px 3px #000000;
    }

    .slider-wrapper {
        font-size: 2.1rem;
    }

    .img-skj {
        width: 200px;
    }

    div.img-cloud {
        min-height: 100px;
    }
}

/* Extra Small Devices, Phones */
@media (min-width : 480px) and (max-width : 765px) {}

/* Small Devices, Tablets */
@media (min-width : 768px) and (max-width : 992px) {
    .seletion .row {
        margin: 0px auto;
        align-content: center;
    }

    .seletion .row .logo img {
        width: 360px;
    }

    .titel-skj {
        text-align: center;
        font-size: 2rem;
        color: #fff;
        text-shadow: 2px 2px 3px #000000;
    }

    .slider-wrapper {
        font-size: 2.6rem;
    }

    .img-skj {
        width: 200px;
    }
}

/* Medium Devices, Desktops */
@media(min-width : 992px) and (max-width : 1200px) {
    .seletion .row {
        margin: 0px auto;
        align-content: center;
    }

    .seletion .row .logo img {
        width: 300px;
    }

    .titel-skj {
        text-align: center;
        font-size: 2rem;
        color: #fff;
        text-shadow: 2px 2px 3px #000000;
    }

    .slider-wrapper {
        font-size: 3.6rem;
    }

    .img-skj {
        width: 200px;
    }
}

#particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 50%;
}
</style>

<div class="" style="background-color: #249ffd;background: url(uploads/banner/welcome/bg-main.png);
    background-size: cover;     min-height: 100vh;position: relative; width: 100%;overflow: hidden;">
    <!-- particles.js container -->
    <div id="particles-js"></div>
    <div class="img-cloud"></div>

    <div class="container seletion">
        <div class="row vh-100">
            <div class="col-md-6  text-center align-self-center">
                <div class="logo up1">
                    <img src="<?=base_url('uploads/banner/welcome/LogoSKJ_3.png');?> " class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 text-center align-self-center">

                <!-- <div class="titel-skj">
                    สวนกุหลาบวิทยาลัย <br>(จิรประวัติ) นครสวรรค์
                </div> -->
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slider-text">เป็นผู้นำ</div>
                        <div class="slider-text">รักเพื่อน</div>
                        <div class="slider-text">นับถือพี่</div>
                        <div class="slider-text">เคารพครู</div>
                        <div class="slider-text">กตัญญูพ่อแม่</div>
                        <div class="slider-text">ดูแลน้อง</div>
                        <div class="slider-text">สนองคุณแผ่นดิน</div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>