<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>วันเฉลิมพระชนมพรรษา สมเด็จพระเจ้าอยู่หัวมหาวชิราลงกรณบดินทรเทพยวรางกูร 28 กรกฎาคม </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content=" โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์">
    <meta name="author" content="ทีมงานครูคอม,Dekpiano">

    <meta property="og:url" content="https://skj.ac.th/">
    <meta property="og:title"
        content="วันเฉลิมพระชนมพรรษา สมเด็จพระเจ้าอยู่หัวมหาวชิราลงกรณบดินทรเทพยวรางกูร 28 กรกฎาคม">
    <meta property="og:description"
        content="โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://skj.ac.th/uploads/video/logo-father.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
        width: 400px;
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
}

@media (max-width: 575.98px) {
    img {
        width: 300px;
    }

    h1 {
        font-size: 30px;
    }

    h2 {
        font-size: 16px;
    }

    h3 {
        font-size: 14px;
    }

    .golden-btn {
        font-size: 10px;
    }

    .btn-father {
        font-size: 10px;
    }
}

@media (min-width: 1366px) {
    img {
        width: 540px;
    }
}

@media (min-width: 1400px) {
    img {
        width: 700px;
    }

    .btn-father {
        font-size: 24px;
    }
}

@media (min-width: 1200px) {
    img {
        width: 450px;
    }

    .btn-father {
        font-size: 16px;
    }

    h1 {
        font-size: 44px;
    }

    h2 {
        font-size: 26px;
    }

    h3 {
        font-size: 24px;
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
            <source src="<?= base_url('uploads/video/video-bg-gold.mp4') ?>" type="video/mp4">
        </video>
    </div>

    <div id="main">
        <div style="align-self: center;text-align: center;">
            <img class="img-fluid " data-aos="zoom-in-down" data-aos-delay="50" data-aos-offset="200" data-aos-duration="500" src="<?= base_url(
                'uploads/video/logo-father.png'
            ) ?>" alt="">
            <div style="text-align: center;">
                <h2 data-aos="zoom-in" data-aos-delay="500">
                    สมเด็จพระเจ้าอยู่หัวมหาวชิราลงกรณ
                    บดินทรเทพยวรางกูร
                    รัชกาลที่ ๑๐ <br>
                </h2><br>
                <h1 data-aos="zoom-in-up" data-aos-delay="1000"  data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">ทรงพระเจริญ</h1><br>

                <H3 data-aos="zoom-in" data-aos-delay="500"> ด้วยเกล้าด้วยกระหม่อม ขอเดชะ
                    ข้าพระพุทธเจ้า ผู้บริหาร คณะครู บุคลากรทางการศึกษา
                    นักเรียนและผู้ปกครอง <br> โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</H3>

            </div>
            <div style="text-align-last: center;" class="mt-3">
                <button onclick="forking()" target="_blank"
                    class="btn btn-outline-warning btn-father " >ลงนามถวายพระพร</button>
                    <button onclick="sigewebsite()"
                    class="btn btn-warning " >เข้าสู่เว็บไซต์</button>
            </div>
            <div style="text-align-last: center;">
                
            </div>

        </div>
        <br>

    </div>
    <!-- <button onclick="sigewebsite()" class="golden-btn" style="font-size:1.6em;">เข้าสู่เว็บไซต์</button> -->
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
    window.location.href = "<?= base_url('welcome') ?>";
}

function forking() {
    window.location.href = "https://wellwishes.royaloffice.th/";
}

</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</html>