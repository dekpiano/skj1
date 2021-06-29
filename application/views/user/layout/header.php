<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?> | SKJ</title>
    <meta name="description" content="<?= $description ?>" />
    <meta
        content="โรงเรียนสวนกุหลาบวิทยาลัย,โรงเรียน,สวนกุหลาบ,จิรประวัติ,นครสวรรค์,สวนกุหลาบจิรประวัติ,โรงเรียนสวนกุหลาบ"
        name="keywords">
    <meta http-equiv="content-language" content="th" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 day" />
    <meta name="author" content="Dekpiano" />
    <meta property="og:url" content="<?= $full_url ?>" />
    <meta property="og:title" content="<?= $title ?> | SKJ" />
    <meta property="og:description" content="<?= $description ?>" />
    <meta property="og:type" content="website" />
    <link rel="image_src" href="images/content/content-37.png" />

    <?php if($this->uri->segment(1)=="SkjClassroom"): ?>
    <meta property="og:image" content="<?=base_url('asset/user/img/SkjClassroom/bg.png');?>" />
    <?php elseif($this->uri->segment(1)=="Email"): ?>
    <meta property="og:image" content="<?=base_url('asset/user/img/BannerEmailSchool.PNG');?>" />
    <?php else: ?>
    <meta property="og:image"
        content="<?= @$news[0]->news_img == '' ? base_url('asset/user/img/banner_main.jpg'): base_url('uploads/news/') . $news[0]->news_img ?>" />
    <?php endif; ?>




    <!-- Favicons -->
    <link href="<?= base_url() ?>/asset/user/img/logo_fav.png" rel="icon">
    <link href="<?= base_url() ?>/asset/user/img/logo_fav.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/asset/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/asset/user/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/asset/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/asset/user/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/asset/user/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>/asset/user/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/asset/user/css/style.css?v=1001" rel="stylesheet">
    <link href="<?= base_url() ?>/asset/user/css/circles.css" rel="stylesheet">
    <link href="<?= base_url() ?>/asset/user/css/footerskj.css" rel="stylesheet">
    <link href="<?= base_url() ?>/asset/user/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>asset/user/css/smartwizard/smart_wizard.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>asset/user/css/smartwizard/smart_wizard_theme_arrows.min.css">
    <link href="<?= base_url() ?>/asset/css/snowy.css" rel="stylesheet">


    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v9.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="230288483730783" theme_color="#e73e8c"
        logged_in_greeting="สวัสดี สวนกุหลาบวิทยาลัย (จิรประวัติ)  นครสวรรค์ ยินดีต้อนรับ มีอะไรให้เราช่่วย "
        logged_out_greeting="สวัสดี สวนกุหลาบวิทยาลัย (จิรประวัติ)  นครสวรรค์ ยินดีต้อนรับ มีอะไรให้เราช่่วย ">
    </div>
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
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
<style type="text/css">
.dropdown:hover>.dropdown-menu {
    display: block;
}

html {
    min-height: 100%;

}

body {
    background-color: #fbfbfd;
}

.text-overflow {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}

* {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
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
    background: url(<?= base_url() ?>asset/user/img/loder.gif) center no-repeat #fff;
}


a.img,
.separator a {
    margin-left: 0 !important;
    margin-right: 0 !important
}

.separator {
    max-height: 500px;
    overflow: hidden;
    margin: 0 auto 25px auto
}



/* Responsive Mega Menu */
.header_area {
    background: #3243db;
    position: fixed;
    width: 100%;
    margin: auto;
    top: 0;
    right: 0;
    left: 0;
    z-index: 99;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05)
}

.navigation {
    width: 100%;
    height: 70px;
    display: table;
    position: relative;
    font-family: inherit
}

.navigation * {
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent
}

.navigation-portrait {
    height: 48px
}

.navigation-fixed {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 19998
}

.navigation-hidden {
    width: 0 !important;
    height: 0 !important;
    margin: 0 !important;
    padding: 0 !important
}

.align-to-right {
    float: right
}

.nav-header {
    float: left
}

.navigation-hidden .nav-header {
    display: none
}

