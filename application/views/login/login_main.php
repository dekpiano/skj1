<section class="br min-vh-100">
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-7 col-lg-6 mb-5 mb-md-0">
                <img src="<?=base_url('asset/user/img/login_logo.png')?>" alt=""
                    class="img-fluid mb-3 d-none d-md-block">
            </div>

            <!-- Registeration Form -->
            <div class="col-md-5 col-lg-6 ml-auto">
                <h1>ระบบล็อคอิน</h1>
                <form method="post" action="<?=base_url('Control_login/validlogin');?>" class="my-login-validation"
                    novalidate="">
                    <div class="row">
                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="icofont-ui-user"></i>
                                </span>
                            </div>
                            <input id="username" type="text" name="username" placeholder="ชื่อผู้ใช้งาน"
                                class="form-control bg-white border-left-0 border-md" required autofocus>
                            <div class="invalid-feedback">
                                กรอกชื่อผู้ใช้งาน
                            </div>
                        </div>


                        <!-- Password -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="icofont-ui-password"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="รหัสผ่าน"
                                class="form-control bg-white border-left-0 border-md" required>
                            <div class="invalid-feedback">
                                กรอกรหัสผ่าน
                            </div>
                        </div>                    
                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <button type="submit" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold"><i class="icofont-login"></i> Login</span>
                            </button>
                            <?=$this->session->flashdata('msgerr');?>
                        </div>
                </form>
            </div>
        </div>
    </div>




    </div>
</section>
<style>

</style>
<!-- <div class="row">



    <form method="post" action="<?=base_url('Control_login/validlogin');?>" class="my-login-validation" novalidate="">
        <div class="form-group">
            <label for="username">ชื่อผู้ใช้งาน (Email) </label>
            <input id="username" type="text" class="form-control" name="username" value="" required autofocus>
            <div class="invalid-feedback">
                กรอกอีเมล์ผู้ใช้งาน
            </div>
        </div>

        <div class="form-group">
            <label for="password">รหัสผ่าน</label>
            <input id="password" type="password" class="form-control" name="password" required data-eye>
            <div class="invalid-feedback">
                กรอกรหัสผ่าน
            </div>
        </div>

        <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">
                Login
            </button>
        </div>

    </form>


</div> -->