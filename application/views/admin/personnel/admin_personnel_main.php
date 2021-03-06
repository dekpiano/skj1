<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <!-- Begin Page Content -->
        <div class="container-xl">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูล<?=$title;?></h1>
                <a href="<?=base_url('admin/personnel/add');?>" class="btn btn-primary btn-sm float-end text-white"> <i
                        class="far fa-plus-square"></i> เพิ่ม<?=$title;?></a>
            </div>

            <!-- DataTales Example -->
            <div class="row">
                <div class="col-md-2">
                    <nav>
                        <div class="nav flex-column nav-pills" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-Executive-tab" data-toggle="tab"
                                href="#nav-Executive" role="tab" aria-controls="nav-Executive" aria-selected="true">
                                ผู้บริหาร
                            </a>
                            <?php foreach ($learning as $key => $v_learning) : ?>
                            <a class="nav-item nav-link " id="nav-<?=$v_learning->lear_id?>-tab" data-toggle="tab"
                                href="#nav-<?=$v_learning->lear_id?>" role="tab"
                                aria-controls="nav-<?=$v_learning->lear_id?>"
                                aria-selected="true"><?=$v_learning->lear_namethai?></a>
                            <?php endforeach; ?>

                            <?php foreach ($position as $key => $v_position) : ?>
                            <a class="nav-item nav-link " id="nav-<?=$v_position->posi_id;?>-tab" data-toggle="tab"
                                href="#nav-<?=$v_position->posi_id;?>" role="tab"
                                aria-controls="nav-<?=$v_position->posi_id;?>" aria-selected="true">
                                <?=$v_position->posi_name;?>
                            </a>
                            <?php endforeach; ?>

                        </div>
                    </nav>
                </div>
                <div class="col-md-10 col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-Executive" role="tabpanel"
                            aria-labelledby="nav-Executive-tab">
                            <!-- ผู้บริหาร -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 ">
                                    <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?>
                                        ผู้บริหาร
                                    </h6>

                                </div>
                                <div class="card-body">
                                    <table
                                        class="table table-striped table-bordered dt-responsive nowrap dataTable_personnel"
                                        id="dataTable_personnel" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>รูป</th>
                                                <th>ชื่อ - นามสกุล<?=$title;?></th>
                                                <th>ตำแหน่ง</th>
                                                <th>กลุ่มสาระ</th>
                                                <th>Email</th>
                                                <th>คำสั่ง</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($pers as $key => $v_personnel) : 
                  if($v_personnel->pers_position == "posi_001" || $v_personnel->pers_position == "posi_002") : 
                ?>
                                        <tr>
                                            <td>
                                                <div class="d-none">
                                                    <?=$v_personnel->pers_numberGroup?>
                                                </div>

                                                <input type="text" id="pers_numberGroup" name="pers_numberGroup"
                                                    class="form-control pers_numberGroup" style="width: 50px;"
                                                    value="<?=$v_personnel->pers_numberGroup?>"
                                                    pers_id="<?=$v_personnel->pers_id?>">

                                            </td>
                                            <td><img style="width: 100px;"
                                                    src="<?=base_url()?>uploads/personnel/<?=$v_personnel->pers_img;?>"
                                                    class="img-fluid" alt="Responsive image"></td>
                                            <td><?=$v_personnel->pers_prefix.$v_personnel->pers_firstname.' '.$v_personnel->pers_lastname;?>
                                            </td>
                                            <td><?=$v_personnel->posi_name;?></td>
                                            <td><?=$v_personnel->lear_namethai;?></td>
                                            <td><?=$v_personnel->pers_username;?></td>
                                            <td>
                                                <a href="<?=base_url('admin/control_admin_personnel/edit_personnel/').$v_personnel->pers_id;?>"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                                                <a href="<?=base_url('admin/control_admin_personnel/delete_personnel/').$v_personnel->pers_id.'/'.$v_personnel->pers_img;?>"
                                                    class="btn btn-danger btn-sm"
                                                    onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i
                                                        class="fas fa-trash-alt"></i> ลบ</a>
                                            </td>
                                        </tr>
                                        <?php endif;
               endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- จบผู้บริหาร -->
                        </div>

                        <?php foreach ($learning as $key => $v_learning1) : ?>
                        <div class="tab-pane fade show " id="nav-<?=$v_learning1->lear_id?>" role="tabpanel"
                            aria-labelledby="nav-<?=$v_learning1->lear_id?>-tab">


                            <div class="card shadow mb-4">
                                <div class="card-header py-3 ">
                                    <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?>
                                        กลุ่มสาระ<?=$v_learning1->lear_namethai;?>
                                    </h6>

                                </div>
                                <div class="card-body">
                                    <table
                                        class="table table-striped table-bordered dt-responsive nowrap dataTable_personnel"
                                        id="dataTable_personnel" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>รูป</th>
                                                <th>ชื่อ - นามสกุล<?=$title;?></th>
                                                <th>ตำแหน่ง</th>
                                                <th>กลุ่มสาระ</th>
                                                <th>Email</th>
                                                <th>เบอร์โทรศัพท์</th>
                                                <th>คำสั่ง</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($pers as $key => $v_personnel) : 
                  if($v_learning1->lear_namethai ==  $v_personnel->lear_namethai) : 
                ?>
                                        <tr>
                                            <td>
                                                <div class="d-none">
                                                    <?=$v_personnel->pers_numberGroup?>
                                                </div>

                                                <input type="text" id="pers_numberGroup" name="pers_numberGroup"
                                                    class="form-control pers_numberGroup" style="width: 50px;"
                                                    value="<?=$v_personnel->pers_numberGroup?>"
                                                    pers_id="<?=$v_personnel->pers_id?>">

                                            </td>
                                            <td><img style="width: 100px;"
                                                    src="<?=base_url()?>uploads/personnel/<?=$v_personnel->pers_img;?>"
                                                    class="img-fluid" alt="Responsive image"></td>
                                            <td><?=$v_personnel->pers_prefix.$v_personnel->pers_firstname.' '.$v_personnel->pers_lastname;?>
                                            </td>
                                            <td><?=$v_personnel->posi_name;?></td>
                                            <td><?=$v_personnel->lear_namethai;?></td>
                                            <td><?=$v_personnel->pers_username;?></td>
                                            <td><?=$v_personnel->pers_phone;?></td>
                                            <td>
                                                <a href="<?=base_url('admin/control_admin_personnel/edit_personnel/').$v_personnel->pers_id;?>"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                                                <a href="<?=base_url('admin/control_admin_personnel/delete_personnel/').$v_personnel->pers_id.'/'.$v_personnel->pers_img;?>"
                                                    class="btn btn-danger btn-sm"
                                                    onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i
                                                        class="fas fa-trash-alt"></i> ลบ</a>
                                            </td>
                                        </tr>
                                        <?php endif;
               endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>




                        </div>
                        <?php endforeach; ?>

                        <?php foreach ($position as $key => $v_position) : ?>
                        <div class="tab-pane fade show " id="nav-<?=$v_position->posi_id;?>" role="tabpanel"
                            aria-labelledby="nav-<?=$v_position->posi_id;?>-tab">.
                            <!-- พนักงานจ้างเหมา -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 ">
                                    <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?>
                                        <?=$v_position->posi_name;?>
                                    </h6>

                                </div>
                                <div class="card-body">
                                    <table
                                        class="table table-striped table-bordered dt-responsive nowrap dataTable_personnel"
                                        id="dataTable_personnel" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>รูป</th>
                                                <th>ชื่อ - นามสกุล<?=$title;?></th>
                                                <th>ตำแหน่ง</th>
                                                <th>กลุ่มสาระ</th>
                                                <th>Email</th>
                                                <th>เบอร์โทรศัพท์</th>
                                                <th>คำสั่ง</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($pers as $key => $v_personnel) : 
                  if($v_personnel->pers_position == $v_position->posi_id) : 
                ?>
                                        <tr>
                                            <td>
                                                <div class="d-none">
                                                    <?=$v_personnel->pers_numberGroup?>
                                                </div>

                                                <input type="text" id="pers_numberGroup" name="pers_numberGroup"
                                                    class="form-control pers_numberGroup" style="width: 50px;"
                                                    value="<?=$v_personnel->pers_numberGroup?>"
                                                    pers_id="<?=$v_personnel->pers_id?>">

                                            </td>
                                            <td><img style="width: 100px;"
                                                    src="<?=base_url()?>uploads/personnel/<?=$v_personnel->pers_img;?>"
                                                    class="img-fluid" alt="Responsive image"></td>
                                            <td><?=$v_personnel->pers_prefix.$v_personnel->pers_firstname.' '.$v_personnel->pers_lastname;?>
                                            </td>
                                            <td><?=$v_personnel->posi_name;?></td>
                                            <td><?=$v_personnel->lear_namethai;?></td>
                                            <td><?=$v_personnel->pers_username;?></td>
                                            <td><?=$v_personnel->pers_phone;?></td>
                                            <td>
                                                <a href="<?=base_url('admin/control_admin_personnel/edit_personnel/').$v_personnel->pers_id;?>"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                                                <a href="<?=base_url('admin/control_admin_personnel/delete_personnel/').$v_personnel->pers_id.'/'.$v_personnel->pers_img;?>"
                                                    class="btn btn-danger btn-sm"
                                                    onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i
                                                        class="fas fa-trash-alt"></i> ลบ</a>
                                            </td>
                                        </tr>
                                        <?php endif;
               endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- จบพนักงานจ้างเหมา -->

                        </div>
                        <?php endforeach; ?>


                    </div>


                </div>
            </div>




        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>