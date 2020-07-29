<?php $status = $this->session->userdata('status')?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <!-- Content Row -->
    <div class="row">
  
        <?php foreach ($menu as $key => $v_menu): ?>
        <?php 
            $permi_menu = @explode("|",$v_menu->Amenu_permission);
            $permi_user = @explode("|",$this->session->userdata('permission_menu')); 
             foreach ($permi_menu as $key => $v_permi):
              if(in_array($v_permi,$permi_user) || $status =='admin'):
            ?>
        
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <a href="<?=base_url($v_menu->Amenu_url);?>">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?=$v_menu->Amenu_name?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        

        <?php endif; ?>
        <?php endforeach; ?>
        <!-- Earnings (Monthly) Card Example -->

        <?php endforeach; ?>


    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->