.nav-brand {
    line-height: 70px;
    padding: 0;
    color: #fff;
    font-size: 24px;
    text-decoration: none;
    font-family: Pattaya;
}

.nav-brand:hover,
.nav-brand:focus {
    color: #249ffd;
    text-shadow: 2px 2px 4px #000000;
}

.navigation-portrait .nav-brand {
    font-size: 18px;
    line-height: 48px
}

.nav-logo>img {
    height: 48px;
    margin: 11px auto;
    padding: 0 15px;
    float: left
}

.nav-logo:focus>img {
    outline: initial
}

.navigation-portrait .nav-logo>img {
    height: 36px;
    margin: 6px auto 6px 15px;
    padding: 0
}

.nav-toggle {
    width: 30px;
    height: 30px;
    padding: 6px 2px 0;
    position: absolute;
    top: 50%;
    margin-top: -14px;
    right: 0;
    display: none;
    cursor: pointer
}

.nav-toggle:before {
    content: "";
    position: absolute;
    width: 24px;
    height: 2px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 .5em 0 0 #fff, 0 1em 0 0 #fff
}

.navigation-portrait .nav-toggle {
    display: block
}

.navigation-portrait .nav-menus-wrapper {
    width: 320px;
    height: 100%;
    top: 0;
    left: -400px;
    position: fixed;
    background-color: #fff;
    z-index: 20000;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
    transition-duration: .2s;
    transition-timing-function: ease
}

.navigation-portrait .nav-menus-wrapper.nav-menus-wrapper-right {
    left: auto;
    right: -400px
}

.navigation-portrait .nav-menus-wrapper.nav-menus-wrapper-open {
    left: 0;
    height: 100vh;
}

.navigation-portrait .nav-menus-wrapper.nav-menus-wrapper-right.nav-menus-wrapper-open {
    left: auto;
    right: 0
}

.nav-menus-wrapper-close-button {
    width: 30px;
    height: 30px;
    margin: 10px 7px;
    display: none;
    float: right;
    color: #343a40;
    font-size: 20px;
    cursor: pointer
}

.navigation-portrait .nav-menus-wrapper-close-button {
    display: block
}

.nav-menu {
    margin: 0;
    padding: 0;
    list-style: none;
    line-height: normal;
    font-size: 0
}

.navigation-portrait .nav-menu {
    width: 100%
}

.navigation-landscape .nav-menu.nav-menu-centered {
    float: none;
    text-align: center
}

.navigation-landscape .nav-menu.nav-menu-centered>li {
    float: none
}

.nav-menu>li {
    display: inline-block;
    float: left;
    text-align: left;
}

.navigation-portrait .nav-menu>li {
    width: 100%;
    position: relative;
    border-top: solid 1px #f0f0f0
}

.navigation-portrait .nav-menu>li:last-child {
    border-bottom: solid 1px #f0f0f0
}

.nav-menu+.nav-menu>li:first-child {
    border-top: none
}

.nav-menu>li>a {
    padding: 26px 15px;
    display: inline-block;
    text-decoration: none;
    font-size: 14px;
    color: #fff;
    transition: color .3s, background .3s
}

.navigation-portrait .nav-menu>li>a {
    width: 100%;
    height: auto;
    padding: 12px 15px 12px 26px
}

.nav-menu>li:hover>a,
.nav-menu>li.active>a,
.nav-menu>li.focus>a {
    background: rgba(0, 0, 0, 0.1);
    color: #fff
}

.nav-menu>li>a>i,
.nav-menu>li>a>[class*=ion-] {
    width: 18px;
    height: 16px;
    line-height: 16px;
    transform: scale(1.4)
}

.nav-menu>li>a>[class*=ion-] {
    width: 16px;
    display: inline-block;
    transform: scale(1.8)
}

.navigation-portrait .nav-menu.nav-menu-social {
    width: 100%;
    text-align: center
}

.nav-menu.nav-menu-social>li {
    text-align: center;
    float: none;
    border: none !important
}

.navigation-portrait .nav-menu.nav-menu-social>li {
    width: auto
}

.nav-menu.nav-menu-social>li>a>[class*=ion-] {
    font-size: 12px
}

