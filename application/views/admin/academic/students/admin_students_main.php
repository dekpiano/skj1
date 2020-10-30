
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูล<?=$title;?></h1>
          </div>

           <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 ">
              <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?> <a href="<?=base_url('admin/students/add');?>" class="btn btn-primary btn-sm float-right"> <i class="far fa-plus-square"></i> เพิ่ม<?=$title;?></a></h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>                      
                      <th>ชั้น</th>
                      <th>ขื่อ - นามสกุล</th>
                      <th>คำสั่ง</th>
                    </tr>
                  </thead>    
                  <?php foreach ($students as $key => $v_students) : ?>             
                    <tr>                     
                      <td>ม.<?=$v_students->stu_class.'/'.$v_students->stu_room;?></td>
                      <td><?=$v_students->stu_prefix.$v_students->stu_fristName.' '.$v_students->stu_lastName;?></td>
                      <td>
                        <a  href="<?=base_url('admin/academic/students/control_admin_students/edit_students/').$v_students->schestu_id.'/'.$v_students->schestu_filename;?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                        <a  href="<?=base_url('admin/academic/students/control_admin_students/delete_students/').$v_students->schestu_id.'/'.$v_students->schestu_filename;?>" class="btn btn-danger btn-sm" onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i class="fas fa-trash-alt"></i> ลบ</a>
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

