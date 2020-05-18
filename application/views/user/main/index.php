<!-- Banner --> 
<?php $this->load->view('user/banner/banner_main.php') ?>
<!--End Banner-->
<center>
<div class="mt-5 mb-3">
<a href="<?=base_url('Admissions?a=1');?>" class="btn btn-secondary btn-lg text-white animate__animated animate__bounce"><i class="icofont-megaphone-alt"></i> รับสมัครนักเรียน รอบ 2 บัดนี้ - 25 พ.ค. 63 นี้</a>
</div>

</center>
<!-- ประชาสัมพันธ์ -->
<?php $this->load->view('user/news/news_main.php'); ?>

<!-- Content -->
<?php $this->load->view('user/director/director_main.php'); ?>

<!-- SKJ Gellery -->
<?php $this->load->view('user/gellery/gellery_main.php'); ?>
