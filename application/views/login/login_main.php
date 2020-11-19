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

.form-control-google {
    position: relative;
    width: 100%;
    height: 50px;
    margin-top: 5px;
    margin-bottom: 10px;
}

.form-control-google input {
    width: 100%;
    border: 0;
    outline: none;
    height: 100%;
    padding: 0 15px;
    transition: 0.4s;
}

.form-control-google input:valid+label {
    top: -0.45rem;
    left: 10px;
    font-size: 0.9rem;
    z-index: 100;
    width: auto;
    height: 0.9rem;
    padding: 0 10px;
    color: rgba(0, 0, 0, 0.3);
}

input:not(:focus) {
    color: rgba(0, 0, 0, 0.5);
}

.form-control-google input:focus+label {
    top: -0.45rem;
    left: 10px;
    font-size: 0.9rem;
    z-index: 100;
    width: auto;
    height: 0.9rem;
    padding: 0 10px;
    color: #3484f0;
}

.form-control-google input:focus~div.border-around {
    border: 2px solid #3484f0;
}

.form-control-google label {
    position: absolute;
    top: 0;
    display: flex;
    align-items: center;
    padding-left: 15px;
    width: 100%;
    height: 100%;
    transition: 0.2s;
    font-size: 1rem;
    color: rgba(0, 0, 0, 0.5);
    background-color: #fff;
    pointer-events: none;
}

.form-control-google div.border-around {
    position: absolute;
    border: 1px solid rgba(0, 0, 0, 0.2);
    height: 100%;
    width: 100%;
    padding-right: 25px;
    top: 0;
    pointer-events: none;
    border-radius: 3px;
    transition: 0.2s;
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
                <h1>ระบบล็อคอิน </h1>
                <form method="post" action="<?=base_url('Control_login/validlogin');?>" class="needs-validation"
                    novalidate>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input id="username" class="form-control " type="text" name="username" required/>
                        <label class="form-label" for="username">ชื่อผู้ใช้งาน</label>
                        <div class="invalid-feedback">
                            กรุณากรอกชื่อผู้ใช้งาน
                        </div>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input id="password" type="password" name="password" class="form-control" required/>
                        <label class="form-label" for="password">รหัสผ่าน</label>
                        <div class="invalid-feedback">
                            กรุณากรอกรหัสผ่าน
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block">
                        <span class="font-weight-bold"><i class="icofont-login"></i> Login</span>
                    </button>
                    <?=$this->session->flashdata('msgerr');?>


                </form>


            </div>
        </div>

    </div>
</section>

</div>