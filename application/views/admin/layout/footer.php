      <!-- Footer -->
      <footer class="sticky-footer bg-white">
          <div class="container my-auto">
              <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Your Website 2019</span>
              </div>
          </div>
      </footer>
      <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ออกจากระบบ?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <div class="modal-body">ต้องการออกจากระบบหรือไม่ !</div>
                  <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="<?= base_url(
                          'control_login/logout'
                      ) ?>">Logout</a>
                  </div>
              </div>
          </div>
      </div>

      


      <!-- Bootstrap core JavaScript-->
      <script src="<?= base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?= base_url() ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?= base_url() ?>asset/js/sb-admin-2.min.js"></script>

      <script src="<?= base_url() ?>asset/js/jquery-ui.js?v=1000"></script>

      <!-- Page level plugins -->
      <script src="<?= base_url() ?>asset/vendor/chart.js/Chart.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="<?= base_url() ?>asset/js/demo/chart-area-demo.js"></script>
      <script src="<?= base_url() ?>asset/js/demo/chart-pie-demo.js"></script>

      <!-- Page level plugins -->
      <script src="<?= base_url() ?>asset/vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="<?= base_url() ?>asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
      <!-- JavaScript Alert-->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="<?= base_url() ?>asset/js/demo/datatables-demo.js?v=1001"></script>
      <script src="<?= base_url() ?>asset/js/jquery.inputmask.min.js"></script>
      <script src="<?= base_url() ?>asset/vendor/sweetalert.min.js"></script>
      <script src="<?= base_url() ?>asset/js/passtrength.js"></script>
      <script src="<?= base_url() ?>asset/js/personnel_profile.js?v=1002"></script> 

  

      <!-- <script src="https://cdn.tiny.cloud/1/y6b2omlkddg6mbwjuwhrf96ufg0wjfhrf5xw1xes3o6oahi4/tinymce/5/tinymce.min.js"
          referrerpolicy="origin"></script> -->

      <script type="text/javascript"
          src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
      <script type="text/javascript"
          src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.2.1/js/plugins/image.min.js"></script>

      </body>
    <?php $this->load->view('admin/layout/textarea_editor.php'); ?>
      <script type="text/javascript">
$(document).ready(function() {
    
    $(":input").inputmask();

    $(".sort_facegroup").sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('.sort_facegroup>tr').each(function() {
                selectedData.push($(this).attr("rank"));
            });            
            updateOrder(selectedData);
        }
    });
    function updateOrder(data) {
        $.ajax({
            url:"<?=base_url('admin/control_admin_facegroup/ranking');?>",
            type:'post',
            data:{position:data},
            success:function(data){
                console.log(data);
            }
        })
    }
    $(".sort_facegroup").disableSelection();
   
});

$("#uploade_stuall").on('submit', function(e) {

e.preventDefault();
var action = $(this).attr('action');
$.ajax({
    url: action,
    type: "post",
    data: new FormData(this),
    processData: false,
    contentType: false,
    cache: false,
    beforeSend: function() {
        $('#uploadStatus').html(
            '<div class="spinner-border text-primary" role="status">  <span class="sr-only">Loading...</span></div>'
        );
        $('#load1').hide();
    },
    error: function(resp) {
        $('#uploadStatus').html(
            '<p style="color:#EA4335;">File upload failed, please try again หรือข้อมูลซ้ำ.</p>'
        );
        console.log(resp);
    },
    success: function(resp) {
        window.location.href = "<?=base_url('admin/students');?>";
        console.log(resp);
    }


});

});

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
$("#jour_img ,#instiO_img, .img_mainpic,.banner_img").change(function() {
    readURL(this);
});
      </script>


      <?php if ($this->session->flashdata('msg') == 'ok'): ?>
      <script type="text/javascript">
swal("สำเร็จ!", "<?= $this->session->flashdata('messge') ?>", "success");
      </script>
      <?php endif; ?>
      <?php if ($this->session->flashdata('msg_uploadfile') == 'on'): ?>
      <script type="text/javascript">
swal("ผิดพลาด!", "<?= $this->session->flashdata('messge') ?>", "error");
      </script>
      <?php endif; ?>

      </html>

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
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
      </script>