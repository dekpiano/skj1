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
    <meta property="og:image" content="" />
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

header {
    width: 100%;
    float: left;
    position: sticky;
    top: 0;
    z-index: 999999;
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
</style>

<body style="background-color: #f8f9fa;">

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
            style="background: linear-gradient(-90deg, #ff00007a, deeppink);">
            <div class="container">
                <a style="width: 79%;" class="navbar-brand d-block d-sm-none" href="<?=base_url()?>">
                    <img class="img-fluid" src="<?=base_url()?>asset/user/img/logo_nav2.png" alt="">
                </a>


                <button class="navbar-toggler justify-content-end align-items-center" type="button"
                    data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="icofont-university"></i> เกี่ยวกับโรงเรียน</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <?php foreach ($Allabout as $key => $v_about) : ?>
                                <a class="dropdown-item" href="<?=base_url('AboutSchool/').$v_about->about_id;?>"><i
                                        class="icofont-dotted-right"></i> <?=$v_about->about_menu;?></a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="icofont-teacher"></i> บุคลากร</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="<?=base_url('Personnel/คณะผู้บริหาร')?>"><i
                                        class="icofont-dotted-right"></i> คณะผู้บริหาร</a>
                                <?php foreach ($lear as $key => $v_lear) : ?>
                                <a class="dropdown-item" href="<?=base_url('Personnel/').$v_lear->lear_namethai?>"><i
                                        class="icofont-dotted-right"></i>
                                    กลุ่มสาระการเรียนรู้<?=$v_lear->lear_namethai?></a>
                                <?php endforeach; ?>
                                <a class="dropdown-item" href="#about"><i class="icofont-dotted-right"></i>
                                    ฝ่ายสนับสนุนการสอน</a>
                            </div>
                        </li>
                        <li class="nav-item animated  heartBeat delay-1s">
                            <a class="text-white nav-link" href="<?=base_url('Admissions?a=1');?>"><i
                                    class="icofont-download "></i> รับสมัครนักเรียน</a>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li><a class="text-white btn" href="<?=base_url('Contact');?>"><i class="icofont-id-card"></i> ติดต่อเรา</a></li>
                        <li><a href="<?=base_url('login')?>" class="text-white btn btn-outline-light my-2 my-sm-0"><i
                                    class="icofont-lock"></i> Login</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    </nav><!-- .nav-menu -->
    <style type="text/css">
    .heartBeat {
        animation-duration: 5s;
        animation-delay: 5s;
        animation-iteration-count: infinite;
    }
    </style>