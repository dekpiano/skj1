<div class="container p-0">

    <h1 class="h3 mb-3">ข้อมูลส่วนตัว</h1>

    <div class="row">
        <div class="col-md-5 col-xl-4">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Settings</h5>
                </div>
                <div class="list-group list-group-flush" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="list-group-item list-group-item-action active" id="v-pills-home-tab" data-toggle="pill"
                        href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">บัญชี</a>
                    <a class="list-group-item list-group-item-action" id="v-pills-profile-tab" data-toggle="pill"
                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">รหัสผ่าน</a>
                   
                </div>
            </div>




        </div>

        <div class="col-md-7 col-xl-8">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Public info</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">ชื่อผู้ใช้งาน</label>
                                            <input readonly type="text" class="form-control" id=""
                                                value="<?=$pers[0]->pers_username?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="Biography">เกี่ยวกันตนเอง</label>
                                            <input type="text" class="form-control" id="Biography"
                                                placeholder="ชีวประวัติสั้น ๆ">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <img alt="Andrew Jones"
                                                src="<?=base_url('uploads/personnel/').$pers[0]->pers_img?>"
                                                class="rounded-circle img-responsive mt-2" width="128" height="128">

                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Private info</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="pers_prefix">ชื่อคำนำหน้า</label>
                                        <select class="custom-select d-block w-100" required name="pers_prefix"
                                            id="pers_prefix">
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
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="pers_firstname">ชื่อ</label>
                                        <input type="text" class="form-control" id="pers_firstname"
                                            placeholder="First name" name="pers_firstname"
                                            value="<?=$pers[0]->pers_firstname?>">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="pers_lastname">นามสกุล</label>
                                        <input type="text" class="form-control" id="pers_lastname"
                                            placeholder="Last name" name="pers_lastname"
                                            value="<?=$pers[0]->pers_lastname?>">
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label for="pers_britday">วันเกิด เดือน ปี พ.ศ.</label>
                                        <?php 
                                        $britday =  @$pers[0]->pers_britday; 
                                        $dated = date("d-m-", strtotime($britday));
                                        $datey = date("Y", strtotime($britday))+543;
                                        $d =  $dated.$datey;
                                    ?>
                                        <input autocomplete="off" type="text" class="form-control " id="pers_britday"
                                            name="pers_britday" placeholder="" value="<?=$d?>" required=""
                                            data-inputmask="'mask': '99-99-9999'">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="pers_username">Email</label>
                                        <input type="email" class="form-control" id="pers_username" placeholder="Email"
                                            name="pers_username" value="<?=$pers[0]->pers_username?>">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="pers_phone">เบอร์โทร</label>
                                        <input type="email" class="form-control" id="pers_phone" placeholder="Email"
                                            name="pers_phone" value="<?=$pers[0]->pers_phone?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pers_address">ที่อยู่</label>
                                    <input type="text" class="form-control" id="pers_address" placeholder=""
                                        name="pers_address" value="<?=$pers[0]->pers_address?>">
                                </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>

                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Password</h5>

                            <form>                                
                                    <div class="form-group">

                                        <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" minlength=8>

                                    </div>
                                    <div class="form-group">

                                        <input type="password" class="form-control" id="confrim_password" name="confrim_password"
                                            placeholder="ยืนยันรหัสผ่าน" minlength=8>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div id="jak_pstrength" class="progress-bar" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        </div>
                                    </div>
          <div class="mt-3 text-danger alert_comfirm"></div>  
                                
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    444
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    .777.
                </div>
            </div>

        </div>
    </div>
</div>

</div>