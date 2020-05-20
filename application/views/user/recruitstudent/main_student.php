<section class="br min-vh-100">
<div class=" section ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full center">
                    <div class="heading_main text_align_center">
                        <h2 class="text-center">
                            <span class="theme_color"><i class="fas fa-bullhorn"></i> ระบบรับสมัครนักเรียน
                            </span>ปีการศึกษา <?=(date('Y')+543);?>
                        </h2>
                        <p class="large">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 order-2 mb-4">           
            <?php $this->load->view('user/recruitstudent/menu_student.php') ?>
        </div>
        <div class="col-md-9 order-md-1">
            <div class="container">

                <style type="text/css">

                </style>

                <div class="row align-items-center">
                    <div class="col-12 col-lg-5 grid-margin grid-margin-lg-0 aos-init animated fadeInLeftBig">
                        <img src="<?=base_url('asset/img/registudent/stu1.png')?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-7 p-0 img-digital grid-margin grid-margin-lg-0 aos-init aos-animate"
                        data-aos="fade-left">
                        <div class="animated fadeInRightBig">
                            <a href="<?=base_url('RegStudent/1?a=2');?>" class="bb btn btn-lg btn-block btn-primary">
                                <i class="fas fa-user-plus"></i> สมัครเรียน ชั้นมัธยมศึกษาปีที่ 1
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center ">
                    <div class="col-12 col-lg-7 p-0 order-2 order-lg-1 ">
                        <div class=" animated fadeInLeftBig">
                            <a href="<?=base_url('RegStudent/4?a=2');?>" class="bb btn btn-lg btn-block btn-primary">
                                <i class="fas fa-user-plus"></i> สมัครเรียน ชั้นมัธยมศึกษาปีที่ 4
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 order-lg-1  animated fadeInRightBig">
                        <img src="<?=base_url('asset/img/registudent/stu2.png')?>" alt="" class="img-fluid">
                    </div>

                </div>
        
     
            </div>

        </div>
    </div>
</div>
</section>