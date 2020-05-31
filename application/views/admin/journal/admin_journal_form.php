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

                    <form action="<?=base_url('admin/control_admin_journal/').$action;?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="jour_id" class="col-sm-2 col-form-label">รหัส<?=$title;?></label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="jour_id" name="jour_id"
                                    value="<?=$action == 'insert_journal' ? $jour : $journal[0]->jour_id;?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jour_issue" class="col-sm-2 col-form-label">ฉบับที่</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jour_issue" name="jour_issue"
                                    value="<?=$action == 'insert_journal' ? '' : $journal[0]->jour_issue;?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jour_subject" class="col-sm-2 col-form-label">ชื่อเรื่อง<?=$title;?></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jour_subject" name="jour_subject"
                                    value="<?=$action == 'insert_journal' ? '' : $journal[0]->jour_subject;?>" required>
                            </div>
                        </div>                      
                        <div class="form-group row">
                            <label for="jour_period" class="col-sm-2 col-form-label">ประจำเดือน</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jour_period" name="jour_period"
                                    value="<?=$action == 'insert_journal' ? '' : $journal[0]->jour_period;?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jour_term" class="col-sm-2 col-form-label">เทอม</label>
                            <div class="col-sm-10">
                                <select name="jour_term" id="jour_term" class="form-control">
                                    <option value="">เลือก...</option>
                                    <?php $num = array('1','2','3' ); foreach ($num as $key => $v_num) : ?>
                                    <option <?=@$journal[0]->jour_term == $v_num ? 'selected' : ''?> value="<?=$v_num?>"><?=$v_num;?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jour_schoolyear" class="col-sm-2 col-form-label">ปีการศึกษา</label>
                            <div class="col-sm-10">
                                <select name="jour_schoolyear" id="jour_schoolyear" class="form-control">
                                    <?php $date_y = date('Y')+543; for($i=$date_y; $i <= $date_y+2; $i++ ): ?>
                                    <option <?=@$journal[0]->jour_schoolyear == $i ? 'selected' : ''?> value="<?=$i;?>"><?=$i;?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="jour_createdate" class="col-sm-2 col-form-label">วันที่สร้าง</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="jour_createdate" name="jour_createdate"
                                    value="<?=$action == 'insert_journal' ? date('Y-m-d') : $journal[0]->jour_createdate;?>" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="jour_img" class="col-sm-2 col-form-label">รูป<?=$title;?></label>
                            <div class="col-sm-10">
                                <div class="upload-btn-wrapper">
                                    <button class="btn1">เลือกไฟล์</button>
                                    <input type="file" name="jour_img" id="jour_img" />
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jour_namethai" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">

                                <img id="blah" class="img-fluid"
                                    src="<?php echo  @$journal[0]->jour_img == '' || $action == 'insert_journal'  ? '#' : base_url().'uploads/journal/'.$journal[0]->jour_img; ?>"
                                    alt="" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jour_namethai" class="col-sm-2 col-form-label"></label>
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




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->