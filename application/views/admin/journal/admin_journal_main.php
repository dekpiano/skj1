<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูล<?=$title;?></h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 ">
            <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?> <a
                    href="<?=base_url('admin/journal/add');?>" class="btn btn-primary btn-sm float-right"> <i
                        class="far fa-plus-square"></i> เพิ่ม<?=$title;?></a></h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>รูป</th>
                            <th>ฉบับที่</th>
                            <th>ชื่อ<?=$title;?></th>
                            <th>ประจำเดือน</th>
                            <th>เทอมที่</th>
                            <th>ปีการศึกษา</th>
                            <th>วันที่ลง</th>
                            <th>คำสั่ง</th>
                        </tr>
                    </thead>
                    <?php foreach ($jour as $key => $v_jour) : ?>
                    <tr>
                        <td><img src="<?=base_url()?>uploads/journal/<?=$v_jour->jour_img;?>" class="img-fluid"
                                alt="<?=$v_jour->jour_subject;?>" width="240" height="152"></td>
                        <td><?=$v_jour->jour_issue;?></td>
                        <td><?=$v_jour->jour_subject;?></td>
                        <td><?=$v_jour->jour_period;?></td>
                        <td><?=$v_jour->jour_term;?></td>
                        <td><?=$v_jour->jour_schoolyear;?></td>
                        <td><?=$v_jour->jour_createdate;?></td>
                        <td>
                            <a href="<?=base_url('admin/control_admin_journal/edit_journal/').$v_jour->jour_id.'/'.$v_jour->jour_img;?>"
                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                            <a href="<?=base_url('admin/control_admin_journal/delete_journal/').$v_jour->jour_id.'/'.$v_jour->jour_img;?>"
                                class="btn btn-danger btn-sm" onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i
                                    class="fas fa-trash-alt"></i> ลบ</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->