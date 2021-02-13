<?= $this->extend('_template/_main/template') ?>

<?= $this->section('content') ?>
  <!-- START Section Sign Up -->
  <section class="bg-gradi sp-100 login-section overflow-hidden d-flex align-items-center min-vh-100">
      <div class="container">
          <div class="row">
              <div class="col-md-11 mt-60 mx-md-auto">
                  <div class="login-box bg-white pr-lg-5 pr-0">
                      <div class="row no-gutters align-items-center">
                          <div class="col-md-6 order-md-last">
                              <div class="form-wrap bg-white">
                                  <h4 class="btm-sep pb-3 mb-3"><?=lang('Auth.register')?></h4>
                                  <?= view('Myth\Auth\Views\_message_block') ?>
                                  <form action="<?= route_to('register') ?>" method="post">
                                      <?= csrf_field() ?>
                                      <div class="row">
                                          <div class="col-12">
                                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                                            <div class="form-group position-relative">
                                                <span class="zmdi zmdi-email"></span>
                                                <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" autocomplete="off">
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <div class="form-group position-relative">
                                                <span class="zmdi zmdi-account"></span>
                                                <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" aria-describedby="emailHelp" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                            </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group position-relative">
                                                  <span class="zmdi zmdi-lock"></span>
                                                  <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group position-relative">
                                                  <span class="zmdi zmdi-lock"></span>
                                                  <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <button type="submit" id="submit"
                                                  class="btn btn-lg btn-custom btn-dark btn-block">
                                                  <?=lang('Auth.register')?>
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                          <div class="col-md-6 order-md-first">
                              <div class="content text-center">
                                  <div class="mb-5">
                                      <h3 class="c-black"><?=lang('Auth.alreadyRegistered')?></h3>
                                      <a href="<?= route_to('login') ?>" class="btn btn-custom"><?=lang('Auth.signIn')?></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- END Section Sign Up -->
<?= $this->endSection() ?>
