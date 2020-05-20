<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=$title?> | SKJ</title>
    <meta name="description" content="<?=$description;?>" />
    <meta
        content="โรงเรียนสวนกุหลาบวิทยาลัย,โรงเรียน,สวนกุหลาบ,จิรประวัติ,นครสวรรค์,สวนกุหลาบจิรประวัติ,โรงเรียนสวนกุหลาบ"
        name="keywords">
    <meta http-equiv="content-language" content="th" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 day" />
    <meta name="author" content="Dekpiano" />



    <meta property="og:url" content="<?=$full_url;?>" />
    <meta property="og:title" content="<?=$title?> | SKJ" />
    <meta property="og:description" content="<?=$description;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image"
        content="<?=@$news[0]->news_img == '' ? base_url('asset/user/img/banner_main.jpg') : base_url('uploads/news/').$news[0]->news_img;?>" />
    <link rel="image_src" href="images/content/content-37.png" />


    <!-- Favicons -->
    <link href="<?=base_url()?>/asset/user/img/logo_fav.png" rel="icon">
    <link href="<?=base_url()?>/asset/user/img/logo_fav.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?=base_url()?>/asset/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/asset/user/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/asset/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/asset/user/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/asset/user/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?=base_url()?>/asset/user/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url();?>asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url()?>/asset/user/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>/asset/user/css/circles.css" rel="stylesheet">
    <link href="<?=base_url()?>/asset/user/css/footerskj.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>asset/user/css/smartwizard/smart_wizard.min.css">
    <link rel="stylesheet" href="<?=base_url()?>asset/user/css/smartwizard/smart_wizard_theme_arrows.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165844207-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-165844207-1');
    </script>
</head>

<style type="text/css">
.dropdown:hover>.dropdown-menu {
    display: block;
}

html {
    min-height: 100%;
}

.dropdown>.dropdown-toggle:active {
    /*Without this, clicking will make it sticky*/
    pointer-events: none;
}

.f-nav{  /* To fix main menu container */
    z-index: 99;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
}

#breadcrumbs {
    padding-top: 250px;
}

.img-hover-zoom {
    overflow: hidden;
}

.img-hover-zoom--basic img {
    transition: transform .5s ease;
}

.img-hover-zoom--basic:hover img {
    transform: scale(1.5);
}

/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader {
    display: none;
}

.js #loader {
    display: block;
    position: absolute;
    left: 100px;
    top: 0;
}

.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(<?=base_url()?>asset/user/img/loder.gif) center no-repeat #fff;
}

/* adds some margin below the link sets  */
.navbar .dropdown-menu div[class*="col"] {
    margin-bottom: 1rem;
}

.navbar .dropdown-menu {
    border: none;
    background: #EEE;
}

