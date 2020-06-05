<div class="section ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full center">
                    <div class="heading_main text_align_center text-center">
                        <!-- <img style="width: 150px;" src="<?=base_url('asset/user/img/Logo-SKJ.png');?>"> -->
                        <h2 class="">
                            บุคลากร <span class="theme_color"> <?=$this->uri->segment(2);?> </span>
                        </h2>
                        <p class="large">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class=" team">
    <!-- ======= Team Section ======= -->
    <div class="container">
        <?php  $img_p = base_url('uploads/personnel/');
              $img_e = base_url('asset/img/user-icon.svg');
        foreach ($pers as $key => $v_pers) :
              if($v_pers->posi_name == 'ผู้อำนวยการโรงเรียน'): ?>
        <center>
            <div class="col-lg-4 col-md-6 align-items-stretch aos-animate"  data-aos="zoom-in" data-aos-delay="100">

                <div class="member">
                    <div class="member-img">
                        <img src="<?=$v_pers->pers_img == '' ? $img_e : $img_p.$v_pers->pers_img;?>" class="img-fluid"
                            alt="">
                        <div class="social">
                            <?php if($v_pers->pers_facebook != ''):?>
                            <a target="_blank" href="https://www.facebook.com/<?=$v_pers->pers_facebook?>"
                                class="mr-1"><i class="icofont-facebook"></i></a>
                            <?php endif; ?>
                            <?php if ($v_pers->pers_instagram != ''):?>
                            <a target="_blank" href="https://www.instagram.com/<?=$v_pers->pers_instagram?>"
                                class="mr-1"><i class="icofont-instagram"></i></a>
                            <?php endif; ?>
                            <?php if ($v_pers->pers_youtube != ''):?>
                            <a target="_blank" href="https://www.youtube.com/channel/<?=$v_pers->pers_youtube?>"
                                class="mr-1"><i class="icofont-youtube-play"></i> </a>
                            <?php endif; ?>
                            <?php if ($v_pers->pers_line != ''):?>
                            <a target="_blank" href="<?=$v_pers->pers_line?>" class="mr-1"><i
                                    class="icofont-line-messenger"></i> </a>
                            <?php endif; ?>
                            <?php if ($v_pers->pers_twitter != ''):?>
                            <a target="_blank" href="https://www.twitter.com/<?=$v_pers->pers_twitter?>" class="mr-1"><i
                                    class="icofont-twitter"></i> </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4><?=$v_pers->pers_prefix.$v_pers->pers_firstname.' '.$v_pers->pers_lastname;?></h4>
                        <span><?=$v_pers->posi_name;?></span>
                    </div>
                </div>

            </div>
        </center>
        <?php  endif; endforeach;?>

        <?php foreach ($pers as $key => $v_pers) :
         if($v_pers->posi_name == 'รองผู้อำนวยการโรงเรียน'): ?>
        <center>
            <div class="col-lg-4 col-md-6 align-items-stretch aos-init aos-animate"  data-aos="zoom-in" data-aos-delay="100">
                <div class="member">
                    <div class="member-img">
                        <img src="<?=$v_pers->pers_img == '' ? $img_e : $img_p.$v_pers->pers_img;?>" class="img-fluid"
                            alt="">
                        <div class="social">
                            <?php if($v_pers->pers_facebook != ''):?>
                            <a target="_blank" href="https://www.facebook.com/<?=$v_pers->pers_facebook?>"
                                class="mr-1"><i class="icofont-facebook"></i></a>
                            <?php endif; ?>
                            <?php if ($v_pers->pers_instagram != ''):?>
                            <a target="_blank" href="https://www.instagram.com/<?=$v_pers->pers_instagram?>"
                                class="mr-1"><i class="icofont-instagram"></i></a>
                            <?php endif; ?>
                            <?php if ($v_pers->pers_youtube != ''):?>
                            <a target="_blank" href="https://www.youtube.com/channel/<?=$v_pers->pers_youtube?>"
                                class="mr-1"><i class="icofont-youtube-play"></i> </a>
                            <?php endif; ?>
                            <?php if ($v_pers->pers_line != ''):?>
                            <a target="_blank" href="<?=$v_pers->pers_line?>" class="mr-1"><i
                                    class="icofont-line-messenger"></i> </a>
                            <?php endif; ?>
                            <?php if ($v_pers->pers_twitter != ''):?>
                            <a target="_blank" href="https://www.twitter.com/<?=$v_pers->pers_twitter?>" class="mr-1"><i
                                    class="icofont-twitter"></i> </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4><?=$v_pers->pers_prefix.$v_pers->pers_firstname.' '.$v_pers->pers_lastname;?></h4>
                        <span><?=$v_pers->posi_name;?></span>
                    </div>
                </div>
            </div>
        </center>
        <?php endif; endforeach?>


        <div class="row">
            <?php  foreach ($pers_type as $key => $v_pers_type): ?>
            <?php if($v_pers_type->posi_name != 'รองผู้อำนวยการโรงเรียน' && $v_pers_type->posi_name != 'ผู้อำนวยการโรงเรียน'): ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate"  data-aos="zoom-in" data-aos-delay="<?=$key;?>00">
                <div class="member">
                    <div class="member-img">
                        <img src="<?=$img_p.$v_pers_type->pers_img;?>" class="img-fluid" alt="">
                        <div class="social">
                            <?php if($v_pers_type->pers_facebook != ''):?>
                            <a target="_blank" href="https://www.facebook.com/<?=$v_pers_type->pers_facebook?>"
                                class="mr-1"><i class="icofont-facebook"></i></a>
                            <?php endif; ?>
                            <?php if ($v_pers_type->pers_instagram != ''):?>
                            <a target="_blank" href="https://www.instagram.com/<?=$v_pers_type->pers_instagram?>"
                                class="mr-1"><i class="icofont-instagram"></i></a>
                            <?php endif; ?>
                            <?php if ($v_pers_type->pers_youtube != ''):?>
                            <a target="_blank" href="https://www.youtube.com/channel/<?=$v_pers_type->pers_youtube?>"
                                class="mr-1"><i class="icofont-youtube-play"></i> </a>
                            <?php endif; ?>
                            <?php if ($v_pers_type->pers_line != ''):?>
                            <a target="_blank" href="<?=$v_pers_type->pers_line?>" class="mr-1"><i
                                    class="icofont-line-messenger"></i> </a>
                            <?php endif; ?>
                            <?php if ($v_pers_type->pers_twitter != ''):?>
                            <a target="_blank" href="https://www.twitter.com/<?=$v_pers_type->pers_twitter?>"
                                class="mr-1"><i class="icofont-twitter"></i> </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4><?=$v_pers_type->pers_prefix.$v_pers_type->pers_firstname.' '.$v_pers_type->pers_lastname;?>
                        </h4>
                        <span><?=$v_pers_type->posi_name;?></span>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>





        </div>

    </div>
</section><!-- End Team Section -->