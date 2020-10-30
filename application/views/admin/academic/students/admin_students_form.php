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
                        <div class="form-group row">
                            <label for="schestu_id" class="col-sm-2 col-form-label">รหัส<?=$title;?></label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="schestu_id" name="schestu_id"
                                    value="<?=$action == 'insert_students' ? $students : $students[0]->schestu_id;?>"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="schestu_classname" class="col-sm-2 col-form-label">ชั้น ม.</label>
                            <div class="col-sm-2">
                                <?php $classroom = array("1","2","3","4","5","6"); ?>
                                <select name="schestu_classname" id="schestu_classname" class="form-control">
                                    <?php foreach ($classroom as $key => $value): ?>
                                    <option <?=@$students[0]->schestu_classname == $value ? 'selected' : '';?>
                                        value="<?=$value;?>"><?=$value;?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="schestu_filename" class="col-sm-2 col-form-label">รูป<?=$title;?></label>
                            <div class="col-sm-10">
                                <input type="file" name="schestu_filename" id="schestu_filename" />
                                <small id="emailHelp" class="form-text text-muted">PDF ขนาดไฟล์ไม่เกิน 2 mb</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="schestu_filename" class="col-sm-2 col-form-label"></label>
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
                    <form action="<?=base_url('admin/academic/students/control_admin_students/importStudent_All');?>" enctype="multipart/form-data" method="post" role="form">
                        <input type="file" name="fileStudent_All" id="fileStudent_All" />
                        <small id="emailHelp" class="form-text text-muted">อัพโหลดไฟล์ Excel</small>
                    

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">อัพโหลด</button>
                </div>
                </form>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->