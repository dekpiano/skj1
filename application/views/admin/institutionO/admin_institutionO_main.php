<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูล<?=$title;?>
            
        </h1>
        <div>
        <a href="<?=base_url('admin/institutionO/add');?>" class="btn btn-primary btn-md ">
                <i class="far fa-plus-square"></i> เพิ่ม<?=$title;?>
            </a>
        </div>
        
    </div>

    <div class="row">
        <div class="col-lg-6 col-12">
            <!-- หน่วยงานภายนอก -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?>ภายนอก </h6>

                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>รูป</th>
                                    <th>ชื่อหน่วยงาน</th>
                                    <th>ลิ้งหน่วยงาน</th>
                                    <th>โดย</th>
                                    <th>คำสั่ง</th>
                                </tr>
                            </thead>
                            <?php foreach ($instiO as $key => $v_instiO) : 
                              if($v_instiO->instiO_category == 'ภายนอก') : ?>
                            <tr>
                                <td><img src="<?=base_url()?>uploads/institutionO/<?=$v_instiO->instiO_img;?>"
                                        class="img-fluid" alt="<?=$v_instiO->instiO_name;?>"></td>
                                <td><?=$v_instiO->instiO_name;?></td>
                                <td><?=$v_instiO->instiO_link;?></td>
                                <td><?=$v_instiO->instiO_user;?></td>
                                <td>
                                    <a href="<?=base_url('admin/control_admin_institutionO/edit_institutionO/').$v_instiO->instiO_id.'/'.$v_instiO->instiO_img;?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                                    <a href="<?=base_url('admin/control_admin_institutionO/delete_institutionO/').$v_instiO->instiO_id.'/'.$v_instiO->instiO_img;?>"
                                        class="btn btn-danger btn-sm"
                                        onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i
                                            class="fas fa-trash-alt"></i> ลบ</a>
                                </td>
                            </tr>
                              <?php endif; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <!-- หน่วยงานภายใน -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?>ภายใน </h6>

                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>รูป</th>
                                    <th>ชื่อหน่วยงาน</th>
                                    <th>ลิ้งหน่วยงาน</th>
                                    <th>โดย</th>
                                    <th>คำสั่ง</th>
                                </tr>
                            </thead>
                            <?php foreach ($instiO as $key => $v_instiO) : 
                              if($v_instiO->instiO_category == 'ภายใน') : ?>
                            <tr>
                                <td><img src="<?=base_url()?>uploads/institutionO/<?=$v_instiO->instiO_img;?>"
                                        class="img-fluid" alt="<?=$v_instiO->instiO_name;?>"></td>
                                <td><?=$v_instiO->instiO_name;?></td>
                                <td><?=$v_instiO->instiO_link;?></td>
                                <td><?=$v_instiO->instiO_user;?></td>
                                <td>
                                    <a href="<?=base_url('admin/control_admin_institutionO/edit_institutionO/').$v_instiO->instiO_id.'/'.$v_instiO->instiO_img;?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                                    <a href="<?=base_url('admin/control_admin_institutionO/delete_institutionO/').$v_instiO->instiO_id.'/'.$v_instiO->instiO_img;?>"
                                        class="btn btn-danger btn-sm"
                                        onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i
                                            class="fas fa-trash-alt"></i> ลบ</a>
                                </td>
                            </tr>
                              <?php endif; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->