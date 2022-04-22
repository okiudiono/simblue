<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIAP KERSADA</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/logomou.png" alt="logo">
              </div>
              <h4>Daftar akun?</h4>
              <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
              <?php echo $content; ?>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-none d-lg-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/off-canvas.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