.nav-menu.nav-menu-social>li>a>.fa {
    font-size: 14px
}

.navigation-portrait .nav-menu.nav-menu-social>li>a {
    padding: 15px
}

/* 
.submenu-indicator {
    margin-left: 8px;
    margin-top: 4px;
    float: right;
    transition: all .2s
}

.navigation-portrait .submenu-indicator {
    width: 54px;
    height: 44px;
    margin-top: 0;
    position: absolute;
    top: 0;
    right: 0;
    text-align: center;
    z-index: 20000
}

.submenu-indicator-chevron {
    height: 6px;
    width: 6px;
    display: block;
    border-style: solid;
    border-width: 0 1px 1px 0;
    border-color: transparent #fff #fff transparent;
    transform: rotate(45deg);
    transition: border .2s
}

.navigation-portrait .submenu-indicator-chevron {
    border-color: transparent #999 #999 transparent;
    position: absolute;
    top: 18px;
    left: 24px
}

.navigation-portrait:hover .submenu-indicator-chevron {
    border-color: transparent #999 #999 transparent
}

.navigation-portrait .submenu-indicator.submenu-indicator-up {
    transform: rotate(-180deg)
}

.nav-dropdown>li .submenu-indicator-chevron {
    border-color: transparent #999 #999 transparent
} */

.nav-overlay-panel {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: fixed;
    display: none;
    z-index: 19999
}

.no-scroll {
    width: 100%;
    height: 100%;
    overflow: hidden
}

.nav-search {
    height: 70px;
    float: right;
    z-index: 19998
}

.navigation-portrait .nav-search {
    height: 48px;
    padding: 0 10px;
    margin-right: 32px
}

.navigation-hidden .nav-search {
    display: none
}

.nav-search-button {
    width: 70px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.1)
}

.navigation-portrait .nav-search-button {
    width: 50px;
    height: 48px;
    line-height: 46px;
    font-size: 22px
}

.nav-search-icon {
    width: 14px;
    height: 14px;
    margin: 2px 8px 8px 4px;
    display: inline-block;
    vertical-align: middle;
    position: relative;
    color: #fff;
    text-align: left;
    text-indent: -9999px;
    border: 2px solid;
    border-radius: 50%;
    transform: rotate(-45deg)
}

.nav-search-icon:after,
.nav-search-icon:before {
    content: '';
    pointer-events: none
}

.nav-search-icon:before {
    width: 2px;
    height: 11px;
    top: 11px;
    position: absolute;
    left: 50%;
    border-radius: 0 0 1px 1px;
    box-shadow: inset 0 0 0 32px;
    transform: translateX(-50%)
}

.nav-search-button:hover .nav-search-icon {
    color: #fff
}

.nav-search>form {
    width: 100%;
    height: 100%;
    padding: 0;
    display: none;
    position: absolute;
    left: 0;
    top: 0;
    background-color: #3243db;
    z-index: 99
}

.nav-search-inner {
    width: 70%;
    height: 70px;
    margin: auto;
    display: table
}

.navigation-portrait .nav-search-inner {
    height: 48px
}

.nav-search-inner input[type="text"],
.nav-search-inner input[type="search"] {
    height: 70px;
    width: 100%;
    margin: 0;
    padding: 0 12px;
    font-size: 22px;
    text-align: center;
    color: #fff;
    outline: none;
    line-height: 70px;
    border: none;
    background-color: transparent;
    transition: all .3s
}

.navigation-portrait .nav-search-inner input[type="text"],
.navigation-portrait .nav-search-inner input[type=search] {
    height: 48px;
    font-size: 18px;
    line-height: 48px
}

.nav-search input[type="search"]::placeholder {
    color: #fff;
    opacity: 1
}

.nav-search input[type="search"]:-ms-input-placeholder {
    color: #fff
}

.nav-search input[type="search"]::-ms-input-placeholder {
    color: #fff
}

.nav-search-close-button {
    width: 28px;
    height: 28px;
    display: block;
    position: absolute;
    right: 20px;
    top: 20px;
    line-height: normal;
    outline: none;
    color: rgba(255, 255, 255, .5);
    font-size: 20px;
    cursor: pointer;
    text-align: center
}