/* breakpoint and up - mega dropdown styles */
@media screen and (min-width: 992px) {

    /* remove the padding from the navbar so the dropdown hover state is not broken */
    .navbar {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    /* remove the padding from the nav-item and add some margin to give some breathing room on hovers */
    .navbar .nav-item {
        padding: .5rem .5rem;
        margin: 0 .25rem;
    }

    /* makes the dropdown full width  */
    .navbar .dropdown {
        position: static;
    }

    .navbar .dropdown-menu {
        width: 100%;
        left: 0;
        right: 0;
        /*  height of nav-item  */
        top: 45px;

        display: block;
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.3s linear;

    }
    /* shows the dropdown menu on hover */
    .navbar .dropdown:hover .dropdown-menu,
    .navbar .dropdown .dropdown-menu:hover {
        display: block;
        visibility: visible;
        opacity: 1;
        transition: visibility 0s, opacity 0.3s linear;
    }

    .navbar .dropdown-menu {
        border: 1px solid rgba(0, 0, 0, .15);
        background-color: #fff;
    }

}

.bg_headertitel{
    background-image: url(http://desktop-asn26hl/skj/asset/user/img/bg_titleheader.png);
    background-repeat: no-repeat;
    background-position: bottom;
    bottom: 0;
}

.b-0 {
    bottom: 0;
}
.bg-shadow {
    background: rgba(76, 76, 76, 0);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(179, 171, 171, 0)), color-stop(49%, rgba(48, 48, 48, 0.37)), color-stop(100%, rgba(19, 19, 19, 0.8)));
    background: linear-gradient(to bottom, rgba(179, 171, 171, 0) 0%, rgba(48, 48, 48, 0.71) 49%, rgba(19, 19, 19, 0.8) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
}
.top-indicator {
    right: 0;
    top: 1rem;
    bottom: inherit;
    left: inherit;
    margin-right: 1rem;
}
.overflow {
    position: relative;
    overflow: hidden;
}
.zoom img {
    transition: all 0.2s linear;
}
.zoom:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
</style>

<body style="background-color: #f8f9fa;">
    <!-- LOADER -->
    <div class="se-pre-con"></div>

    <!-- end loader -->
    <div class="d-sm-block ">

        <div class="container d-none d-sm-block d-lg-block ">

            <header class="blog-header py-4">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-7 pt-1">
                        <div class="logo mr-auto">
                            <a class="e" href="<?=base_url()?>">
                                <img class="img-fluid" src="<?=base_url()?>asset/user/img/logo_nav1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-2 text-center">

                    </div>
                    <div class="col-3 d-flex justify-content-end align-items-center">

                    </div>
                </div>
                <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </header>
        </div>

        <header>


            <nav class="navbar navbar-expand-md navbar-dark"
                style="background: linear-gradient(-90deg, #ff00007a, deeppink);border-bottom: 5px solid #249ffd;">
                <div class="container">
                    <a style="width: 79%;" class="navbar-brand d-block d-sm-none" href="<?=base_url()?>">
                        <img class="img-fluid" src="<?=base_url()?>asset/user/img/logo_nav2.png" alt="">
                    </a>
                    <button class="navbar-toggler justify-content-end align-items-center" type="button"
                        data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style="width: 18px;"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item dropdown">
                                <a class="text-white nav-link dropdown-toggle" href="#" id="dropdown01"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="icofont-university"></i> เกี่ยวกับโรงเรียน</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <div class="row ">
                                        <?php foreach ($Allabout as $key => $v_about) : ?>
                                        <div class="col-md-4 ">
                                            <a class="dropdown-item"
                                                href="<?=base_url('AboutSchool/').$v_about->about_id;?>"><i
                                                    class="icofont-dotted-right"></i> <?=$v_about->about_menu;?></a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="text-white nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="icofont-teacher"></i> บุคลากร</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <a class="dropdown-item" href="<?=base_url('Personnel/คณะผู้บริหาร')?>"><i
                                                    class="icofont-dotted-right"></i> คณะผู้บริหาร</a>
                                        </div>
                                        <?php foreach ($lear as $key => $v_lear) : ?>
                                        <div class="col-md-4 ">
                                            <a class="dropdown-item"
                                                href="<?=base_url('Personnel/').$v_lear->lear_namethai?>"><i
                                                    class="icofont-dotted-right"></i>
                                                กลุ่มสาระการเรียนรู้<?=$v_lear->lear_namethai?>
                                            </a>
                                        </div>
                                        <?php endforeach; ?>
                                        <div class="col-md-4 ">
                                            <a class="dropdown-item" href="#about"><i class="icofont-dotted-right"></i>
                                                ฝ่ายสนับสนุนการสอน</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="text-white nav-link" href="<?=base_url('news/all');?>">
                                    <i class="icofont-newspaper"></i> ข่าวสาร สกจ</a>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="text-white nav-link" href="<?=base_url('Admissions?a=1');?>"><i
                                        class="icofont-flame-torch"></i> กิจกรรม</a>
                                </a>
                            </li>
                            <li class="nav-item animated heartBeat" >
                                <a class="text-white nav-link" href="<?=base_url('Admissions?a=1');?>">
                                    <i class="icofont-mega-phone"></i> รับสมัครนักเรียน</a>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li><a class="text-white btn" href="<?=base_url('Contact');?>"><i
                                        class="icofont-id-card"></i>
                                    ติดต่อเรา</a></li>
                            <li><a href="<?=base_url('login')?>"
                                    class="text-white btn btn-outline-light my-2 my-sm-0"><i class="icofont-lock"></i>
                                    Login</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
    </div>
    <style type="text/css">
    .heartBeat {
        animation-duration: 5s;
        animation-delay: 5s;
        animation-iteration-count: infinite;
    }
    </style>