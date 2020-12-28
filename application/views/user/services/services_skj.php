 <style>
.demo {
    padding: 100px 0;
}

.heading-title {
    margin-bottom: 50px;
}

.serviceBox {
    padding: 30px 30px 30px 90px;
    /* background: #f8f8f8; */
    color: #333;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
}

.serviceBox:hover {
    background: #249ffd;
    color: #fff;
}

.serviceBox:after {
    content: "";
    display: block;
    border-top: 500px solid #fff;
    border-left: 500px solid transparent;
    margin-top: -55%;
    margin-left: 100%;
    opacity: 0;
    position: absolute;
    transform: scale(2);
    transition: all 0.3s ease-in-out 0s;
}

.serviceBox:hover:after {
    margin-left: 0;
    opacity: 0.1;
}

.serviceBox .service-icon {
    font-size: 50px;
    color: #249ffd;
    position: absolute;
    left: 20px;
    transition: all 0.3s ease-in-out 0s;
}

.serviceBox:hover .service-icon {
    color: #fff;
}

.serviceBox .title {
    font-size: 22px;
    font-weight: 700;
    margin: 0 0 12px 0;
    text-transform: capitalize;
}

.serviceBox .description {
    font-size: 15px;
    color: #a3a3a3;
    line-height: 25px;
    margin: 0;
    transition: all 0.3s ease-in-out 0s;
}

.serviceBox:hover .description {
    color: #fff;
}

@media only screen and (max-width: 990px) {
    .serviceBox {
        /* margin-bottom: 15px; */
    }
}
 </style>
 <div class="demo" data-aos="fade-up">
     <div class="container">
         <div class="section-title">
             <h2>SKJ บริการ</h2>
         </div>

         <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-6 ">
                 <a href="http://academic.skj.ac.th">
                     <div class="serviceBox">
                         <div class="service-icon">
                             <i class="icofont-brainstorming"></i>
                         </div>
                         <h3 class="title">บริหารวิชาการ</h3>
                         <p class="description">
                             หลักสูตร งานวัดผล ทะเบียนนักเรียน แนะแนวการศึกษา
                         </p>
                     </div>
                 </a>
             </div>

             <div class="col-lg-4 col-md-6 col-sm-6 ">
                 <a href="#">
                     <div class="serviceBox">
                         <div class="service-icon">
                             <i class="icofont-group-students"></i>
                         </div>
                         <h3 class="title">บริหารกิจการนักเรียน</h3>
                         <p class="description">
                             ดำเนินการกิจกรรมต่าง ๆ ที่ไม่เกี่ยวข้องกับการเรียนในห้องเรียน
                         </p>
                     </div>
                 </a>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-6 ">
                 <a href="#">
                     <div class="serviceBox">
                         <div class="service-icon">
                             <i class="icofont-presentation"></i>
                         </div>
                         <h3 class="title">บริหารทั่วไป</h3>
                         <p class="description">
                             บริหารงานอื่นๆ บรรลุผลตามมาตรฐานคุณภาพและเป้าหมายที่กำหนด
                         </p>
                     </div>
                 </a>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-6 ">
                 <a href="<?= base_url('document') ?>">
                     <div class="serviceBox">
                         <div class="service-icon">
                             <i class="icofont-file-document"></i>
                         </div>
                         <h3 class="title">ดาวน์โหลดเอกสาร</h3>
                         <p class="description">
                             แบบฟอร์ม คำสั่ง เอกสารอื่น ๆ
                         </p>
                     </div>
                 </a>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-6 ">
                 <a href="<?= base_url('logoSKJ') ?>">
                     <div class="serviceBox">
                         <div class="service-icon">
                             <i class="icofont-medal "></i>
                         </div>
                         <h3 class="title">ตราโรงเรียน</h3>
                         <p class="description">
                             Logo มีด้วยกัน 6 แบบ
                         </p>
                     </div>
                 </a>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-6 ">
                 <a href="<?= base_url('FecebookGroup') ?>">
                     <div class="serviceBox">
                         <div class="service-icon">
                             <i class="icofont-facebook"></i>
                         </div>
                         <h3 class="title">Fecebook กลุ่ม</h3>
                         <p class="description">
                             ประชาสัมพันธ์กลุ่ม ๆ ภายในโรงเรียน
                         </p>
                     </div>
                 </a>
             </div>
           
             <div class="col-lg-4 col-md-6 col-sm-6 ">
                 <a  href="<?=base_url('Email');?>">
                     <div class="serviceBox">
                         <div class="service-icon">
                             <i class="icofont-email"></i>
                         </div>
                         <h3 class="title">Email โรงเรียน</h3>
                         <p class="description">
                             ขออีเมล์ในนามโรงเรียน
                         </p>
                     </div>
                 </a>
             </div>
         </div>

         <h5 class="mt-3">หน่วยงานอื่น ๆ</h5>
         <hr>
         <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-6">
                 <a href="https://dlit.ac.th/site/" target="_blank">
                     <div class="serviceBox" style="background: #e58c16;">
                         <img loading="lazy" src="https://dlit.ac.th/site/_img/web/logow.png" class="img-fluid">
                     </div>
                 </a>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-6 " style="background: #f8f8f8;">
                 <a href="http://www.ipst.ac.th/index.php" target="_blank">
                     <img loading="lazy"
                         src="https://learn.teacherpd.ipst.ac.th/static/ipst-edx/images/logo.075b62234427.png"
                         class="img-fluid">

                 </a>
             </div>
         </div>
     </div>
 </div>