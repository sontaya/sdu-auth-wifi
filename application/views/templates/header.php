<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title ?> | eProfile</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/StarAdmin/vendors/iconfonts/mdi/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/StarAdmin/vendors/css/vendor.bundle.base.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/StarAdmin/vendors/css/vendor.bundle.addons.css'); ?>">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/StarAdmin/vendors/icheck/skins/all.css'); ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/StarAdmin/css/style.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo-sdu-text-th.png'); ?>" />

  <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>">

  <?php if(isset($cssSrc)) { ?>
    <?php foreach($cssSrc as $css): ?>
      <link href="<?= base_url(); ?><?= $css ?>" rel="stylesheet">
    <?php endforeach; ?>
  <?php } ?>

</head>
