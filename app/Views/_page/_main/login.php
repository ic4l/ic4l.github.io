<?= $this->extend('_template/_main/template') ?>

<?= $this->section('content') ?>
  <!-- START Section Login -->
  <section class="bg-gradi sp-100 login-section overflow-hidden d-flex align-items-center min-vh-100">
      <div class="container">
          <div class="row">
              <div class="col-md-11 mt-60 mx-md-auto">
                  <div class="login-box bg-white pl-lg-5 pl-0">
                      <div class="row no-gutters align-items-center">
                          <div class="col-md-6">
                              <div class="form-wrap bg-white">
                                  <h4 class="btm-sep pb-3 mb-5"><?=lang('Auth.loginTitle')?></h4>
                                  <?= view('Myth\Auth\Views\_message_block') ?>
                                  <form action="<?= route_to('login') ?>" method="post">
                        						<?= csrf_field() ?>
                                      <div class="row">
                                        <?php if ($config->validFields === ['email']): ?>
                                          <div class="col-12">
                                              <div class="form-group position-relative">
                                                  <span class="zmdi zmdi-account"></span>
                                                  <input type="email" id="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                      name="login" placeholder="<?=lang('Auth.email')?>">
                                                      <div class="invalid-feedback">
                                        								<?= session('errors.login') ?>
                                        							</div>
                                              </div>
                                          </div>
                                        <?php else: ?>
                                          <div class="col-12">
                                              <div class="form-group position-relative">
                                                  <span class="zmdi zmdi-account"></span>
                                                  <input type="email" id="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                      name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                                      <div class="invalid-feedback">
                                        								<?= session('errors.login') ?>
                                        							</div>
                                              </div>
                                          </div>
                                        <?php endif; ?>
                                          <div class="col-12">
                                              <div class="form-group position-relative">
                                                  <span class="zmdi zmdi-email"></span>
                                                  <input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                    							placeholder="<?=lang('Auth.password')?>">
                                                  <div class="invalid-feedback">
                                    								<?= session('errors.password') ?>
                                    							</div>
                                              </div>
                                          </div>
                                          <div class="col-12 text-lg-left">
                                            <?php if ($config->allowRemembering): ?>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" <?php if(old('remember')) : ?> checked <?php endif ?> >
                                                <label class="form-check-label" for="defaultCheck1">
                                                  <?=lang('Auth.rememberMe')?>
                                                </label>
                                              </div>
                                            </div>
                                            <?php endif; ?>
                                          </div>
                                          <div class="col-12 text-lg-right">
                                            <?php if ($config->activeResetter): ?>
                                            		<a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a>
                                            <?php endif; ?>
                                          </div>
                                          <div class="col-12 mt-30">
                                              <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
                                          </div>
                                      </div>
                                      <div class="form-check">

                                  </form>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="content text-center">
                                  <div class="mb-5">
                                    <?php if ($config->allowRegistration) : ?>
                                      <h3 class="c-black">First time here?</h3>
                                      <a href="<?= route_to('register') ?>" class="btn btn-custom"><?=lang('Auth.needAnAccount')?></a>
                                    <?php endif; ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- END Section Login -->
<?= $this->endSection() ?>
