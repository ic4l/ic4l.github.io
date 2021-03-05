<?= $this->extend('_template/_main/template') ?>

<?= $this->section('content') ?>
<!-- START Section Page Title -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-uppercase mb-4 c-white">Contact us</h2>
            </div>
        </div>
    </div>
</section>
<!-- END Section Page Title -->

<!-- START Section Contact Us -->
<section class="bg-white sp-100-70 contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="btm-sep pb-3 mb-5">Hubungi Kami</h3>
            </div>
            <div class="col-lg-8 mb-60 mb-lg-0 pr-lg-5">
                <div class="bg-white contact-form">
                    <form class="form">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="error_contact"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group position-relative">
                                    <span class="zmdi zmdi-account"></span>
                                    <input type="text" class="form-control" placeholder="Enter Name" id="fullName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group position-relative">
                                    <span class="zmdi zmdi-email"></span>
                                    <input type="text" class="form-control" placeholder="Enter Email" id="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group position-relative">
                                    <span class="zmdi zmdi-border-color"></span>
                                    <input type="text" class="form-control" placeholder="Enter Subject"
                                        id="subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea rows="8" class="form-control" placeholder="Your Message"
                                        id="message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-lg btn-custom" id="contact-submit">
                                    <i class="fa fa-paper-plane"></i> Submit now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <ul class="contact-detail">
                    <li class="mb-30">
                        <i class="zmdi zmdi-pin"></i>
                        <h5 class="mb-2 c-white">Address</h5>
                        <p class="mb-0 c-white"> ABC, North Valley,NewYork 160065</p>
                    </li>
                    <li class="mb-30">
                        <i class="zmdi zmdi-email"></i>
                        <h5 class="mb-2 c-white">Email</h5>
                        <p class="mb-0 c-white">micasa@gmail.com</p>
                    </li>
                    <li class="mb-0">
                        <i class="zmdi zmdi-phone"></i>
                        <h5 class="mb-2 c-white">Whatsapp</h5>
                        <p class="mb-0 c-white">+62 121 121 9970</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END Section Contact Us -->
<?= $this->endSection() ?>
