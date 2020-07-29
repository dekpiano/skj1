<section class="jumbotron text-center bg_headertitel mb-0">
    <div class="container">
        <h1>รายชื่อนักเรียน</h1>
        <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

    </div>
</section>
<section class="section" style="background: #202c62;">
    <div class="container">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h4 class="border-bottom border-gray pb-2 mb-0">รายชื่อนักเรียน ตามกลุ่มเรียน (Covid-19) ปี 63 <small class="font-weight-bold">(Update 14/07/2563)</small></h4>
            <?php for ($i=1; $i <= 6 ; $i++) : ?>
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                    <a href="<?=base_url('uploads/document/บริหารวิชาการ/รายชื่อนักเรียน/รายชื่อนักเรียน-ม.'.$i.'-ตามกลุ่มเรียน-1-2563_covid.pdf');?>"
                        target="_blank" rel="noopener noreferrer">
                        <strong class="d-block text-gray-dark"><i class="icofont-download"></i> รายชื่อนักเรียน
                            ม.<?=$i;?></strong>
                    </a>

                </p>
            </div>
            <?php endfor; ?>
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h4 class="border-bottom border-gray pb-2 mb-0">รายชื่อนักเรียน (ชั้นตามปกติ) ปี 63 <small class="font-weight-bold">(Update 14/07/2563)</small>  </h4>
            <?php for ($i=1; $i <= 6 ; $i++) : ?>
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                    <a href="<?=base_url('uploads/document/บริหารวิชาการ/รายชื่อนักเรียน/รายชื่อนักเรียน-ม.'.$i.'-ตามชั้นเรียนปกติ-1-2563.pdf');?>"
                        target="_blank" rel="noopener noreferrer">
                        <strong class="d-block text-gray-dark"><i class="icofont-download"></i> รายชื่อนักเรียน
                            ม.<?=$i;?></strong>
                    </a>

                </p>
            </div>
            <?php endfor; ?>
        </div>
        
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h4 class="border-bottom border-gray pb-2 mb-0">รายชื่อนักเรียน (สำหรับแก้ไขได้ Excel) ปี 63</h4>
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                    <a href="https://drive.google.com/drive/folders/17TjYZucD29CYglHMvgJ3cRoMatGKmaOC?fbclid=IwAR3pK4cZRXun9luJNVBWrszSYwKdOsgRIB0hNzwUgb64egL38hh9m3Cub4k"
                        target="_blank" rel="noopener noreferrer">
                        <strong class="d-block text-gray-dark"><i class="icofont-download"></i> รายชื่อนักเรียน ปี 63 (สามารถแก้ไขได้)</strong>
                    </a>

                </p>
            </div>
        </div>
    </div>
</section>