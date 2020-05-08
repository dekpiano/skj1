
 <?php if($this->uri->segment(1) != 'login' && $this->uri->segment(1) != 'RegStudent' && $this->uri->segment(1) != 'checkRegister'): ?>
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="services section-bg">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-6 footer-links">
            <h4><i class="icofont-company"></i> โรงเรียนในเครือข่ายสวนกุหลาบฯ</h4>
            <div class="row">
			  <div class="col-lg-6 col-md-6" style="float: left;">
			  <ul>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="http://www.sk.ac.th/">สวนกุหลาบวิทยาลัย</a></li>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="http://www.skn.ac.th/">สวนกุหลาบวิทยาลัย นนทบุรี</a></li>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="http://www.skr.ac.th/">สวนกุหลาบวิทยาลัย รังสิต</a></li>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="http://www.sks.ac.th/">นวมินทราชินูทิศ สวนกุหลาบวิทยาลัย สมุทรปราการ</a></li>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="http://www.skp.ac.th/">นวมินทราชินูทิศ สวนกุหลาบวิทยาลัย ปทุมธานี</a></li>
              </ul>
			</div>
			 <div class="col-lg-6 col-md-6" style="float: left;">
			  <ul>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="http://www.skpb.ac.th/">สวนกุหลาบวิทยาลัย เพชรบูรณ์</a></li>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="https://www.sksb.ac.th/">สวนกุหลาบวิทยาลัย สระบุรี</a></li>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="http://www.suanchon.ac.th/">สวนกุหลาบวิทยาลัย ชลบุรี</a></li>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="https://www.skj.ac.th/">สวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</a></li>
				  <li><i class="bx bx-chevron-right"></i> <a target ="_blank" href="http://www.sk-thonburi.ac.th/">สวนกุหลาบวิทยาลัย ธนบุรี</a></li>
              </ul>
			</div>
          </div>
			</div>

          <div class="col-lg-5 col-md-6 footer-links">
            <div>
			  <h4><i class="icofont-company"></i> หน่วยงานที่เกี่ยวข้อง</h4>
				<div class="col-12">
					<ul>
					  <li><i class="bx bx-chevron-right"></i> <a href="http://www.nakhonsawanpao.go.th/">องค์การบริหารส่วนจังหวัดนครสวรรค์</a></li>
					  <li><i class="bx bx-chevron-right"></i> <a href="#">กรมส่งเสริมการปกครองท้องถิ่น</a></li>
					  <li><i class="bx bx-chevron-right"></i> <a href="#">กองการศึกษา ศาสนาและวัฒนธรรม อบจ.นครสวรรค์</a></li>
					</ul>
				</div>
           </div>
		</div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</span></strong> All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
<?php endif; ?>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>/asset/user/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>/asset/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>/asset/user/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url()?>/asset/user/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url()?>/asset/user/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?=base_url()?>/asset/user/vendor/counterup/counterup.min.js"></script>
  <script src="<?=base_url()?>/asset/user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>/asset/user/vendor/venobox/venobox.min.js"></script>
  <script src="<?=base_url()?>/asset/user/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>/asset/user/js/main.js?v=1000"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  

</body>
    <script>
       
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                swal("แจ้งเตือน", "กรุณากรอกข้อมูลให้ครบ!", "warning")
              }
              form.classList.add('was-validated');
              
            }, false);
          });
        }, false);
      })();
    </script>
    <script type="text/javascript">

    function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
          }
          
          reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
      }

      $("#recruit_img").change(function() {
        readURL(this);
      });

  </script> 

</html>
 <?php $this->load->view('user/recruitstudent/alert_student.php') ?>