.navigation-portrait .nav-search-close-button {
    top: 10px;
    right: 14px
}

.nav-button {
    margin: 18px 15px 0;
    padding: 8px 14px;
    display: inline-block;
    color: #fff;
    font-size: 14px;
    text-align: center;
    text-decoration: none;
    border-radius: 4px
}

.nav-button:hover,
.nav-button:focus {
    color: #fff;
    text-decoration: none
}

.navigation-portrait .nav-button {
    width: calc(100% - 52px);
    margin: 17px 26px
}

.nav-text {
    margin: 25px 15px;
    display: inline-block;
    color: #343a40;
    font-size: 14px
}

.navigation-portrait .nav-text {
    width: calc(100% - 52px);
    margin: 12px 26px 0
}

.navigation-portrait .nav-text+ul {
    margin-top: 15px
}

.nav-dropdown {
    min-width: 180px;
    margin: 0;
    padding: 0;
    display: none;
    position: absolute;
    list-style: none;
    z-index: 98;
    white-space: nowrap
}

.navigation-portrait .nav-dropdown {
    width: 100%;
    position: static;
    left: 0
}

.nav-dropdown .nav-dropdown {
    left: 100%
}

.nav-menu>li>.nav-dropdown {
    border-top: solid 1px #f0f0f0
}

.nav-dropdown>li {
    width: 100%;
    float: left;
    clear: both;
    position: relative;
    text-align: left
}

.nav-dropdown>li>a {
    width: 100%;
    padding: 16px 20px;
    display: inline-block;
    text-decoration: none;
    float: left;
    font-size: 13px;
    color: #343a40;
    background-color: #fdfdfd
}

.nav-dropdown>li:hover>a,
.nav-dropdown>li.focus>a {
    color: deeppink;
}

.nav-dropdown.nav-dropdown-left {
    right: 0
}

.nav-dropdown>li>.nav-dropdown-left {
    left: auto;
    right: 100%
}

.navigation-landscape .nav-dropdown.nav-dropdown-left>li>a {
    text-align: right
}

.navigation-portrait .nav-dropdown>li>a {
    padding: 12px 20px 12px 30px
}

.navigation-portrait .nav-dropdown>li>ul>li>a {
    padding-left: 50px
}

.navigation-portrait .nav-dropdown>li>ul>li>ul>li>a {
    padding-left: 70px
}

.navigation-portrait .nav-dropdown>li>ul>li>ul>li>ul>li>a {
    padding-left: 90px
}

.navigation-portrait .nav-dropdown>li>ul>li>ul>li>ul>li>ul>li>a {
    padding-left: 110px
}

.nav-dropdown .submenu-indicator {
    right: 15px;
    top: 10px;
    position: absolute
}

.navigation-portrait .nav-dropdown .submenu-indicator {
    right: 0;
    top: 0
}

.nav-dropdown .submenu-indicator .submenu-indicator-chevron {
    transform: rotate(-45deg)
}

.navigation-portrait .nav-dropdown .submenu-indicator .submenu-indicator-chevron {
    transform: rotate(45deg)
}

.nav-dropdown>li:hover>a .submenu-indicator-chevron,
.nav-dropdown>.focus>a .submenu-indicator-chevron {
    border-color: transparent #27ae60 #27ae60 transparent
}

.navigation-landscape .nav-dropdown.nav-dropdown-left .submenu-indicator {
    left: 10px
}

.navigation-landscape .nav-dropdown.nav-dropdown-left .submenu-indicator .submenu-indicator-chevron {
    transform: rotate(135deg)
}

.nav-dropdown-horizontal {
    width: 100%;
    left: 0;
    background-color: #fdfdfd;
    border-top: solid 1px #f0f0f0
}

.nav-dropdown-horizontal .nav-dropdown-horizontal {
    width: 100%;
    top: 100%;
    left: 0
}

.navigation-portrait .nav-dropdown-horizontal .nav-dropdown-horizontal {
    border-top: none
}

.nav-dropdown-horizontal>li {
    width: auto;
    clear: none;
    position: static
}

