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

                    <form action="<?=base_url('admin/control_admin_document/').$action;?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="doc_id" class="col-sm-2 col-form-label">รหัส<?=$title;?></label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="doc_id" name="doc_id"
                                    value="<?=$action == 'insert_document' ? $document : $doc[0]->doc_id;?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doc_name" class="col-sm-2 col-form-label">ชื่อ<?=$title;?></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="doc_name" name="doc_name"
                                    value="<?=$action == 'insert_document' ? '' : $doc[0]->doc_name;?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doc_category" class="col-sm-2 col-form-label">ประเภท<?=$title;?></label>
                            <div class="col-sm-3">
                                <select name="doc_category" id="doc_category" class="form-control" required>
                                    <option value="">เลือก...</option>
                                    <?php $ty_doc = array('แบบฟอร์ม','คำสั่ง' ); 
                                    foreach ($ty_doc as $key => $v_ty_doc) : ?>
                                    <option
                                        <?=@$doc[0]->doc_category == $v_ty_doc &&  $action != 'insert_document' ? 'selected' : '' ;?>
                                        value="<?=$v_ty_doc?>"><?=$v_ty_doc?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doc_department" class="col-sm-2 col-form-label">ฝ่ายงาน</label>
                            <div class="col-sm-3">
                                <select name="doc_department" id="doc_department" class="form-control" required>
                                    <option value="">เลือก...</option>
                                    <?php $ty_doc = array('บริหารวิชาการ','บริหารงานบุคคล','บริหารงบประมาณและแผน','บริหารทั่วไป' ); 
                                    foreach ($ty_doc as $key => $v_ty_doc) : ?>
                                    <option
                                        <?=@$doc[0]->doc_department == $v_ty_doc &&  $action != 'insert_document' ? 'selected' : '' ;?>
                                        value="<?=$v_ty_doc?>"><?=$v_ty_doc?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doc_permissive" class="col-sm-2 col-form-label">สิทธิ์การมองเห็น</label>
                            <div class="col-sm-3">
                                <select name="doc_permissive" id="doc_permissive" class="form-control" required>
                                    <option value="">เลือก...</option>
                                    <?php $ty_doc = array('ทุกคนมองเห็น','เฉพาะผู้มีรหัส' ); 
                                    foreach ($ty_doc as $key => $v_ty_doc) : ?>
                                    <option
                                        <?=@$doc[0]->doc_permissive == $v_ty_doc &&  $action != 'insert_document' ? 'selected' : '' ;?>
                                        value="<?=$v_ty_doc?>"><?=$v_ty_doc?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="doc_createdate" class="col-sm-2 col-form-label">วันที่สร้าง<?=$title;?></label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="doc_createdate" name="doc_createdate"
                                    value="<?=$action == 'insert_document' ? date('Y-m-d') : $doc[0]->doc_createdate;?>"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doc_file" class="col-sm-2 col-form-label">ไฟล์งาน<?=$title;?></label>
                            <div class="col-sm-10">
                                <input type="file" name="doc_file" id="doc_file" />
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doc_file" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <?php if($action != 'insert_document'): ?>
                                    <?php $d_file = @$doc[0]->doc_file; $t=  explode(".",$d_file);  
                                    $check_o = @$t[1];
                                        if($check_o == 'xls' || $check_o == 'xlsx'):
                                    ?>
                                    <img src="https://img.icons8.com/color/48/000000/ms-excel.png" /> <?=$d_file;?>
                                    <?php elseif($check_o == 'doc' || $check_o == 'docx'): ?>
                                    <img src="https://img.icons8.com/color/48/000000/ms-word.png" /> <?=$d_file;?>
                                    <?php elseif($check_o == 'pdf'): ?>
                                    <img src="https://img.icons8.com/color/48/000000/pdf.png" /> <?=$d_file;?>
                                    <?php elseif($check_o == 'ppt' || $check_o == 'pttx'): ?>
                                    <img src="https://img.icons8.com/color/48/000000/ms-powerpoint.png" /> <?=$d_file;?>
                                    <?php elseif($check_o == 'txt'): ?>
                                    <img src="https://img.icons8.com/color/48/000000/txt.png" /> <?=$d_file;?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="banner_namethai" class="col-sm-2 col-form-label"></label>
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