<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="full center">
                <div class="heading_main text_align_center text-center">
                    <!-- <img style="width: 150px;" src="<?=base_url('asset/user/img/Logo-SKJ.png');?>"> -->
                    <h2 class="">
                        <span class="theme_color">ติดต่อเรา </span> Contact us
                    </h2>
                    <p class="large">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="contact">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="icofont-ui-dial-phone icofont-5x"></i>
                        <h4 class="text-uppercase mb-5">call us</h4>
                        <p>056 255 595</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="icofont-map icofont-5x"></i>
                        <h4 class="text-uppercase mb-5">office loaction</h4>
                        <address>160 ม.1 ต.นครสวรรค์ออก อ.เมืองนครสวรรค์ จ.นครสวรรค์ 60000</address>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="icofont-email icofont-5x"></i>
                        <h4 class="text-uppercase mb-5">email</h4>
                        <p>skj160@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="mt-3">สายตรงผู้บริหาร</h3>
        <div class="row mb-2 ">
            <div class="col-md-12 col-lg-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary"><?=$Executive[0]->posi_name?></strong>
                        <h3 class="mb-0">
                            <a class="text-dark"
                                href="#"><?=$Executive[0]->pers_prefix.$Executive[0]->pers_firstname.' '.$Executive[0]->pers_lastname?></a>
                        </h3>
                        <p class="card-text mb-auto"><?=$Executive[0]->pers_phone?></p>
                        <div class="f_social_icon">
                            <a href="#"><i class="icofont-facebook"></i></a>
                            <a href="#"><i class="icofont-line-messenger"></i></a>

                        </div>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" style="width: 200px; height: 250px;"
                        src="<?=base_url('uploads/personnel/'.$Executive[0]->pers_img);?>" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary"><?=$Executive[1]->posi_name?></strong>
                        <h3 class="mb-0">
                            <a class="text-dark"
                                href="#"><?=$Executive[1]->pers_prefix.$Executive[1]->pers_firstname.' '.$Executive[1]->pers_lastname?></a>
                        </h3>
                        <p class="card-text mb-auto"><?=$Executive[1]->pers_phone?></p>
                        <div class="f_social_icon">
                            <a href="#"><i class="icofont-facebook"></i></a>
                            <a href="#"><i class="icofont-line-messenger"></i></a>

                        </div>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" style="width: 200px; height: 250px;"
                        src="<?=base_url('uploads/personnel/'.$Executive[1]->pers_img);?>" data-holder-rendered="true">
                </div>
            </div>
        </div>
    </div>


</section>