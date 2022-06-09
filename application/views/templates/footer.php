        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">สงวนลิขสิทธิ์ © <?php echo date("Y")+543; ?>
              <a href="http://personnel.dusit.ac.th/" target="_blank">กองบริหารงานบุคคล มหาวิทยาลัยสวนดุสิต</a>.</span>
            <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">ออกแบบและพัฒนาโดย ฝ่ายศูนย์ข้อมูลกลาง สำนักวิทยบริการและเทคโนโลยีสารสนเทศ
              <i class="mdi mdi-xml"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url('assets/themes/StarAdmin/vendors/js/vendor.bundle.base.js'); ?>"></script>
  <script src="<?php echo base_url('assets/themes/StarAdmin/vendors/js/vendor.bundle.addons.js'); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/themes/StarAdmin/js/off-canvas.js'); ?>"></script>
  <script src="<?php echo base_url('assets/themes/StarAdmin/js/misc.js'); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->

  <script>
    var base_url = '<?php echo base_url(); ?>';
  </script>

  <?php if(isset($jsSrc)) { ?>
    <?php foreach($jsSrc as $js): ?>
      <script src="<?= base_url(); ?><?= $js ?>"></script>
    <?php endforeach; ?>
  <?php } ?>
  <!-- End custom js for this page-->
</body>

</html>
