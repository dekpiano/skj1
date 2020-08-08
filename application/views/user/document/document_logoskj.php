<section class="jumbotron text-center bg_headertitel mb-0">
    <div class="container">
        <h1>ตราสัญลักษณ์</h1>
        <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

    </div>
</section>
<section class="section" style="background: #202c62;">
    <div class="container">
    
  <div class="row">
    <div class="col-lg-8 mx-auto">

      <!-- List group-->
      <ul class="list-group shadow">
      <?php for ($i=1; $i <= 6 ; $i++) : ?>
        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">แบบที่ <?=$i;?></h5>
              <p class="font-italic text-muted mb-0 small">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
             
            </div><img loading="lazy" src="<?=base_url('uploads/logo/LogoSKJ_'.$i.'.png');?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->
        </li>
        <!-- End -->
        <?php endfor; ?>
      </ul>
      <!-- End -->

      <div class="text-center mt-3">
      <a href="<?=base_url('uploads/logo/LogoSKJ.rar');?>" target="_blank" class="btn btn-light"><i class="icofont-download"></i> ดาวน์โหลดไฟล์ต้นฉบับ</a>
      
      </div>
    </div>
  </div>
  
    </div>
</section>