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
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo end($breadcrumbs);?></h1>
        <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal"> <i
                class="far fa-plus-square"></i> เพิ่มนักเรียนทั้งหมด</button>
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
                    <h6 class="m-0 font-weight-bold  text-white "><?=$icon?> <?php echo end($breadcrumbs);?> </h6>
                </div>

                <div class="card-body">
                    <form action="<?=base_url('admin/academic/students/control_admin_students/').$action;?>"
                        method="post" enctype="multipart/form-data">

                        <div class="form-group ">
                            <label for="stu_id" class="has-float-label col-form-label">รหัสประตัวนักรเียน</label>
                            <div class="">
                                <input type="text"  class="form-control" id="stu_id" name="stu_id"
                                    value="<?=$action == 'insert_students' ? '': $students[0]->stu_id;?>"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="stu_prefix" class=" col-form-label">คำนำหน้า</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_prefix" name="stu_prefix"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_prefix;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="stu_fristName" class=" col-form-label">ชื่อนักเรียน</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_fristName" name="stu_fristName"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_fristName;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="stu_lastName" class=" col-form-label">นามสกุล</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_lastName" name="stu_lastName"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_lastName;?>"
                                        required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label for="stu_birth" class=" col-form-label">วันเกิด</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_birth" name="stu_birth"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_birth;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="stu_nationality" class="c col-form-label">เชื้อชาติ</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_nationality" name="stu_nationality"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_nationality;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="stu_race" class=" col-form-label">สัญชาติ</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_race" name="stu_race"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_race;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="stu_religion" class=" col-form-label">ศาสนา</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_religion" name="stu_religion"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_religion;?>"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stu_iden" class=" col-form-label">เลขบัตรประชาชน</label>
                            <div class="">
                                <input type="text"  class="form-control" id="stu_iden" name="stu_iden"
                                    value="<?=$action == 'insert_students' ? '': $students[0]->stu_iden;?>"
                                    required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="stu_swine" class=" col-form-label">หมู่</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_swine" name="stu_swine"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_swine;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="stu_houseNumber" class=" col-form-label">บ้านเลขที่</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_houseNumber" name="stu_houseNumber"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_houseNumber;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="stu_subDistrict" class=" col-form-label">ตำบล</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_subDistrict" name="stu_subDistrict"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_subDistrict;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="stu_district" class=" col-form-label">อำเภอ</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_district" name="stu_district"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_district;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="stu_province" class=" col-form-label">จังหวัด</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_province" name="stu_province"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_province;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="stu_postCode" class=" col-form-label">รหัสไปรษณีย์</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_postCode" name="stu_postCode"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_postCode;?>"
                                        required>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="stu_class" class=" col-form-label">ชั้นเรียน</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_class" name="stu_class"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_class;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="stu_room" class=" col-form-label">ห้องเรียน</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_room" name="stu_room"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_room;?>"
                                        required>
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="stu_active" class="col-form-label">สถานะนักเรียน</label>
                                <div class="">
                                    <input type="text"  class="form-control" id="stu_active" name="stu_active"
                                        value="<?=$action == 'insert_students' ? '': $students[0]->stu_active;?>"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="stu_username" class=" col-form-label">รหัสผู้ใช้งาน</label>
                            <div class="">
                                <input type="text"  class="form-control" id="stu_username" name="stu_username"
                                    value="<?=$action == 'insert_students' ? '': $students[0]->stu_username;?>"
                                    required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="stu_classname" class="col-sm-2 col-form-label">ชั้น ม.</label>
                            <div class="col-sm-2">
                                <?php $classroom = array("1","2","3","4","5","6"); ?>
                                <select name="stu_classname" id="stu_classname" class="form-control">
                                    <?php foreach ($classroom as $key => $value): ?>
                                    <option <?=@$students[0]->stu_classname == $value ? 'selected' : '';?>
                                        value="<?=$value;?>"><?=$value;?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stu_filename" class="col-sm-2 col-form-label">รูป</label>
                            <div class="col-sm-10">
                                <input type="file" name="stu_filename" id="stu_filename" />
                                <small id="emailHelp" class="form-text text-muted">PDF ขนาดไฟล์ไม่เกิน 2 mb</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stu_filename" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-lg btn-<?=$color?>  btn-block"><?=$icon?>
                                    <?php echo end($breadcrumbs);?></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">อัพโหลดไฟล์</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="uploade_stuall"
                        action="<?=base_url('admin/academic/students/control_admin_students/importStudent_All');?>"
                        enctype="multipart/form-data" method="post" role="form">
                        <input type="file" name="fileStudent_All" id="fileStudent_All" />
                        <small id="emailHelp" class="form-text text-muted">อัพโหลดไฟล์ Excel</small>


                </div>
                <div class="modal-footer">
                    <button id="load1" type="submit" class="btn btn-primary">อัพโหลด </button>
                    <!-- Progress bar -->
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <!-- Display upload status -->
                    <div id="uploadStatus"></div>
                </div>
                </form>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->