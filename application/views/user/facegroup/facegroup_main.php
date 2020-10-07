<div class="my-3 p-3 ">
    <div class="section ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center text-center">
                            <!-- <img loading="lazy" style="width: 150px;" src="<?=base_url('asset/user/img/Logo-SKJ.png');?>"> -->
                            <h2 class="">
                                กลุ่ม Facebook <span class="theme_color"> <?=$this->uri->segment(2);?> </span>
                            </h2>
                            <p class="large">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="list-group">
            <?php foreach ($face as $key => $v_face) :?>
            <a target="_blank" href="<?=$v_face->facegroup_link;?>" class="count_face" val="<?=$v_face->facegroup_id;?>">
                <div class="media border p-3">
                    <i class="icofont-facebook icofont-4x mr-3 mt-3 rounded-circle" ></i>
                    <div class="media-body">
                        <h4><?=$v_face->facegroup_name;?> </h4>
                        <p>ผู้เข้าชม <?=$v_face->facegroup_count?></p>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>