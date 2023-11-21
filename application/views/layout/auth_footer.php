<!-- <div class="modal-body">Select "Logout" below you are ready to end your current session.</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
</div> -->




<!--   Core JS Files   -->
<script src="<?= base_url('assets/') ?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url('assets/') ?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/') ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url('assets/') ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>