<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Start Header -->
    <?= view('_template/_main/header') ?>
    <!-- End  Header -->
    <!-- Start CSS -->
    <?= view('_template/_main/css') ?>
    <!-- End CSS -->
  </head>

  <body id="page-top">
    <!-- START Preloader -->
  	<?= view('_template/_main/preloader') ?>
  	<!-- END Preloader -->

    <!-- START NavBar Header -->
    <?= view('_template/_main/navbar') ?>
    <!-- END NavBar Header -->

    <!-- BEGIN Content  ------------------------------------------------------------------------------------------------->
  	<?= $this->renderSection('content') ?>
  	<!-- End Content  --------------------------------------------------------------------------------------------------->

    <!-- Start Footer -->
  	<?= view('_template/_main/footer') ?>
  	<!-- End Footer -->

    <!-- Start JS -->
  	<?= view('_template/_main/js') ?>
  	<!-- End JS -->

    <!-- Start Script JS -->
  	<?= view('_template/_main/script') ?>
  	<!-- End Script JS -->
  </body>
</html>
