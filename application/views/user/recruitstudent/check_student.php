<section class="br min-vh-100">
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center text-center">
                            <!-- <img style="width: 150px;" src="<?=base_url('asset/user/img/Logo-SKJ.png');?>"> -->
                            <h2 class="">
                                <span class="theme_color">ตรวจสอบและแก้ไขข้อมูลการสมัครเรียน </span>ปีการศึกษา
                                <?=(date('Y')+543);?>
                            </h2>
                            <p class="large">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style type="text/css">
    .form-control-borderless {
        border: none;
    }

    .form-control-borderless:hover,
    .form-control-borderless:active,
    .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }

    .bd-callout {
        padding: 1.25rem;
        margin-top: 1.25rem;
        margin-bottom: 1.25rem;
        border: 1px solid #eee;
        border-left-width: .25rem;
        border-radius: 0.25rem;

        h4 {
            margin-top: 0;
            margin-bottom: 0.25rem;
        }
    }

    .bd-callout-info {
        border-left-color: #5bc0de;

        h4 {
            color: #5bc0de;
        }
    }

    .bd-callout-warning {
        border-left-color: #f0ad4e;

        h4 {
            color: #f0ad4e;
        }
    }

    .bd-callout-danger {
        border-left-color: #d9534f;

        h4 {
            color: #d9534f;
        }
    }

    .bd-callout-primary {
        border-left-color: #007bff;

        h4 {
            color: #007bff;
        }
    }

    .bd-callout-success {
        border-left-color: #28a745;

        h4 {
            color: #28a745;
        }
    }

    .bd-callout-default {
        border-left-color: #6c757d;

        h4 {
            color: #6c757d;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-3 order-2 mb-4">

                <?php $this->load->view('user/recruitstudent/menu_student.php') ?>
            </div>
            <div class="col-md-9 order-md-1">
                <div class="container m-auto">
                    <div class="justify-content-center pt-5">
                        <form class="card card-sm needs-validation" novalidate="" method="post"
                            action="<?=base_url('checkRegister/dataStudent?a=3')?>">
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="icofont-search-2"></i>
                                </div>
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-borderless "
                                        name="search_stu" type="text" placeholder="ระบุ เลขประจำตัวประชาชน"
                                        value="<?=@$this->input->get('search_stu') == '' ? '' : $this->input->get('search_stu')?>" required
                                        data-inputmask="'mask': '9-9999-99999-99-9'">
                                    <div class="invalid-feedback">
                                        ระบุเลขประจำตัวประชาชน 13 หลัก
                                    </div>
                                </div>

                            </div>
                    </div>
                    <?php $_SESSION['num_to_check'][0]=rand(1,9); $_SESSION['num_to_check'][1]=rand(1,9);?>
                    <center>
                        <div class="input-group col-md-4 mt-3 ">
                            <div class="input-group-prepend">
                                <h2><span class="input-group-text"
                                        id="inputGroupPrepend3"><?=$_SESSION['num_to_check'][0].' + '.$_SESSION['num_to_check'][1]?></span>
                            </div>
                            </h2>
                            <input type="text" class="form-control" name="i_verify" id="i_verify" placeholder="ผลรวม"
                            required>
                            <br>                           
                            <div class="invalid-feedback ">
                                ระบุผลรวม
                            </div>
                        </div>
                        <p class="err_verify text-danger"><?=@$err_verify;?></p>
                       
                        <!--end of col-->

                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" type="submit">ค้นหา</button>
                        </div>
                    </center>
                    <!--end of col-->
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>