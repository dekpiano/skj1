
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูล<?=$title;?></h1>
          </div>

           <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 ">
              <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?> <a href="<?=base_url('admin/class-schedule/add');?>" class="btn btn-primary btn-sm float-right"> <i class="far fa-plus-square"></i> เพิ่ม<?=$title;?></a></h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>                      
                      <th>ชั้น</th>
                      <th>ไฟล์ตัวอย่าง</th>
                      <th>วันที่ลง</th>
                      <th>คำสั่ง</th>
                    </tr>
                  </thead>    
                  <?php foreach ($class_schedule as $key => $v_class_schedule) : ?>             
                    <tr>                     
                      <td>ม.<?=$v_class_schedule->schestu_classname;?></td>
                      <td><a href="<?=base_url('uploads/academic/class_schedule/'.$v_class_schedule->schestu_filename);?>" target="_blank" rel="noopener noreferrer">ดูไฟล์ <?=$v_class_schedule->schestu_classname;?></a></td>
                      <td><?=$v_class_schedule->schestu_datetime;?></td>
                      <td>
                        <a  href="<?=base_url('admin/academic/class_schedule/control_admin_class_schedule/edit_class_schedule/').$v_class_schedule->schestu_id.'/'.$v_class_schedule->schestu_filename;?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                        <a  href="<?=base_url('admin/academic/class_schedule/control_admin_class_schedule/delete_class_schedule/').$v_class_schedule->schestu_id.'/'.$v_class_schedule->schestu_filename;?>" class="btn btn-danger btn-sm" onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i class="fas fa-trash-alt"></i> ลบ</a>
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

