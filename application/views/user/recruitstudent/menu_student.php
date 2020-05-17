<?php $active = $this->input->get('a'); ?>
<div class="list-group mt-5">
    <a href="<?=base_url('Admissions?a=1');?>"
        class="list-group-item list-group-item-action <?=$active == 1 ? 'active' : ''?> ">
        <i class="icofont-ui-home"></i> หน้าแรก
    </a>
    <a href="<?=base_url('Admissions/RegStudent?a=2');?>"
        class="list-group-item list-group-item-action  disabled <?=$active == 2 ? 'active' : ''?>"><i
            class="icofont-contact-add"></i> สมัครเรียน (รอบ 2)</a>
    <a href="<?=base_url('checkRegister?a=3');?>"
        class="list-group-item list-group-item-action <?=$active == 3 ? 'active' : ''?>"><i class="icofont-ui-edit"></i>
        ตรวจสอบและแก้ไขการสมัคร</a>
    <a href="<?=base_url('Announce?a=4');?>"
        class="list-group-item list-group-item-action  <?=$active == 4 ? 'active' : ''?>"><i
            class="icofont-bullhorn"></i> ประกาศรายชื่อผู้สมัครสอบ </a>
</div>

<div class="list-group mt-5">
    <a href="<?=base_url('Admissions?a=1');?>"
        class="list-group-item list-group-item-action  disabled <?=$active == 5 ? 'active' : ''?> ">
        <i class="icofont-bullhorn"></i> ประกาศรายชื่อผู้มีสิทธ์สอบและห้องสอบ
    </a>
</div>

<div class="list-group mt-5">
    <a target="_blank" href="<?=base_url('uploads/recruitstudent/คู่มือการสมัครเรียนออนไลน์.pdf');?>"
        class="btn btn-secondary"><i class="fas fa-book-reader"></i>
        คู่มือการสมัคร</a>
</div>

<!-- animated  heartBeat delay-1s -->