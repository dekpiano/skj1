<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>เนื่องในโอกาสวันเฉลิมพระชนมพรรษา สมเด็จพระนางเจ้า ฯ พระบรมราชินี ๓ มิถุนายน ๒๕๖๓</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Charm:wght@700&display=swap');

body {
    padding: 0px;
    margin: 0px;
    font-family: 'Charm', cursive;
}

.con-video {
    width: 100%;
    max-height: 100vh;
    overflow: hidden;
    position: fixed;
    top: 0;
    right: 0;
    z-index: -100;
}

button {
    position: relative;
    display: block;
    margin-top: 10px;

    z-index: 1;
    border: 2px solid rgb(146, 119, 74);
    color: rgb(146, 119, 74);
    background: transparent;
    font-size: 26px;
    border-radius: 0px;
    padding: 0 80px;
    line-height: 52px;
    overflow: hidden;
    cursor: pointer;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    transition: all .2s;
}


.golden-btn {
    display: inline-block;
    outline: none;
    font-family: inherit;
    font-size: 1em;
    box-sizing: border-box;
    border: none;
    border-radius: .3em;
    height: 2.75em;
    line-height: 2.5em;
    text-transform: uppercase;
    padding: 0 1em;
    box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(110, 80, 20, .4),
        inset 0 -2px 5px 1px rgba(139, 66, 8, 1),
        inset 0 -1px 1px 3px rgba(250, 227, 133, 1);
    background-image: linear-gradient(160deg, #a54e07, #b47e11, #fef1a2, #bc881b, #a54e07);
    border: 1px solid #a55d07;
    color: rgb(120, 50, 5);
    text-shadow: 0 2px 2px rgba(250, 227, 133, 1);
    cursor: pointer;
    transition: all .2s ease-in-out;
    background-size: 100% 100%;
    background-position: center;
}

.golden-btn:focus,
.golden-btn:hover {
    background-size: 150% 150%;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23),
        inset 0 -2px 5px 1px #b17d10,
        inset 0 -1px 1px 3px rgba(250, 227, 133, 1);
    border: 1px solid rgba(165, 93, 7, .6);
    color: rgba(120, 50, 5, .8);
}

.golden-btn:active {
    box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(110, 80, 20, .4),
        inset 0 -2px 5px 1px #b17d10,
        inset 0 -1px 1px 3px rgba(250, 227, 133, 1);
}

#main {
    height: 100vh;
    display: flex;
    justify-content: center;
}

h1 {
    font-size: 50px;
}

h2 {
    font-size: 30px;
}


h1,
h2,
h3 {
    color: #ffbe47;
    /*if no support for background-clip*/

    background: -webkit-linear-gradient(transparent, transparent),
        -webkit-linear-gradient(top, rgba(213, 173, 109, 1) 0%, rgba(213, 173, 109, 1) 26%, rgba(226, 186, 120, 1) 35%, rgba(163, 126, 67, 1) 45%, rgba(145, 112, 59, 1) 61%, rgba(213, 173, 109, 1) 100%);
    background: -o-linear-gradient(transparent, transparent);
    -webkit-background-clip: text;
    text-shadow: #000 3px 1px 2px;
}

/* tablets */
@media (min-width: 768px) and (max-width: 991.98px) {
    img {
        width: 320px;
    }

    h1 {
        font-size: 36px;
    }

    h2 {
        font-size: 20px;
    }

    h3 {
        font-size: 18px;
    }

    .golden-btn {
        font-size: 14px;
    }

    p.logo-r::before {
        content: "";
        display: block;
        width: 264px;
        height: 85px;
        background-image: url(uploads/video/logo-thai.png);
        position: absolute;
        background-position: center right;
        position: absolute;
        top: 106px;
        right: 23px;
        z-index: -99;
    }

}

@media (max-width: 575.98px) {
    img {
        width: 199px;
    }

    h1 {
        font-size: 45px;
    }

    h2 {
        font-size: 22px;
    }

    h3 {
        font-size: 14px;
    }

    .golden-btn {
        font-size: 10px;
    }

    p.logo-r::before {
        content: "";
        display: block;
        width: 317px;
        height: 85px;
        background-image: url(uploads/video/logo-thai.png);
        position: absolute;
        background-position: center right;
        position: absolute;
        top: 125px;
        right: 29px;
        z-index: -99;
    }
}

@media (min-width: 1366px) {
    img {
        width: 350px;
    }
}

@media (min-width: 1400px) {
    img {
        width: 450px;
    }

    p.logo-r::before {
        content: "";
        display: block;
        width: 330px;
        height: 85px;
        background-image: url(uploads/video/logo-thai.png);
        position: absolute;
        background-position: center right;
        position: absolute;
        top: 152px;
        right: 95px;
        z-index: -99;
    }

}

.video-con {
    min-width: 100%;
    min-height: 100vh;
    height: auto;
}
</style>

<body>
    <div class="con-video">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="video-con">
            <source src="<?=base_url('uploads/video/video-bg-violet.mp4')?>" type="video/mp4">
        </video>
    </div>
    <div id="main" class="container ">
        <div class="row">
            <div class="col-md-6 order-1 text-center align-self-center">
                <div class="">
                    <h2> เนื่องในโอกาสวันเฉลิมพระชนมพรรษา <br>
                        สมเด็จพระนางเจ้า ฯ พระบรมราชินี<br>
                        ๓ มิถุนายน ๒๕๖๓
                    </h2><br>

                    <p class="logo-r">
                        <h1>ทรงพระเจริญ</h1>
                    </p>
                    <H3 class="mt-5"> ด้วยเกล้าด้วยกระหม่อม ขอเดชะ ข้าพระพุทธเจ้า ผู้บริหาร คณะครู บุคลากรทางการศึกษา
                        นักเรียนและผู้ปกครอง <br> โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</H3>
                </div>
                <div style="">
                    <button onclick="sigewebsite()" class="golden-btn">เข้าสู่เว็บไซต์</button>
                </div>
            </div>
            <div class="col-md-6 order-md-1 text-center align-self-center">
                <img class="img-fluid" src="<?=base_url('uploads/video/logo-mother.png')?>" alt="">
            </div>

        </div>
    </div>


</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script>
function sigewebsite() {
    window.location.href = "<?=base_url('welcome')?>";
}
</script>

</html>