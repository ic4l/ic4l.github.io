<?php $uri = service('uri'); ?>
<!-- BEGIN Left Aside -->
<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <img src="<?= base_url('_assets/_images/_logo'); ?>/micasa3-1.png" alt="Mi Casa" aria-roledescription="logo">
            <span class="page-logo-text mr-1">Mi Casa V 1.0</span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="info-card">
            <div class="info-card-text">
              <img src="<?= base_url('_assets/_images/_users/'.user()->image); ?>" class="profile-image rounded-circle mb-1 text-center" alt="<?= user()->username; ?>">
                <a href="<?= base_url('profile'); ?>" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-md d-inline-block">
                        <?= user()->fullname; ?>
                    </span>
                </a>
                <span class="d-inline-block text-truncate text-truncate-sm"><?= user()->username; ?></span>
            </div>
            <img src="<?= base_url('_assets/_admin'); ?>/img/card-backgrounds/cover-7-lg.png" class="cover" alt="cover">
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>

        <!-- BEGIN NAVBAR -->
        <ul id="js-nav-menu" class="nav-menu">
          <li class="<?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null)  ?>">
              <a href="<?= base_url('dashboard'); ?>" title="Blank Project" data-filter-tags="blank page">
                  <i class="fas fa-tachometer-alt"></i>
                  <span class="nav-link-text" data-i18n="nav.blankpage">Dashboard</span>
              </a>
          </li>
          <li class="<?= ($uri->getSegment(1) == 'user' ? 'active open' : null)  ?>">
              <a href="#" data-filter-tags="theme settings">
                  <i class="fas fa-user-cog"></i>
                  <span class="nav-link-text" data-i18n="nav.theme_settings">User</span>
              </a>
              <ul>
                  <li class="<?= ($uri->getSegment(1) == 'user' ? 'active' : null)  ?>">
                    <a href="<?= base_url('user/user_list'); ?>" title="User List" data-filter-tags="user">
                      <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">User List</span>
                    </a>
                  </li>
              </ul>
          </li>
          <li class="<?= ($uri->getSegment(1) == 'web_config' ? 'active' : null)  ?>">
              <a href="<?= base_url('web_config'); ?>" data-filter-tags="blank page">
                  <i class="fas fa-tools"></i>
                  <span class="nav-link-text" data-i18n="nav.blankpage">Web Configuration</span>
              </a>
          </li>
          <li>
              <a href="<?= base_url('logout'); ?>"data-filter-tags="blank page">
                  <i class="fas fa-sign-out-alt"></i>
                  <span class="nav-link-text" data-i18n="nav.blankpage">Logout</span>
              </a>
          </li>
        </ul>
        <!-- END NAVBAR -->

        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
</aside>
<!-- END Left Aside -->
