 <!-- Javascript -->
 <script src="<?= base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
 <script src="<?=base_url();?>asset/admin/plugins/popper.min.js"></script>
 <script src="<?=base_url();?>asset/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- Charts JS -->
 <script src="<?=base_url();?>asset/admin/plugins/chart.js/chart.min.js"></script>
 <script src="<?=base_url();?>asset/admin/js/index-charts.js"></script>

 <!-- Page Specific JS -->
 <script src="<?=base_url();?>asset/admin/js/app.js"></script>
 <script src="<?= base_url() ?>asset/vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="<?= base_url() ?>asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js">
 </script>
  <script src="<?= base_url() ?>asset/js/jquery.inputmask.min.js"></script>
 <script type="text/javascript"   src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.2.1/js/plugins/image.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.js"></script>

 <script src="<?= base_url() ?>asset/js/demo/datatables-demo.js?v=1001"></script>
 <script src="<?= base_url() ?>asset/js/demo/select-form.js?v=1"></script>

 <script>
  $(":input").inputmask();
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
<?php if ($this->session->flashdata('msg') == "ok"): ?>
      <script type="text/javascript">
Swal.fire("แจ้งเตือน!", "<?= $this->session->flashdata('messge') ?>", "<?= $this->session->flashdata('icon') ?>");
      </script>    
      <?php endif; $this->session->mark_as_temp('msg', 300); ?>
 
     <?php $this->load->view('admin/layout/textarea_editor.php'); ?>
 
 </body>

 </html>