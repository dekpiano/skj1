<style>
#page {
  /*this is just positional stuff*/
  margin:0;
  padding:0;
  position: absolute;
  top: 0;
  left:0;
  bottom: 0;
  width: 100%;  
  /*use multiple background-images first is highest z-order*/
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/239518/birds1.svg"), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/239518/birds2.svg"), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/239518/clouds.svg"), linear-gradient(to bottom,  rgba(255,255,255,0), 40%,rgba(255,255,255,1) 60%), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/239518/BG2.svg");
  background-size: 20%, 20%, 100%, 100%, 50px;
  background-repeat: no-repeat, no-repeat, no-repeat, repeat-x,repeat;
  background-position: 5% 40%, 95% 60%, center bottom;
  z-index:-99;
}

@media (min-width: 1200px){
    .login_area{
        margin-top: 230px;
    }    
}
@media (min-width: 768px){
    .login_area{
        margin-top: 200px;
    }
}
@media (max-width: 575.98px) {
    .login_area{
        margin-top: 100px;
    }
}


   

</style>
<section class="" id="page">
    <div class="container login_area" >
        <div class="row align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-7 col-lg-6 mb-5 mb-md-0">
                <img src="<?=base_url('asset/user/img/login_logo.png')?>" alt=""
                    class="img-fluid mb-3 d-none d-md-block">
            </div>
            <!-- Registeration Form -->
            <div class="col-md-5 col-lg-6 ml-auto">
                <h1>ระบบล็อคอิน </h1>
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