.navigation-portrait .nav-dropdown-horizontal>li {
    width: 100%
}

.nav-dropdown-horizontal>li>a {
    position: relative
}

.nav-dropdown-horizontal .submenu-indicator {
    height: 18px;
    top: 11px;
    transform: rotate(90deg)
}

.navigation-portrait .nav-dropdown-horizontal .submenu-indicator {
    height: 42px;
    top: 0;
    transform: rotate(0deg)
}

.navigation-portrait .nav-dropdown-horizontal .submenu-indicator.submenu-indicator-up {
    transform: rotate(-180deg)
}

.megamenu-panel {
    width: 100%;
    padding: 15px;
    display: none;
    position: absolute;
    font-size: 14px;
    z-index: 98;
    text-align: left;
    color: inherit;
    border-top: solid 1px #f0f0f0;
    background-color: #fff;
    box-shadow: 0 15px 20px -5px rgba(0, 0, 0, .2)
}

.navigation-portrait .megamenu-panel {
    padding: 25px;
    position: static;
    display: block
}

.megamenu-panel [class*=container] {
    width: 100%
}

.megamenu-panel [class*="container"] [class*="col-"] {
    padding: 0
}

.megamenu-panel-half {
    width: 50%
}

.megamenu-panel-quarter {
    width: 25%
}

.navigation-portrait .megamenu-panel-half,
.navigation-portrait .megamenu-panel-quarter {
    width: 100%
}

.megamenu-panel-row {
    width: 100%
}

.megamenu-panel-row:before,
.megamenu-panel-row:after {
    display: table;
    content: "";
    line-height: 0
}

.megamenu-panel-row:after {
    clear: both
}

.megamenu-panel-row [class*=col-] {
    display: block;
    min-height: 20px;
    float: left;
    margin-left: 3%
}

.megamenu-panel-row [class*=col-]:first-child {
    margin-left: 0
}

.navigation-portrait .megamenu-panel-row [class*=col-] {
    float: none;
    display: block;
    width: 100% !important;
    margin-left: 0;
    margin-top: 15px
}

.navigation-portrait .megamenu-panel-row:first-child [class*=col-]:first-child {
    margin-top: 0
}

.megamenu-panel-row .col-1 {
    width: 5.583333333333%
}

.megamenu-panel-row .col-2 {
    width: 14.166666666666%
}

.megamenu-panel-row .col-3 {
    width: 22.75%
}

.megamenu-panel-row .col-4 {
    width: 31.333333333333%
}

.megamenu-panel-row .col-5 {
    width: 39.916666666667%
}

.megamenu-panel-row .col-6 {
    width: 48.5%
}

.megamenu-panel-row .col-7 {
    width: 57.083333333333%
}

.megamenu-panel-row .col-8 {
    width: 65.666666666667%
}

.megamenu-panel-row .col-9 {
    width: 74.25%
}

.megamenu-panel-row .col-10 {
    width: 82.833333333334%
}

.megamenu-panel-row .col-11 {
    width: 91.416666666667%
}

.megamenu-panel-row .col-12 {
    width: 100%
}

.megamenu-tabs {
    width: 100%;
    float: left;
    display: block
}

.megamenu-tabs-nav {
    width: 20%;
    margin: 0;
    padding: 0;
    float: left;
    list-style: none
}

.navigation-portrait .megamenu-tabs-nav {
    width: 100%
}

.megamenu-tabs-nav>li>a {
    width: 100%;
    padding: 10px 16px;
    float: left;
    font-size: 13px;
    text-decoration: none;
    color: #343a40;
    border: solid 1px #eff0f2;
    outline: 0;
    background-color: #fff
}

.megamenu-tabs-nav>li.active a,
.megamenu-tabs-nav>li:hover a {
    background-color: #f5f5f5
}

.megamenu-tabs-pane {
    width: 80%;
    min-height: 30px;
    padding: 20px;
    float: right;
    display: none;
    font-size: 13px;
    color: #343a40;
    border: solid 1px #eff0f2;
    background-color: #fff
}

.megamenu-tabs-pane.active {
    display: block
}

