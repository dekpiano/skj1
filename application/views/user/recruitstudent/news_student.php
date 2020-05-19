<section class="br min-vh-100">
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center">
                            <h2 class="text-center">
                                <span class="theme_color"><i class="fas fa-bullhorn"></i> ระบบรับสมัครนักเรียน
                                </span>ปีการศึกษา <?=(date('Y')+543);?>
                            </h2>
                            <p class="large">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">


        <div class="row">
            <div class="col-md-3 order-2  mb-4">
                <?php $this->load->view('user/recruitstudent/menu_student.php') ?>
            </div>
            <div class="col-md-9 order-md-1 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">จำนวนผู้สมัคร</h3>
                        <div class="row text-center">
                            <div class="col-md-6">
                                <h1> ม.1 <span class="counter"><?=$m1;?></span> คน</h1>
                            </div>
                            <div class="col-md-6">
                                <h1> ม.4 <span class="counter"><?=$m4;?></span> คน</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                <h3><i class="icofont-megaphone"></i> ประชาสัมพันธ์</h3>
                <a href="https://skj.ac.th/news/newsDetail/news_009">
                    <div class="bs-callout bs-callout-warning bg-white">
                        <h4><i class="icofont-notepad"></i> ประกาศรายชื่อผู้สมัครนักเรียน ม.1  ม.4 และโควต้า (รอบที่ 1) </h4>
                        ลงวันที่ 18 พ.ค.2563
                    </div>
                </a>
                <a href="<?=base_url('checkRegister?a=3');?>">
                    <div class="bs-callout bs-callout-warning bg-white">
                        <h4><i class="icofont-notepad"></i> ขณะนี้ทางเว็บไซต์เปิดให้ตรวจสอบและแก้ไขข้อมูล </h4>
                        กำลังตรวจสอบข้อมูลเพื่อ แก้ไข และ เปิดให้พิมพ์ใบสมัคร ลงวันที่ 14 พ.ค.2563
                    </div>
                </a>
                <a href="<?=base_url('checkRegister?a=3');?>">
                    <div class="bs-callout bs-callout-danger bg-white">
                        <h4><i class="icofont-notepad"></i> สำหรับผู้สมัครที่ยังไม่ได้ใส่รูปนักเรียน
                            กรุณาอัปเดตรูปนักเรียน
                        </h4>
                        ถ้าไม่ใส่รูปนักเรียน หรือรูปไม่ถูกต้อง จะไม่สามารถพิมพ์ใบสมัครสอบได้ ลงวันที่ 13 พ.ค.2563
                    </div>
                </a>
                <div class="bs-callout bs-callout-success bg-white">
                    <h4><i class="icofont-notepad"></i> เปิดรับสมัครนักเรียนออนไลน์ ระดับชั้นมัธยมศึกษาปีที่ 1 และ 4
                    </h4>
                    ตอนนี้ปิดรับสมัครเป็นที่เรียบร้อย ลงวันที่ 12 พ.ค.2563
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.bs-callout {
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #eee;
    border-left-width: 5px;
    border-radius: 3px;
}

.bs-callout h4 {
    margin-top: 0;
    margin-bottom: 5px;
}

.bs-callout p:last-child {
    margin-bottom: 0;
}

.bs-callout code {
    border-radius: 3px;
}

.bs-callout+.bs-callout {
    margin-top: -5px;
}

.bs-callout-default {
    border-left-color: #777;
}

.bs-callout-default h4 {
    color: #777;
}

.bs-callout-primary {
    border-left-color: #428bca;
}

.bs-callout-primary h4 {
    color: #428bca;
}

.bs-callout-success {
    border-left-color: #5cb85c;
}

.bs-callout-success h4 {
    color: #5cb85c;
}

.bs-callout-danger {
    border-left-color: #d9534f;
}

.bs-callout-danger h4 {
    color: #d9534f;
}

.bs-callout-warning {
    border-left-color: #f0ad4e;
}

.bs-callout-warning h4 {
    color: #f0ad4e;
}

.bs-callout-info {
    border-left-color: #5bc0de;
}

.bs-callout-info h4 {
    color: #5bc0de;
}
</style>