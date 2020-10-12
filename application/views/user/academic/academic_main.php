<style>
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*/
.nav-pills-custom .nav-link {
    color: #aaa;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: #fa147a;
    background: #fff;
}


/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}

.bg-img::after {
    content: "";
    position: absolute;
    top: 372px;
    left: 0;
    height: 78px;
    width: 100%;
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/rip.svg) bottom center;
    background-size: 150%;
    transform: rotate(180deg);
}
</style>
<!-- Demo header-->

<section class="py-5 header " style="background: linear-gradient(to left, #249ffd, #89d2f6);">
    <div class="container py-4 ">
        <header class="text-center mb-5 pb-5 text-white content-about">
            <h1 class="display-4">บริหารวิชาการ</h1>

        </header>


        <div class="row ">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link mb-3 h5 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill"
                        href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase "><i class="icofont-bullhorn"></i>
                            ประชาสัมพันธ์</span></a>

                    <a class="nav-link mb-3 h5 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill"
                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase"><i class="icofont-group-students"></i>
                            รายชื่อนักเรียน</span></a>

                    <a class="nav-link mb-3 h5 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill"
                        href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase"><i class="icofont-calendar"></i> ตารางเรียน
                            - สอน</span></a>

                </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4"><i class="icofont-bullhorn"></i> ประชาสัมพันธ์</h4>
                        <p class="font-italic text-muted mb-2">วิชาการยินดีต้อนรับ</p>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <?php $this->load->view(
                            'user/document/document_liststudent.php'
                        ); ?>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4">ตารางเรียน - สอน</h4>
                        <?php $this->load->view(
                            'user/academic/schedule/schedule_main.php'
                        ); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>