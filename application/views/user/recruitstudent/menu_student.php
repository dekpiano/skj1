<?php $active = $this->input->get('a'); ?>
<!-- <div class="list-group mt-5">
    <a target="_blank" href="<?=base_url('uploads/recruitstudent/คู่มือการสมัครเรียนออนไลน์.pdf');?>"
        class="btn btn-secondary"><i class="fas fa-book-reader"></i>
        คู่มือการใช้งานระบบ</a>
</div> -->
<div class="d-none d-md-block d-lg-block d-lg-none">
    <div class="list-group mt-2 ">
        <a href="<?=base_url('Admissions?a=1');?>"
            class="list-group-item list-group-item-action <?=$active == 1 ? 'active' : ''?> ">
            <i class="icofont-ui-home"></i> หน้าแรก
        </a>
        <a href="<?=base_url('Admissions/RegStudent?a=2');?>"
            class="list-group-item list-group-item-action   <?=$active == 2 ? 'active' : ''?>"><i
                class="icofont-contact-add"></i> สมัครเรียน </a>
        <a href="<?=base_url('checkRegister?a=3');?>"
            class="list-group-item list-group-item-action <?=$active == 3 ? 'active' : ''?>"><i
                class="icofont-ui-edit"></i>
            ตรวจสอบและแก้ไขการสมัคร</a>
        <a href="<?=base_url('Announce?a=4');?>"
            class="list-group-item list-group-item-action  <?=$active == 4 ? 'active' : ''?>"><i
                class="icofont-bullhorn"></i> ประกาศรายชื่อผู้สมัครสอบ </a>
    </div>

    <div class="list-group mt-5  ">
        <a href="<?=base_url('Admissions?a=1');?>"
            class="list-group-item list-group-item-action   border-success text-success <?=$active == 5 ? 'active' : ''?> ">
            <i class="icofont-bullhorn"></i> ประกาศรายชื่อ <b>ผู้มีสิทธ์สอบและห้องสอบ</b>
        </a>
        <a href="<?=base_url('Admissions?a=1');?>"
            class="list-group-item list-group-item-action  border-success text-success <?=$active == 5 ? 'active' : ''?> ">
            <i class="icofont-bullhorn"></i> ประกาศรายชื่อ <b>นักเรียนโควตา นักกีฬา</b>
        </a>
    </div>
</div>
<!-- animated  heartBeat delay-1s -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom  d-md-none  d-xl-none d-lg-none">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <div class="list-group mt-2">
                <a href="<?=base_url('Admissions?a=1');?>"
                    class="list-group-item list-group-item-action <?=$active == 1 ? 'active' : ''?> ">
                    <i class="icofont-ui-home"></i> หน้าแรก
                </a>
                <a href="<?=base_url('Admissions/RegStudent?a=2');?>"
                    class="list-group-item list-group-item-action   <?=$active == 2 ? 'active' : ''?>"><i
                        class="icofont-contact-add"></i> สมัครเรียน </a>
                <a href="<?=base_url('checkRegister?a=3');?>"
                    class="list-group-item list-group-item-action <?=$active == 3 ? 'active' : ''?>"><i
                        class="icofont-ui-edit"></i>
                    ตรวจสอบและแก้ไขการสมัคร</a>
                <a href="<?=base_url('Announce?a=4');?>"
                    class="list-group-item list-group-item-action  <?=$active == 4 ? 'active' : ''?>"><i
                        class="icofont-bullhorn"></i> ประกาศรายชื่อผู้สมัครสอบ </a>
            </div>

            <div class="list-group mt-5  ">
                <a href="<?=base_url('Admissions?a=1');?>"
                    class="list-group-item list-group-item-action   border-success text-success <?=$active == 5 ? 'active' : ''?> ">
                    <i class="icofont-bullhorn"></i> ประกาศรายชื่อ <b>ผู้มีสิทธ์สอบและห้องสอบ</b>
                </a>
                <a href="<?=base_url('Admissions?a=1');?>"
                    class="list-group-item list-group-item-action  border-success text-success <?=$active == 5 ? 'active' : ''?> ">
                    <i class="icofont-bullhorn"></i> ประกาศรายชื่อ <b>นักเรียนโควตา นักกีฬา</b>
                </a>
            </div>
        </ul>
    </div>
</nav>