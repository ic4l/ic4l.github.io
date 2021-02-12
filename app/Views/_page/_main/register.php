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
                                  <h4 class="btm-sep pb-3 mb-5">Register</h4>
                                  <form class="form" method="post" action="#">
                                      <div class="row">
                                          <div class="col-12">
                                              <div class="form-group position-relative">
                                                  <span class="zmdi zmdi-account"></span>
                                                  <input type="text" id="username" class="form-control"
                                                      placeholder="Username">
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group position-relative">
                                                  <span class="zmdi zmdi-email"></span>
                                                  <input type="email" id="email" class="form-control"
                                                      placeholder="Email Address">
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group position-relative">
                                                  <span class="zmdi zmdi-lock"></span>
                                                  <input type="password" id="password" class="form-control"
                                                      placeholder="Password">
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <button type="submit" id="submit"
                                                  class="btn btn-lg btn-custom btn-dark btn-block">
                                                  Sign Up
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                          <div class="col-md-6 order-md-first">
                              <div class="content text-center">
                                  <div class="mb-5">
                                      <h3 class="c-black">Already have an account?</h3>
                                      <a href="<?= base_url('login'); ?>" class="btn btn-custom">sign In</a>
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
