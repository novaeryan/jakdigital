<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jak Digital BBPOM di Jakarta - Index</title>
  <meta content="" name="description"> 
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/jakdigital.png" rel="icon">
  <link href="assets/img/jakdigital.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- bagian web dinamis -->
  <?php
  if (@$_GET['page'] == 'landing' || @$_GET['page'] == '') {
    include "landing.php";
  } elseif (@$_GET['page'] == 'profile_bbpom') {
    include "profile_bbpom.php";
  } elseif (@$_GET['page'] == 'profile_tatausaha') {
    include "profile_tatausaha.php";
  } elseif (@$_GET['page'] == 'profile_pemeriksaan') {
    include "profile_pemeriksaan.php";
  } elseif (@$_GET['page'] == 'profile_pengujian') {
    include "profile_pengujian.php";
  } elseif (@$_GET['page'] == 'profile_penindakan') {
    include "profile_penindakan.php";
  } elseif (@$_GET['page'] == 'profile_infokom') {
    include "profile_infokom.php";
  } 
  ?>
  <!-- akhir bagian web dinamis -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<!-- warna back groud : style="background: #fef8f5" -->
</html>