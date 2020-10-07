
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
                    
                    <form action="<?=base_url('admin/control_admin_facegroup/').$action;?>" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="facegroup_id" class="col-sm-2 col-form-label">รหัส<?=$title;?></label>
                        <div class="col-sm-10">
                          <input type="text" readonly  class="form-control" id="facegroup_id" name="facegroup_id" value="<?=$action == 'insert_facegroup' ? $facegroup : $facegroup[0]->facegroup_id;?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="facegroup_name" class="col-sm-2 col-form-label">ชื่อ Facebook กลุ่ม</label>
                        <div class="col-sm-10">  
                        <input type="text"   class="form-control" id="facegroup_name" name="facegroup_name" value="<?=$action == 'insert_facegroup' ? '' : $facegroup[0]->facegroup_name;?>" required>                      
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="facegroup_link" class="col-sm-2 col-form-label"><?=$title;?> ลิ้ง</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="facegroup_link" name="facegroup_link" value="<?=$action == 'insert_facegroup' ? '' : $facegroup[0]->facegroup_link;?>" >
                        </div>
                      </div>
                                
                       <div class="form-group row">
                        <label for="facegroup_namethai" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-lg btn-<?=$color?>  btn-block"><?=$icon?> <?php echo end($breadcrumbs);?></button>
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