.navigation-portrait .megamenu-tabs-pane {
    width: 100%
}

.megamenu-lists {
    width: 100%;
    display: table
}

.megamenu-list {
    width: 100%;
    margin: 0 0 15px;
    padding: 0;
    display: inline-block;
    float: left;
    list-style: none
}

.megamenu-list:last-child {
    margin: 0;
    border: none
}

.navigation-landscape .megamenu-list {
    margin: -15px 0;
    padding: 20px 0;
    border-right: solid 1px #f0f0f0
}

.navigation-landscape .megamenu-list:last-child {
    border: none
}

.megamenu-list>li>a {
    width: 100%;
    padding: 10px 15px;
    display: inline-block;
    color: #343a40;
    text-decoration: none;
    font-size: 13px
}

.megamenu-list>li>a:hover {
    background-color: #fc1481;
    color: #fff
}

.megamenu-list>li.megamenu-list-title>a {
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
    color: #343a40
}

.megamenu-list>li.megamenu-list-title>a:hover {
    background-color: transparent
}

.navigation-landscape .list-col-2 {
    width: 50%
}

.navigation-landscape .list-col-3 {
    width: 33%
}

.navigation-landscape .list-col-4 {
    width: 25%
}

.navigation-landscape .list-col-5 {
    width: 20%
}

.nav-dropdown>li>a {
    color: #343a40;
    padding: 10px 20px;
    border-bottom: 1px solid #f6f6f6
}

.nav-dropdown>li>a:hover,
.nav-dropdown>li>a:focus {
    color: #f7146b
}

.main_header_area.sticky {
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #fff;
    z-index: 9999;
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1)
}

.transparent-menu {
    position: absolute;
    width: 100%;
    left: 0;
    top: 0;
    z-index: 99
}

.navigation-portrait .nav-menu>li>a {
    color: #222;
    width: 100%;
    height: auto;
    padding: 10px 10px 10px 30px
}

/* Media Query Mega Menu */
@media only screen and (min-width:320px) and (max-width:767px) {

    .nav-dropdown>li>a,
    .megamenu-list>li>a {
        width: 65%
    }
}

@media (min-width:576px) {
    .container {
        max-width: 540px
    }
}

@media (min-width:768px) {
    .container {
        max-width: 720px
    }
}

@media (min-width:992px) {
    .container {
        max-width: 960px
    }
}

@media (min-width:1200px) {
    .container {
        max-width: 1140px
    }
}

.slideUp {
    -webkit-transform: translateY(-100px);
    transform: translateY(-100px);
    transition: transform .5s ease-out;
}

.slideDown {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    transition: transform .5s ease-out;
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

@media (min-width: 300px) {
    a.nav-brand>img {
        width: 30px;
    }

    .bg_headertitel {
        background-image: url(<?= base_url(
 'asset/user/img/bg_titleheader.png'
            ) ?>);
        background-repeat: no-repeat;
        background-position: bottom;
        bottom: 0;
        margin-top: 60px;
    }
}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 992px) {
    a.nav-brand>img {
        width: 50px;
    }

    .bg_headertitel {
        background-image: url(<?= base_url(
 'asset/user/img/bg_titleheader.png'
            ) ?>);
        background-repeat: no-repeat;
        background-position: bottom;
        bottom: 0;
        margin-top: 75px;
    }
}

@media (min-width: 576px) {
    .content-about {
        margin-top: 4rem !important;
    }
}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .content-about {
        margin-top: 8rem !important;
    }
}


.menu a {
    font-size: 22px;
    text-transform: uppercase;
    text-decoration: none;
    color: #fff;
    display: block;
    position: relative;
    padding: 4px 0;
}

.menu a::before {
    content: "";
    width: 100%;
    height: 4px;
    position: absolute;
    left: 0;
    bottom: 0;
    background: #fff;
    transition: 0.5s transform ease;
    transform: scale3d(0, 1, 1);
    transform-origin: 0 50%;
}

.menu a:hover::before {
    transform: scale3d(1, 1, 1);
}

.menu-1 a::before {
    background: #E91E63;
    transform-origin: 100% 50%;
}

.menu-1 a:hover::before {
    transform-origin: 0 50%;
}

