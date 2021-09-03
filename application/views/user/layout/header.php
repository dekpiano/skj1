<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?> | SKJ</title>
    <meta name="description" content="<?= $description ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        content="โรงเรียนสวนกุหลาบวิทยาลัย,โรงเรียน,สวนกุหลาบ,จิรประวัติ,นครสวรรค์,สวนกุหลาบจิรประวัติ,โรงเรียนสวนกุหลาบ"
        name="keywords">
    <link rel="profile" href="https://skj.ac.th">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />
    <meta name="author" content="Dekpiano" />

    <!-- Stylesheets -->
    <link href="<?=base_url();?>asset/user/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url();?>asset/user/css/main.css" rel="stylesheet">
    <link href="<?=base_url();?>asset/user/css/responsive.css" rel="stylesheet">

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <!-- <meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Lawa - Attorney & Legal Bootstrap 5 Template" />
	<meta property="og:url" content="PAGE_URL" />
	<meta property="og:site_name" content="SITE_NAME" /> -->
    <!-- For the og:image content, replace the # with a link of an image -->
    <!-- <meta property="og:image" content="#" />
	<meta property="og:description" content="LAWA - Law Firm is a free Bootstrap HTML Template for Lawyer." /> -->

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;700&family=EB+Garamond:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/asset/user/img/logo_fav.png" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>/asset/user/img/logo_fav.png" type="image/x-icon">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>/asset/user/img/logo_fav.png" />
    <link href="<?= base_url() ?>/asset/user/img/logo_fav.jpg" rel="apple-touch-icon">

    <!-- Structured Data  -->
    <script type="application/ld+json">
    {
        "@context": "http://skj.ac.th",
        "@type": "WebSite",
        "name": "SKJ",
        "url": "http://skj.ac.th"
    }
    </script>

</head>

<body style="font-family: sarabun;">

    <div class="page-wrapper"></div>

    <!-- Main Header-->
    <header class="main-header">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">

                    <!-- Top Left -->
                    <div class="top-left pull-left">
                        <div class="text">160 ม.1 นครสวรรค์ออก เมือง นครสวรรค์</div>
                    </div>

                    <!-- Top Right -->
                    <div class="top-right pull-right">
                        <!-- Info List -->
                        <ul class="info-list">
                            <li><a href="mailto:skjns160@skj.ac.th"> skjns160@skj.ac.th</a></li>
                            <li><a href="tel:056-009-667">056-009-667</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo"><a href="index.html"><img src="<?=base_url();?>asset/user/images/logo.png"
                                    alt="" title="" style="width: 180px;"></a></div>
                        <div class="logo-two"><a href="index.html"><img
                                    src="<?=base_url();?>asset/user/images/logo-2.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation left-nav clearfix">
                                <?php $Menu = $this->uri->segment(1);?>
                                    <li <?=$Menu==""?'class="current"':''?> ><a href="<?=base_url();?>">Home</a></li>
                                    <li class="dropdown"><a href="#">Service</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-detail.html">Service Detail</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="navigation right-nav clearfix">
                                <li <?=$Menu=="news"?'class="current"':''?>><a href="<?=base_url('news/all');?>">ข่าว SKJ</a></li>
                                   
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                            </div>

                        </nav>

                        <!-- Social Box -->
                        <ul class="social-box">
                            <li><a
                                    href="https://www.facebook.com/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B8%81%E0%B8%B8%E0%B8%AB%E0%B8%A5%E0%B8%B2%E0%B8%9A%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2-%E0%B8%88%E0%B8%B4%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%A7%E0%B8%B1%E0%B8%95%E0%B8%B4-%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%AA%E0%B8%A7%E0%B8%A3%E0%B8%A3%E0%B8%84%E0%B9%8C-230288483730783"><span
                                        class="icofont-facebook"></span></a></li>
                            <li><a href="#"><span class="icofont-brand-youtube"></span></a></li>

                        </ul>

                        <!-- Outer Box -->
                        <!-- <div class="outer-box">
                            <ul class="language-nav">
                                <li><a href="#">Eng</a></li>
                                <li><a href="#">Fra</a></li>
                            </ul>
                        </div> -->

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?=base_url();?>asset/user/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!--End Main Header -->
    <style>
    @media only screen and (max-width: 1023px) {
        .banner-section .swiper-slide {
            padding-top: 130px;
        }
    }

    @media (min-width: 1200px) {
        .banner-section .swiper-slide {
            padding-top: 220px;
        }

    }
    </style>