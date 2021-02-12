<?= $this->extend('_template/_main/template') ?>

<?= $this->section('content') ?>
  <!-- START Section Sign Up -->
  <section class="bg-gradi sp-100 login-section overflow-hidden d-flex align-items-center min-vh-100">
      <div class="container">
          <div class="row">
              <div class="col-md-6 mt-60 mx-md-auto">
                  <div class="login-box bg-white pr-lg pr-0">
                      <div class="col-md order-md-last">
                          <div class="form-wrap bg-white">
                              <h4 class="btm-sep pb-3 mb-4"><?=lang('Auth.forgotPassword')?></h4>
                              <?= view('Myth\Auth\Views\_message_block') ?>
                              <p><?=lang('Auth.enterEmailForInstructions')?></p>
                              <form action="<?= route_to('forgot') ?>" method="post">
                                  <?= csrf_field() ?>
                                  <div class="row">
                                      <div class="col-12 mt-3">
                                          <div class="form-group position-relative">
                                              <span class="zmdi zmdi-email"></span>
                                              <input type="email" id="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                                  placeholder="<?=lang('Auth.email')?>">
                                              <div class="invalid-feedback">
                                                  <?= session('errors.email') ?>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <button type="submit" id="submit"
                                              class="btn btn-lg btn-custom btn-dark btn-block">
                                              <?=lang('Auth.sendInstructions')?>
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- END Section Sign Up -->
<?= $this->endSection() ?>