.menu-2 a::before {
    background: #EC407A;
}

.menu-3 a::before {
    transform-origin: 50% 50%;
    background: #F06292;
}

.menu-4 a::before {
    transform-origin: 100% 50%;
    background: #EC407A;
}

.menu-5 a::before {
    background: #E91E63;
    transform-origin: 0 50%;
}

.menu-5 a:hover::before {
    transform-origin: 100% 50%;
}

.nav-menu>li>a {
    margin: 11px 3px;
    padding: 6px 7px;
    text-align: center;
    min-width: 70px;
}


.box_shadow {
    border-top: 15px solid #fa1476;
    /* box-shadow: 1px 5px 11px #58585899; */
    -webkit-box-shadow: 0px 4px 12px 2px rgba(153, 153, 153, 1);
    -moz-box-shadow: 0px 4px 12px 2px rgba(153, 153, 153, 1);
    box-shadow: 0px 4px 12px 2px rgba(153, 153, 153, 1);
}
</style>

<body>
    <!-- LOADER -->
    <div class="se-pre-con"></div>

    <!-- end loader -->
    <div class="d-sm-block bg-top">


        <header class="header_area" id="header_new">
            <div class="main_header_area animated"
                style="background: linear-gradient(-90deg, #ff00007a, deeppink);border-bottom: 5px solid #249ffd;background-color:rgba(232, 38, 158, 1);">
                <div class="container">
                    <nav id="navigation1" class="navigation menu menu-3">
                        <!-- Logo Area Start -->
                        <div class="nav-header">
                            <a class="nav-brand" href="<?= base_url(
                                'welcome'
                            ) ?>">
                                <img loading="lazy" class="img-fluid" src="<?=base_url('uploads/logo/Logo-nav.png');?>"
                                    alt=""> สวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</a>
                            <div class="nav-toggle"></div>
                        </div>

                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu align-to-right">

                                <li><a href="#"><img style="width:31px;" src="<?=base_url();?>uploads/logo/rose.svg">
                                        <p>เกี่ยวกับ สกจ</p>
                                    </a>
                                    <ul class="nav-dropdown ">
                                        <?php foreach (
                                            $Allabout
                                            as $key => $v_about
                                        ): ?>
                                        <li>
                                            <a href="<?= base_url(
                                                'AboutSchool/'
                                            ) .
                                                $v_about->about_id ?>"><i class="icofont-dotted-right"></i>
                                                <?= $v_about->about_menu ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>

                                <li><a href="#"><i class="icofont-users-alt-5 icofont-2x"></i>
                                        <p>บุคลากร</p>
                                    </a>
                                    <ul class="nav-dropdown">
                                        <li> <a class="dropdown-item" href="<?= base_url(
                                            'Personnel/คณะผู้บริหาร'
                                        ) ?>"> <i class="icofont-dotted-right"></i> คณะผู้บริหาร</a>
                                        </li>

                                        <?php foreach ($lear as $key => $v_lear): ?>
                                        <li>
                                            <a href="<?= base_url('Personnel/').$v_lear->lear_namethai ?>"><i
                                                    class="icofont-dotted-right"></i>
                                                <?= $v_lear->lear_namethai == "งานแนะแนว" ? $v_lear->lear_namethai : "กลุ่มสาระการเรียนรู้".$v_lear->lear_namethai ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php foreach ($posi as $key => $v_posi): ?>
                                        <li>
                                            <a href="<?= base_url('Personnel/').$v_posi->posi_name?>"><i
                                                    class="icofont-dotted-right"></i>
                                                <?=$v_posi->posi_name;?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>

                                    </ul>
                                </li>
                                <li><a href="#"><i class="icofont-news icofont-2x"></i>
                                        <p>ประชาสัมพันธ์</p>
                                    </a>
                                    <div class="megamenu-panel">
                                        <div class="megamenu-lists">
                                            <?php
                                            $nameNews = [
                                                'ข่าวประชาสัมพันธ์',
                                                'ข่าวกิจกรรม',
                                                'ข่าวประกาศ',
                                            ];
                                            foreach (
                                                $nameNews
                                                as $key => $v_nameNews
                                            ):
                                                if (
                                                    $v_nameNews ==
                                                    'ข่าวประชาสัมพันธ์'
                                                ) {
                                                    $news_to = $news_p;
                                                } elseif (
                                                    $v_nameNews == 'ข่าวกิจกรรม'
                                                ) {
                                                    $news_to = $news_k;
                                                } elseif (
                                                    $v_nameNews == 'ข่าวประกาศ'
                                                ) {
                                                    $news_to = $news_pg;
                                                } ?>
                                            <ul class="megamenu-list list-col-3">
                                                <h5 class="dropdown-header"><?= $v_nameNews ?></h5>
                                                <?php foreach ($news_to as $key => $v_news_to):
                                                    if ($v_news_to->news_category == $v_nameNews): ?>
                                                <li><a href="<?= base_url('news/newsDetail/').$v_news_to->news_id ?>"><i
                                                            class="icofont-newspaper"></i>
                                                        <?= $v_news_to->news_topic ?></a></li>

                                                <?php endif; ?>
                                                <?php
                                                endforeach; ?>
                                                <li class="text-center"><a
                                                        href="<?=base_url('news/all');?>">ดูทั้งหมด...</a> </li>
                                            </ul>
                                            <?php
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="icofont-database icofont-2x"></i>
                                        <p>กลุ่มบริหาร</p>
                                    </a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="http://academic.skj.ac.th">
                                                <i class="icofont-brainstorming"></i>
                                                บริหารวิชาการ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icofont-group-students"></i>
                                                บริหารกิจการนักเรียน
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icofont-presentation"></i>
                                                บริหารทั่วไป
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('Contact') ?>"><i class="icofont-contacts icofont-2x"></i>
                                        <p>ติดต่อ</p>
                                    </a></li>
                                <!-- <li><a href="<?= base_url('login') ?>"><i class="icofont-lock icofont-2x"></i>
                                        <p>Login</p>
                                    </a></li> -->

                                <li><a href="#"><i class="icofont-network icofont-2x"></i>
                                        <p>SKJ บริการ</p>
                                    </a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="#"><i class="icofont-group-students icofont-1x"></i>
                                                สำหรับนักเรียน
                                            </a>
                                            <ul class="nav-dropdown">
                                                <li>
                                                    <a href="http://academic.skj.ac.th/LoginStudent"><i
                                                            class="icofont-login icofont-1x"></i>
                                                        เข้าสู่ระบบ
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('SkjClassroom') ?>">
                                                    <i class="icofont-library"></i>
                                                        ห้องรวมนักเรียน
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://academic.skj.ac.th/LoginStudent">
                                                    <i class="icofont-read-book"></i>
                                                        ผลการเรียน
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://academic.skj.ac.th/ClassSchedule">
                                                    <i class="icofont-table"></i>
                                                        ตารางเรียน
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://academic.skj.ac.th/ExamSchedule">
                                                    <i class="icofont-table"></i>
                                                        ตารางสอบ
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://academic.skj.ac.th/StudentsList">
                                                    <i class="icofont-list"></i>
                                                        รายชื่อนักเรียน
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('RoomLearning') ?>"><i
                                                    class="icofont-teacher icofont-1x"></i>
                                                สำหรับครู
                                            </a>
                                            <ul class="nav-dropdown">
                                                <li>
                                                    <a href="<?= base_url('login') ?>"><i
                                                            class="icofont-login icofont-1x"></i>
                                                        เข้าสู่ระบบ
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('RoomLearning') ?>"><i
                                                    class="icofont-learn icofont-1x"></i>
                                                ห้องเรียนออนไลน์
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('document') ?>">
                                                <i class="icofont-file-document"></i>
                                                ดาวน์โหลดเอกสาร
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('logoSKJ') ?>">
                                                <i class="icofont-medal "></i>
                                                ตราโรงเรียน
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('FecebookGroup') ?>">
                                                <i class="icofont-facebook"></i>
                                                Fecebook กลุ่ม
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Email') ?>">
                                                <i class="icofont-email"></i>
                                                Email โรงเรียน
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


    </div>