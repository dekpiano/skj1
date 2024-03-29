<style type="text/css">
.upload-btn-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
}

.btn1 {
    border: 2px solid gray;
    color: gray;
    background-color: white;
    padding: 8px 20px;
    border-radius: 8px;
    font-size: 20px;
    font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
}
</style>
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <!-- Begin Page Content -->
        <div class="container-xl">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo end($breadcrumbs);?></h1>
            </div>

            <!-- DataTales Example -->
            <div class="row justify-content-lg">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <?php foreach ($breadcrumbs as $key=>$value) : 
                      if($key != '#') :
                    ?>
                            <li class="breadcrumb-item"><a href="<?php echo $key; ?>"><?php echo $value; ?></a></li>
                            <?php else: ?>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $value; ?></li>
                            <?php 
                    endif;
                    endforeach; 
                ?>
                        </ol>
                    </nav>
                    <div class="card shadow mb-4 ">
                        <div class="card-header py-3 bg-<?=$color?>">
                            <h6 class="m-0 font-weight-bold  text-white "><?=$icon?> <?php echo end($breadcrumbs);?>
                            </h6>
                        </div>

                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-8 order-md-1">
                                    <form class="needs-validation" novalidate=""
                                        action="<?=base_url('admin/control_admin_personnel/').$action;?>" method="post"
                                        enctype="multipart/form-data">
                                        <div class="mb-3 row">
                                            <label for="pers_id" class="col-sm-4 col-form-label">รหัสประจำตัว</label>
                                            <div class="col-sm-8">
                                                <input type="text" readonly class="form-control" id="pers_id"
                                                    name="pers_id"
                                                    value="<?=$action == 'insert_personnel' ? $personnel : $pers[0]->pers_id;?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="pers_prefix" class="col-sm-4 col-form-label">คำนำหน้า</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select" name="pers_prefix" id="pers_prefix"
                                                    required>
                                                    <option value="">เลือก...</option>
                                                    <?php $data_prefix = array('นาย','นาง','นางสาว','ว่าที่ร้อยตรี','ว่าที่ร้อยตรีหญิง','Mr.','Mrs.','Miss.');
                              foreach ($data_prefix as $key => $v_prefix):?>
                                                    <?php if($action != 'insert_personnel') :?>
                                                    <option <?=$pers[0]->pers_prefix == $v_prefix ? 'selected' : '' ;?>
                                                        value="<?=$v_prefix;?>"><?=$v_prefix;?></option>
                                                    <?php else: ?>
                                                    <option value="<?=$v_prefix;?>"><?=$v_prefix;?></option>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    เลือกคำนำหน้า
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="pers_id" class="col-sm-4 col-form-label">ชื่อจริง</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="pers_firstname"
                                                    name="pers_firstname"
                                                    value="<?=$action == 'insert_personnel' ? '' : $pers[0]->pers_firstname;?>"
                                                    required>
                                                <div class="invalid-feedback">
                                                    กรุณากรอกชื่อจริง
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="pers_id" class="col-sm-4 col-form-label">นามสกุล</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="pers_lastname"
                                                    name="pers_lastname" placeholder=""
                                                    value="<?=$action == 'insert_personnel' ? '' : $pers[0]->pers_lastname;?>"
                                                    required>
                                                <div class="invalid-feedback">
                                                    กรุณากรอกนามสกุล
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">

                                            <?php $britday =  @$pers[0]->pers_britday; 
                                            $dated = date("d-m-", strtotime($britday));
                                            $datey = date("Y", strtotime($britday))+543;
                                            $d =  $dated.$datey;
                                            ?>
                                            <label for="pers_id" class="col-sm-4 col-form-label">วันเกิด เดือน ปี
                                                พ.ศ.</label>
                                            <div class="col-sm-8">
                                                <input autocomplete="off" type="text" class="form-control "
                                                    id="pers_britday" name="pers_britday" placeholder=""
                                                    value="<?=$action == 'insert_personnel' ? '' : $d;?>"
                                                    data-inputmask="'mask': '99-99-9999'">

                                                <div class="invalid-feedback">
                                                    กรุณาเลือกวันเกิด
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="pers_id" class="col-sm-4 col-form-label">เบอร์โทรศัพท์</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="pers_phone"
                                                    name="pers_phone" placeholder=""
                                                    data-inputmask="'mask': '99-9999-9999'"
                                                    value="<?=$action == 'insert_personnel' ? '' : $pers[0]->pers_phone;?>">
                                                <div class="invalid-feedback">
                                                    กรุณากรอกเบอร์โทรศัพท์
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="pers_id" class="col-sm-4 col-form-label">ที่อยู่</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="pers_address"
                                                    name="pers_address" placeholder="1234 Main St"
                                                    value="<?=$action == 'insert_personnel' ? '' : $pers[0]->pers_address;?>">
                                                <div class="invalid-feedback">
                                                    กรุณากรอกที่อยู่
                                                </div>
                                            </div>
                                        </div>



                                        <hr class="mb-4">
                                        <h5 class="mb-3">ข้อมูลภายในโรงเรียน</h5>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="pers_position">ตำแหน่งงานหลักในโรงเรียน</label>
                                                <select class="" id="pers_position"
                                                    name="pers_position" required>
                                                    <option value="">เลือก...</option>
                                                    <?php foreach ($posi as $key => $v_posi):?>
                                                    <?php if($action != 'insert_personnel') :?>
                                                    <option
                                                        <?=$v_posi->posi_id == $pers[0]->pers_position ? 'selected' : ''?>
                                                        value="<?=$v_posi->posi_id?>"><?=$v_posi->posi_name?></option>
                                                    <?php else: ?>
                                                    <option value="<?=$v_posi->posi_id?>"><?=$v_posi->posi_name?>
                                                    </option>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    กรุณาเลือกตำแหน่ง
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="pers_department">ฝ่ายงาน</label>
                                                <select class="" id="pers_department"
                                                    name="pers_department">
                                                    <option value="">เลือก...</option>
                                                    <?php foreach ($depart as $key => $v_depart):?>
                                                    <?php if($action != 'insert_personnel') :?>
                                                    <option
                                                        <?=$v_depart->depart_id == $pers[0]->pers_department ? 'selected' : ''?>
                                                        value="<?=$v_depart->depart_id?>"><?=$v_depart->depart_name?>
                                                    </option>
                                                    <?php else: ?>
                                                    <option value="<?=$v_depart->depart_id?>">
                                                        <?=$v_depart->depart_name?>
                                                    </option>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    กรุณาเลือกฝ่ายงาน
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="pers_department">วิทยฐานะ</label>
                                                <select class="" id="pers_academic"
                                                    name="pers_academic">
                                                    <?php $academic = array('ชำนาญการ','ชำนาญการพิเศษ','เชี่ยวชาญ','เชี่ยวชาญพิเศษ' ); ?>
                                                    <option value="">เลือก...</option>
                                                    <?php foreach ($academic as $key => $v_academic):?>
                                                    <option
                                                        <?=$v_academic == $pers[0]->pers_academic ? 'selected' : ''?>
                                                        value="<?=$v_academic;?>"><?=$v_academic;?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    กรุณาเลือกฝ่ายงาน
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="pers_learning">กลุ่มสาระ</label>
                                                <select class="" id="pers_learning"
                                                    name="pers_learning">
                                                    <option value="">กรณีไม่มีกลุ่มสาระไม่ต้องเลือก...</option>
                                                    <?php foreach ($lear as $key => $v_lear):?>
                                                    <?php if($action != 'insert_personnel') :?>
                                                    <option
                                                        <?=$v_lear->lear_id == $pers[0]->pers_learning ? 'selected' : ''?>
                                                        value="<?=$v_lear->lear_id?>"><?=$v_lear->lear_namethai?>
                                                    </option>
                                                    <?php else: ?>
                                                    <option value="<?=$v_lear->lear_id?>"><?=$v_lear->lear_namethai?>
                                                    </option>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    กรุณากลุ่มสาระการเรียนรู้
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="pers_groupleade">หัวหน้ากลุ่มสาระ</label>
                                                <select class="" id="pers_groupleade"
                                                    name="pers_groupleade">
                                                    <?php if($action != 'insert_personnel'): ?>
                                                    <option <?=$pers[0]->pers_groupleade == '3' ? 'selected' : '' ?>
                                                        value="3">
                                                        กรณีไม่ใช่ไม่ต้องเลือกใด ๆ ... </option>
                                                    <option <?=$pers[0]->pers_groupleade == '1' ? 'selected' : '' ?>
                                                        value="1">
                                                        หัวหน้ากลุ่มสาระ</option>
                                                    <option <?=$pers[0]->pers_groupleade == '2' ? 'selected' : '' ?>
                                                        value="2">
                                                        รองหัวหน้ากลุ่มสาระ</option>
                                                    <?php else: ?>
                                                    <option value="3">กรณีไม่ใช่ไม่ต้องเลือกใด ๆ ... </option>
                                                    <option value="1">หัวหน้ากลุ่มสาระ</option>
                                                    <option value="2">รองหัวหน้ากลุ่มสาระ</option>
                                                    <?php endif; ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    กรุณากลุ่มสาระการเรียนรู้
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="mb-4">

                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="pers_username">ชื่อผู้ใช้งาน (Email)</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">@</span>
                                                    </div>
                                                    <input type="email" class="form-control" id="pers_username"
                                                        name="pers_username" placeholder="Sed@df.co"
                                                        value="<?=$action == 'insert_personnel' ? '' : $pers[0]->pers_username;?>">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        กรุณากรอกผู้ใช้งาน
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="pers_username">รีเซตรหัสผ่าน</label>
                                                <div class="input-group">
                                                    <a href="<?=base_url('admin/control_admin_personnel/reset_password/').$pers[0]->pers_id;?>"
                                                        class="btn btn-danger"
                                                        onClick="return confirm('คุณจะรีเซตรหัสผ่านหรือไม่!');">Reset
                                                        password</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ทำอาทิตย์หน้า -->
                                        <hr class="mb-4">
                                        <h5 class="mb-3">งานในระบบ</h5>
                                        <?php foreach ($work as $key => $v_work):    

                              $w = @explode("|",$pers[0]->pers_workother_id);
                          ?>
                                        <div class="custom-control custom-checkbox">
                                            <?php if($action == 'insert_personnel'):?>
                                            <input <?=$key==0 ? 'checked' : '';?> type="checkbox"
                                                class="custom-control-input" id="pers_workother_id<?=$key?>"
                                                name="pers_workother_id[]" value="<?=$v_work->work_id;?>">
                                            <?php else : ?>
                                            <input type="checkbox" class="custom-control-input"
                                                id="pers_workother_id<?=$key?>" name="pers_workother_id[]"
                                                value="<?=$v_work->work_id;?>"
                                                <?=in_array($v_work->work_id,$w) ? 'checked' : '';?>>
                                            <?php endif; ?>

                                            <label class="custom-control-label"
                                                for="pers_workother_id<?=$key?>"><?=$v_work->work_name?></label>
                                        </div>
                                        <?php endforeach; ?>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            กรุณาเลือกตำแหน่งในระบบอย่างน้อย 1 ตำแหน่ง
                                        </div>
                                        <hr class="mb-4">


                                </div>

                                <div class="col-md-4 order-md-1">

                                    <div class="col-md-12 mb-3">
                                        <label for="username">รูปภาพ</label>
                                        <div class="input-group">
                                            <div class="upload-btn-wrapper">
                                                <button class="btn1">เลือกไฟล์</button>
                                                <input type="file" name="banner_img" id="banner_img" class="banner_img"
                                                    <?=$action != 'insert_personnel' ? '' : ' ';?> />
                                                <small id="emailHelp" class="form-text text-muted">ขนาดรูปที่อัฟโหลด 600
                                                    X 600
                                                    px</small>
                                            </div>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                กรุณาเลือกรูปภาพประจำตัว
                                            </div>
                                        </div>
                                    </div>

                                    <img id="blah" class="img-fluid blah"
                                        src="<?php echo $action == "insert_personnel" ? '#' : base_url().'uploads/personnel/'.$pers[0]->pers_img; ?>"
                                        alt="" />
                                    <hr class="mb-4">

                                    <button class="btn btn-<?=$color?> btn-lg btn-block text-white " type="submit"><?=$icon?>
                                        <?php echo end($breadcrumbs);?></button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->