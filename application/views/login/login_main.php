<style>
#page {
    /*this is just positional stuff*/
    margin: 0;
    padding: 0;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    /*use multiple background-images first is highest z-order*/
    background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/239518/birds1.svg"), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/239518/birds2.svg"), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/239518/clouds.svg"), linear-gradient(to bottom, rgba(255, 255, 255, 0), 40%, rgba(255, 255, 255, 1) 60%), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/239518/BG2.svg");
    background-size: 20%, 20%, 100%, 100%, 50px;
    background-repeat: no-repeat, no-repeat, no-repeat, repeat-x, repeat;
    background-position: 5% 40%, 95% 60%, center bottom;
    z-index: -99;
}

@media (min-width: 1200px) {
    .login_area {
        margin-top: 230px;
    }
}

@media (min-width: 768px) {
    .login_area {
        margin-top: 200px;
    }
}

@media (max-width: 575.98px) {
    .login_area {
        margin-top: 100px;
    }
}

.form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}

.form-signin .checkbox {
    font-weight: 400;
}

.form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
}

.form-signin .form-control:focus {
    z-index: 2;
}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>
<section class="vh-100" id="page">
    <div class="container ">
        <div class="row vh-100 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-7 col-lg-6 mb-5 mb-md-0">
                <img src="<?=base_url('asset/user/img/login_logo.png')?>" alt=""
                    class="img-fluid mb-3 d-none d-md-block">
            </div>
            <!-- Registeration Form -->
            <div class="col-md-5 col-lg-6 ml-auto">

                <form class="form-signin needs-validation" method="post" action="<?=base_url('Control_login/validlogin');?>"novalidate>
                    <img class="mb-4" src="<?=base_url();?>uploads/logo/Logo-nav.png" alt=""
                        width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">เข้าสู่ระบบ</h1>
                    <label for="username" class="sr-only">Email address</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Email address"
                        required autofocus>
                    <div class="invalid-feedback">
                        กรุณากรอกชื่อผู้ใช้งาน
                    </div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="invalid-feedback">
                        กรุณากรอกรหัสผ่าน
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        <span class="font-weight-bold"><i class="icofont-login"></i> Login</span>
                    </button>
                    <?=$this->session->flashdata('msgerr');?>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>



            </div>
        </div>

    </div>
</section>

</div>