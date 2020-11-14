<style>
.bg-main {
    background-color: #f7c81fdb;
    /*background: url(uploads/banner/welcome/bg-main.png);*/
    background-size: cover;
    min-height: 100vh;
    position: relative;
    width: 100%;
    overflow: hidden;
    background: rgb(255, 254, 161);
    background: radial-gradient(circle, rgba(255, 254, 161, 1) 0%, rgba(247, 200, 31, 1) 100%);
}



@-webkit-keyframes mover {
    from {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    to {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes mover {
    from {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    to {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

.up1 {
    position: relative;
    -webkit-animation: mover 30s linear infinite;
    -moz-animation: mover 30s linear infinite;
    -ms-animation: mover 30s linear infinite;
    -o-animation: mover 30s linear infinite;
    animation: mover 30s linear infinite;
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





/*==========  Mobile First Method  ==========*/
/*Extra large devices (large desktops, 1200px and up)*/

.seletion .row {
    margin: 0px auto;
    align-content: center;
    padding-top: 100px;
}

.slider-text {

    margin-bottom: 1.65rem;
    border-radius: 1rem;
    color: white;
    letter-spacing: 2px;
    justify-content: center;
    align-items: center;
    text-transform: none;
    text-shadow: 4px 1px 0 #000;
}

.slider-text h1 {
    font-size: 6rem;
}

.slider-text h2 {
    font-size: 1.4rem;
}

.cricket-text {
    position: absolute;
    left: 34%;
    top: 25%;
}

.cricket-img {
    position: absolute;
    margin-top: -280px;
    margin-left: 8px;
}

.countdown {
        text-transform: uppercase;
        font-weight: bold;
        margin: 80px 31% auto;
        position: absolute;
    }

    .countdown span {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        font-size: 3rem;
        margin-left: 0.8rem;
    }

/* Custom, iPhone Retina */
@media (min-width : 320px) and (max-width : 479px) {

    .seletion .row {
        margin: 0px auto;
        align-content: center;
        padding-top: 69px;
    }

    .slider-text {

        margin-bottom: 1.65rem;
        border-radius: 1rem;
        color: white;
        letter-spacing: 2px;
        justify-content: center;
        align-items: center;
        text-transform: none;
        text-shadow: 4px 1px 0 #000;
    }

    .slider-text h1 {
        font-size: 3rem;
    }

    .slider-text h2 {
        font-size: 0.7rem;
    }

    .slider-text img {
        width: 250px;
    }

    .cricket-text img {
        width: 60px;
    }

    .cricket-text {
        position: absolute;
        margin: -10px -42px;
    }

    .cricket-img {
        position: absolute;
        width: 540px;
        margin: -142px -113px;
    }

    .countdown {
        text-transform: uppercase;
        font-weight: bold;
        margin: 70px 4px 0px;
        position: absolute;
    }

    .countdown span {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        font-size: 2rem;
        margin-left: 0.8rem;
    }
}

/* Extra Small Devices, Phones */
@media (min-width : 480px) and (max-width : 765px) {}

/* Small Devices, Tablets */
@media (min-width : 768px) and (max-width : 992px) {
    .seletion .row {
        margin: 0px auto;
        align-content: center;
        padding-top: 69px;
    }

    .slider-text {

        margin-bottom: 1.65rem;
        border-radius: 1rem;
        color: white;
        letter-spacing: 2px;
        justify-content: center;
        align-items: center;
        text-transform: none;
        text-shadow: 4px 1px 0 #000;
    }

    .slider-text h1 {
        font-size: 5rem;
    }

    .slider-text h2 {
        font-size: 1.1rem;
    }

    .slider-text img {
        width: 360px;
    }

    .cricket-text img {
        width: 80px;
    }

    .cricket-text {
        position: absolute;
        margin: -10px -35px;
    }

    .cricket-img {
        position: absolute;
        width: 860px;
        margin: -245px -95px;
    }

    .countdown {
        text-transform: uppercase;
        font-weight: bold;
        margin: 120px 19% auto;
        position: absolute;
    }

    .countdown span {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        font-size: 3rem;
        margin-left: 0.8rem;
    }
}

/* Medium Devices, Desktops */
@media(min-width : 992px) and (max-width : 1200px) {
    .seletion .row {
        margin: 0px auto;
        align-content: center;
        padding-top: 69px;
    }

    .slider-text {

        margin-bottom: 1.65rem;
        border-radius: 1rem;
        color: white;
        letter-spacing: 2px;
        justify-content: center;
        align-items: center;
        text-transform: none;
        text-shadow: 4px 1px 0 #000;
    }

    .slider-text h1 {
        font-size: 6rem;
    }

    .slider-text h2 {
        font-size: 1.5rem;
    }

    .slider-text img {}

    .cricket-text {
        position: absolute;
        margin: -40px -40px;
    }

    .cricket-img {
        position: absolute;
        width: 1236px;
        margin: -271px -168px;
    }

    .countdown {
        text-transform: uppercase;
        font-weight: bold;
        margin: 201px 28% auto;
        position: absolute;
    }

    .countdown span {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        font-size: 3rem;
        margin-left: 0.8rem;
    }
}
</style>

<div class="bg-main" style="">
    <!-- particles.js container -->
    <!-- <div class="img-cloud"></div> -->

    <div class="container seletion">
        <div class="row vh-100">
            <div class="col-md-12  text-center align-self-center">
                <div class="logo up1 cricket-img">
                    <img src="<?=base_url('uploads/banner/cricket/logo-img.png');?> " class="img-fluid">
                </div>
                <div style="position: relative;">
                    <div class="slider-text">
                        <img src="uploads/banner/cricket/logo-bg.png" class="img-fluid">
                        <div class="cricket-text">
                            <img src="uploads/banner/cricket/logo-star.png" class="img-fluid">
                            <h1>คริกเก็ต</h1>
                            <div>
                                <h2>เยาวชนชิงชนะเลิศแห่งประเทศไทย</h2>
                                <h2>17 - 22 พฤศจิกายน 2563</h2>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Countdown 3-->
                <div class="countdown">
                    เกมส์จะเริ่มในอีก
                    <div id="clock" class=""></div>
                </div>

            </div>

        </div>

    </div>



</div>