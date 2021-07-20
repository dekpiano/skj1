<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <!-- Begin Page Content -->
        <div class="container-xl">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูล<?=$title;?></h1>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?> <a
                            href="<?=base_url('admin/images/add');?>" class="btn btn-primary btn-sm float-end text-white"> <i class="far fa-plus-square"></i> เพิ่ม<?=$title;?></a></h6>

                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>รหัส<?=$title;?></th>
                                    <th>ชื่อ<?=$title;?></th>
                                    <th>คำสั่ง</th>
                                </tr>
                            </thead>
                            <?php foreach ($img as $key => $v_img) : ?>
                            <tr>
                                <td><?=$v_img->img_id;?></td>
                                <td><?=$v_img->img_title;?></td>
                                <td>
                                    <a href="<?=base_url('admin/images/update/').$v_img->img_id;?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                                    <a href="<?=base_url('admin/control_admin_images/delete_images/').$v_img->img_id.'/'.$v_img->img_mainpic;?>"
                                        class="btn btn-danger btn-sm"
                                        onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i
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
    </div>

</div>