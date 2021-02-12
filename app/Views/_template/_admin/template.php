<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Start Header -->
    <?= view('_template/_admin/header') ?>
    <!-- End  Header -->
    <!-- Start CSS -->
    <?= view('_template/_admin/css') ?>
    <!-- End CSS -->
  </head>

  <!-- BEGIN Body -->
  <body class="mod-bg-1 mod-nav-link ">
    <!-- Start Template Setting -->
    <?= view('_template/_admin/template_setting') ?>
    <!-- End Template Setting -->

    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
      <div class="page-inner">
        <!-- BEGIN Navbar Left Aside -->
          <?= view('_template/_admin/navbar_left') ?>
        <!-- END Navbar Left Aside -->

        <div class="page-content-wrapper">
          <!-- BEGIN Navbar Top Page Header -->
          <?= view('_template/_admin/navbar_top') ?>
          <!-- END Navbar Top Page Header -->

          <!-- BEGIN Page Content -->
          <main id="js-page-content" role="main" class="page-content">
          <!-- BEGIN Breadcrumb -->
          <?= view('_template/_admin/breadcrumb') ?>
          <!-- END Breadcrumb -->
          
          <!-- BEGIN Content  ------------------------------------------------------------------------------------------------->
          <?= $this->renderSection('content') ?>
          <!-- End Content  --------------------------------------------------------------------------------------------------->
          </main>
          <!-- this overlay is activated only when mobile menu is triggered -->
          <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
          <!-- END Page Content -->

          <!-- BEGIN Page Footer -->
          <?= view('_template/_admin/footer') ?>
          <!-- END Page Footer -->

          <!-- BEGIN Top Shortcuts -->
          <?= view('_template/_admin/top_shortcut') ?>
          <!-- END Top Shortcuts -->

          <!-- BEGIN Color profile -->
          <?= view('_template/_admin/color_profile') ?>
          <!-- END Color profile -->
        </div>
      </div>
    </div>
    <!-- END Page Wrapper -->

    <!-- BEGIN Quick Menu -->
    <?= view('_template/_admin/quick_menu') ?>
    <!-- END Quick Menu -->

    <!-- BEGIN Messenger -->
    <?= view('_template/_admin/messenger') ?>
    <!-- END Messenger -->

    <!-- BEGIN Page Settings -->
    <?= view('_template/_admin/page_setting') ?>
    <!-- END Page Settings -->

    <?= view('_template/_admin/js') ?>
    <?= view('_template/_admin/script') ?>
  </body>
  <!-- END Body -->
</html>
