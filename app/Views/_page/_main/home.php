<?= $this->extend('_template/_main/template') ?>

<?= $this->section('content') ?>

<!-- START Content -->
<!-- START Section Hero -->
<section class="section-hero">
    <div class="banner position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 text-lg-left text-center" data-wow-delay="0.2s">
                    <div class="banner-text">
                        <h1 class="c-white mb-3 mb-md-4">Terbitkan buku Anda melalui kami.</h1>
                        <p class="c-white">Dengan menerbitkan buku dari kamu Anda akan mendapatkan keuntungan berlipat ganda.</p>
                        <a href="#" class="btn btn-lg btn-custom btn-light mt-4">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-none d-lg-block wow zoomIn" data-wow-delay="0.4s">
                    <div class="banner-img">
                        <img src="<?= base_url('_assets/_main'); ?>/img/home/banner-vector.png" alt="business">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="curve-shape">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="846px"
             height="875px">
            <defs>
                <linearGradient id="PSgrad_0" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="rgb(112,90,228)" stop-opacity="1"/>
                    <stop offset="0%" stop-color="rgb(78,98,215)" stop-opacity="1"/>
                    <stop offset="100%" stop-color="rgb(118,190,233)" stop-opacity="1"/>
                </linearGradient>

            </defs>
            <path fill-rule="evenodd" opacity="0.4" fill="rgb(113, 180, 231)"
                  d="M772.494,875.000 C772.494,875.000 1003.238,671.570 647.028,530.599 C647.028,530.599 385.842,375.193 552.111,250.572 C645.545,180.541 651.008,41.335 376.458,5.950 C376.458,5.950 223.512,-23.950 130.756,50.715 C130.756,50.715 0.060,131.198 -0.000,300.905 C-0.049,439.755 1.152,875.000 1.152,875.000 L772.494,875.000 Z"/>
            <path fill="url(#PSgrad_0)"
                  d="M772.494,875.000 C772.494,875.000 1003.238,671.570 647.028,530.599 C647.028,530.599 385.842,375.193 552.111,250.572 C645.545,180.541 651.008,41.335 376.458,5.950 C376.458,5.950 223.512,-23.950 130.756,50.715 C130.756,50.715 0.060,131.198 -0.000,300.905 C-0.049,439.755 1.152,875.000 1.152,875.000 L772.494,875.000 Z"/>
        </svg>
    </div>
</section>
<!-- END Section Hero -->

<!-- START Section About -->
<section class="about-section bg-white">
    <div class="container">
        <div class="clients">
            <div class="client-slider" id="client-slider">
                <div class="item">
                    <img src="<?= base_url('_assets/_main'); ?>/img/client/client-1.png" alt="clients">
                </div>
                <div class="item">
                    <img src="<?= base_url('_assets/_main'); ?>/img/client/client-2.png" alt="clients">
                </div>
                <div class="item">
                    <img src="<?= base_url('_assets/_main'); ?>/img/client/client-3.png" alt="clients">
                </div>
                <div class="item">
                    <img src="<?= base_url('_assets/_main'); ?>/img/client/client-4.png" alt="clients">
                </div>
                <div class="item">
                    <img src="<?= base_url('_assets/_main'); ?>/img/client/client-1.png" alt="clients">
                </div>
                <div class="item">
                    <img src="<?= base_url('_assets/_main'); ?>/img/client/client-2.png" alt="clients">
                </div>
                <div class="item">
                    <img src="<?= base_url('_assets/_main'); ?>/img/client/client-3.png" alt="clients">
                </div>
                <div class="item">
                    <img src="<?= base_url('_assets/_main'); ?>/img/client/client-4.png" alt="clients">
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-last text-center text-lg-left">
                <div class="title-left">
                    <h3 class="top-sep">Why choose us</h3>
                </div>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque inventore veritatis dicta sunt explicabo. Lorem ipsum dolor sit amet,
                    consectadetudzdae rcquisc adipiscing elit aenean socada commodo.</p>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                    consequatur, vel illum qui dolorem voluptas nulla.</p>
                <a href="#" class="btn btn-custom mt-4">Read more</a>
            </div>
            <div class="col-lg-6 d-none d-lg-block order-lg-first">
                <img src="<?= base_url('_assets/_main'); ?>/img/pages/about-img2.png" class="img-fluid pr-lg-4" alt="Business">
            </div>
        </div>
    </div>
</section>
<!-- END Section About -->

<!-- START Section Services -->
<section class="service-section overlay-bg bg-light sp-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title title-left text-center text-lg-left">
                    <h3 class="top-sep">Our services</h3>
                    <p>Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. Aenean socada commodo
                        ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-12 mb-30">
                <div class="service-box">
                    <div class="icon-box">
                        <i class="flaticon-consultation"></i>
                    </div>
                    <h5 class="btm-sep">Market Research</h5>
                    <p>Quae ab illo inventore veritatis et quasi architecto quis ante beatae vitae dicta sunt
                        explicabo ligaui.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-30">
                <div class="service-box">
                    <div class="icon-box">
                        <i class="flaticon-search-engine"></i>
                    </div>
                    <h5 class="btm-sep">Growth Strategy</h5>
                    <p>Quae ab illo inventore veritatis et quasi architecto quis ante beatae vitae dicta sunt
                        explicabo ligaui.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-30">
                <div class="service-box">
                    <div class="icon-box">
                        <i class="flaticon-computer"></i>
                    </div>
                    <h5 class="btm-sep">Software Design</h5>
                    <p>Quae ab illo inventore veritatis et quasi architecto quis ante beatae vitae dicta sunt
                        explicabo ligaui.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-30">
                <div class="service-box">
                    <div class="icon-box">
                        <i class="flaticon-seo"></i>
                    </div>
                    <h5 class="btm-sep">Seo Optimize</h5>
                    <p>Quae ab illo inventore veritatis et quasi architecto quis ante beatae vitae dicta sunt
                        explicabo ligaui.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-30">
                <div class="service-box">
                    <div class="icon-box">
                        <i class="flaticon-management"></i>
                    </div>
                    <h5 class="btm-sep">Digital Marketing</h5>
                    <p>Quae ab illo inventore veritatis et quasi architecto quis ante beatae vitae dicta sunt
                        explicabo ligaui.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-30">
                <div class="service-box">
                    <div class="icon-box">
                        <i class="flaticon-deal"></i>
                    </div>
                    <h5 class="btm-sep">Investment Plan</h5>
                    <p>Quae ab illo inventore veritatis et quasi architecto quis ante beatae vitae dicta sunt
                        explicabo ligaui.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Section Services -->

<!-- START Section Projects -->
<section class="project-section bg-w sp-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title title-left text-center text-lg-left">
                    <h3 class="top-sep">Latest projects</h3>
                    <p>Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. Aenean socada commodo
                        ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p>
                </div>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <div class="col-12">
                <ul class="sorting mb-60">
                    <li class="filter-btn active" data-id="*">
                        <span>All</span>
                    </li>
                    <li class="filter-btn" data-filter=".webdesign">
                        <span>Web design</span>
                    </li>
                    <li class="filter-btn" data-filter=".graphicdesign">
                        <span>Graphic Design</span>
                    </li>
                    <li class="filter-btn" data-filter=".seo">
                        <span>SEO optimize </span>
                    </li>
                    <li class="filter-btn" data-filter=".digitalmarketing">
                        <span>Digital Marketing</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row masonary-wrap">
            <div class="col-lg-4 col-md-6 col-12 port-item mb-30 webdesign digitalmarketing">
                <div class="project">
                    <div class="proj-img">
                        <img src="<?= base_url('_assets/_main'); ?>/img/project/portfolio-1.jpg" alt="project">
                        <div class="proj-overlay">
                            <h5>Market research</h5>
                            <a href="<?= base_url('_assets/_main'); ?>/img/project/portfolio-1.jpg" class="pop-btn">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 port-item mb-30 seo graphicdesign">
                <div class="project">
                    <div class="proj-img">
                        <img src="<?= base_url('_assets/_main'); ?>/img/project/portfolio-2.jpg" alt="project">
                        <div class="proj-overlay">
                            <h5>Market research</h5>
                            <a href="<?= base_url('_assets/_main'); ?>/img/project/portfolio-2.jpg" class="pop-btn">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 port-item mb-30 webdesign graphicdesign">
                <div class="project">
                    <div class="proj-img">
                        <img src="<?= base_url('_assets/_main'); ?>/img/project/portfolio-3.jpg" alt="project">
                        <div class="proj-overlay">
                            <h5>Market research</h5>
                            <a href="<?= base_url('_assets/_main'); ?>/img/project/portfolio-3.jpg" class="pop-btn">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 port-item mb-30 seo digitalmarketing">
                <div class="project">
                    <div class="proj-img">
                        <img src="<?= base_url('_assets/_main'); ?>/img/project/portfolio-4.jpg" alt="project">
                        <div class="proj-overlay">
                            <h5>Digital marketing</h5>
                            <a href="<?= base_url('_assets/_main'); ?>/img/project/portfolio-4.jpg" class="pop-btn">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 port-item mb-30 webdesign digitalmarketing">
                <div class="project">
                    <div class="proj-img">
                        <img src="<?= base_url('_assets/_main'); ?>/img/project/portfolio-5.jpg" alt="project">
                        <div class="proj-overlay">
                            <h5>Web design</h5>
                            <a href="<?= base_url('_assets/_main'); ?>/img/project/portfolio-5.jpg" class="pop-btn">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 port-item mb-30 seo graphicdesign">
                <div class="project">
                    <div class="proj-img">
                        <img src="<?= base_url('_assets/_main'); ?>/img/project/portfolio-6.jpg" alt="project">
                        <div class="proj-overlay">
                            <h5>SEO optimize</h5>
                            <a href="<?= base_url('_assets/_main'); ?>/img/project/portfolio-6.jpg" class="pop-btn">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Section Projects -->

<!-- START Section Counter -->
<section class="sp-100-70 bg-gradi counters-section" id="counters">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="top-c-sep  c-white">Some of Company Real Facts</h3>
                    <p class="c-white">Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. Aenean
                        socada commodo
                        ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="counter-box d-flex d-lg-block">
                    <div class="icon-box mb-3">
                        <i class="zmdi zmdi-file-text zmdi-hc-fw"></i>
                    </div>
                    <div class="ml-5 ml-lg-0 pt-1 pt-lg-0">
                        <h3 class="mb-2 count" data-count="2535">0</h3>
                        <p class="c-black text-capitalize"> Projects done</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="counter-box d-flex d-lg-block">
                    <div class="icon-box mb-3">
                        <i class="zmdi zmdi-download zmdi-hc-fw"></i>
                    </div>
                    <div class="ml-5 ml-lg-0 pt-1 pt-lg-0">
                        <h3 class="mb-2 count" data-count="7505">0</h3>
                        <p class="c-black text-capitalize"> Downloads</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="counter-box d-flex d-lg-block">
                    <div class="icon-box mb-3">
                        <i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i>
                    </div>
                    <div class="ml-5 ml-lg-0 pt-1 pt-lg-0">
                        <h3 class="mb-2 count" data-count="5500">0</h3>
                        <p class="c-black text-capitalize"> Global customers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="counter-box d-flex d-lg-block">
                    <div class="icon-box mb-3">
                        <i class="zmdi zmdi-coffee zmdi-hc-fw"></i>
                    </div>
                    <div class="ml-5 ml-lg-0 pt-1 pt-lg-0">
                        <h3 class="mb-2 count" data-count="1500">0</h3>
                        <p class="c-black text-capitalize"> Cup of coffee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Section Counter -->

<!-- START Section Team -->
<section class="team-section bg-w sp-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title title-left text-center text-lg-left">
                    <h3 class="top-sep">Meet Our Experts</h3>
                    <p>Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. Aenean socada commodo
                        ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 mb-30">
                <div class="team-item">
                    <div class="mb-30 position-relative d-flex align-items-center">
                            <span class="socials d-inline-block">
                                <a href="#" class="zmdi zmdi-facebook"></a>
                                <a href="#" class="zmdi zmdi-twitter"></a>
                                <a href="#" class="zmdi zmdi-google"></a>
                                <a href="#" class="zmdi zmdi-instagram"></a>
                            </span>
                        <span class="img-holder d-inline-block">
                                <img src="<?= base_url('_assets/_main'); ?>/img/team/team_1.jpg" alt="Team">
                            </span>
                    </div>
                    <div class="team-content">
                        <h5 class="mb-2">Ray Jhonson</h5>
                        <p class="text-uppercase mb-0">Senior Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-30">
                <div class="team-item">
                    <div class="mb-30 position-relative d-flex align-items-center">
                            <span class="socials d-inline-block">
                                <a href="#" class="zmdi zmdi-facebook"></a>
                                <a href="#" class="zmdi zmdi-twitter"></a>
                                <a href="#" class="zmdi zmdi-google"></a>
                                <a href="#" class="zmdi zmdi-instagram"></a>
                            </span>
                        <span class="img-holder d-inline-block">
                                <img src="<?= base_url('_assets/_main'); ?>/img/team/team_2.jpg" alt="Team">
                            </span>
                    </div>
                    <div class="team-content">
                        <h5 class="mb-2">Serena Whatson</h5>
                        <p class="text-uppercase mb-0">UI/UX Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-30">
                <div class="team-item">
                    <div class="mb-30 position-relative d-flex align-items-center">
                            <span class="socials d-inline-block">
                                <a href="#" class="zmdi zmdi-facebook"></a>
                                <a href="#" class="zmdi zmdi-twitter"></a>
                                <a href="#" class="zmdi zmdi-google"></a>
                                <a href="#" class="zmdi zmdi-instagram"></a>
                            </span>
                        <span class="img-holder d-inline-block">
                                <img src="<?= base_url('_assets/_main'); ?>/img/team/team_3.jpg" alt="Team">
                            </span>
                    </div>
                    <div class="team-content">
                        <h5 class="mb-2">Dave Serene</h5>
                        <p class="text-uppercase mb-0">CEO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Section Team -->

<!-- START Section Testimonials -->
<section class="sp-100 overlay-bg bg-light testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="top-c-sep">Success stories</h3>
                    <p>Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit. Aenean socada commodo
                        ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p>
                </div>
            </div>
        </div>
        <div id="testimonial-slider" class="testimonial-slider mb-0 text-center">
            <div class="testimonial-item">
                <div class="img-holder mx-auto mx-md-0">
                    <img src="<?= base_url('_assets/_main'); ?>/img/testimonial/testi1.png" alt="Client">
                </div>
                <div class="testimonial-content text-center text-md-left">
                    <h5 class="btm-sep btm-sep-center pb-3 mb-3">Angela Whatson</h5>
                    <p class="rating text-warning">
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star-half"></i>
                    </p>
                    <p class="mb-0">Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit.
                        Aenean amet socada commodo sit ame orci eget ero ligaui egets dolor.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="img-holder mx-auto mx-md-0">
                    <img src="<?= base_url('_assets/_main'); ?>/img/testimonial/testi2.png" alt="Client">
                </div>
                <div class="testimonial-content text-center text-md-left">
                    <h5 class="btm-sep btm-sep-center pb-3 mb-3">Jenna Aerys</h5>
                    <p class="rating text-warning">
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                    </p>
                    <p class="mb-0">Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit.
                        Aenean amet socada commodo sit ame orci eget ero ligaui egets dolor.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="img-holder mx-auto mx-md-0">
                    <img src="<?= base_url('_assets/_main'); ?>/img/testimonial/testi3.png" alt="Client">
                </div>
                <div class="testimonial-content text-center text-md-left">
                    <h5 class="btm-sep btm-sep-center pb-3 mb-3">Jhon Dure</h5>
                    <p class="rating text-warning">
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star-border"></i>
                    </p>
                    <p class="mb-0">Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit.
                        Aenean amet socada commodo sit ame orci eget ero ligaui egets dolor.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="img-holder mx-auto mx-md-0">
                    <img src="<?= base_url('_assets/_main'); ?>/img/testimonial/testi4.png" alt="Client">
                </div>
                <div class="testimonial-content text-center text-md-left">
                    <h5 class="btm-sep btm-sep-center pb-3 mb-3">Enna Whatson</h5>
                    <p class="rating text-warning">
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star-half"></i>
                    </p>
                    <p class="mb-0">Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit.
                        Aenean amet socada commodo sit ame orci eget ero ligaui egets dolor.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Section Testimonials -->

<!-- START Section Blog -->
<section class="blog-section sp-100-70 bg-w overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title title-left text-center text-lg-left">
                    <h3 class="top-sep">Latest posts</h3>
                    <p>Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. Aenean socada commodo
                        ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="blog-item">
                    <div class="img-holder">
                        <img src="<?= base_url('_assets/_main'); ?>/img/blog/blog-5.jpg" alt="vector">
                        <span class="date">20<br>may</span>
                    </div>
                    <div class="blog-content">
                        <h5><a href="blog-detail.html">Increase your web traffic with Bootbox.</a></h5>
                        <p class="mb-2">Lorem ipsum dolor sit amet, cons rcquisc adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="blog-item">
                    <div class="img-holder">
                        <img src="<?= base_url('_assets/_main'); ?>/img/blog/blog-1.jpg" alt="vector">
                        <span class="date">24<br>may</span>
                    </div>
                    <div class="blog-content">
                        <h5><a href="blog-detail.html">Excepteur sint ocae ecat alit if cupidatat.</a></h5>
                        <p class="mb-2">Lorem ipsum dolor sit amet, cons rcquisc adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="blog-item">
                    <div class="img-holder">
                        <img src="<?= base_url('_assets/_main'); ?>/img/blog/blog-6.jpg" alt="vector">
                        <span class="date">10<br>may</span>
                    </div>
                    <div class="blog-content">
                        <h5><a href="blog-detail.html">Increase your web presence.</a></h5>
                        <p class="mb-2">Lorem ipsum dolor sit amet, cons rcquisc adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Section Blog -->

<!-- START Section CTA -->
<section class="cta-section position-relative">
    <div class="container">
        <div class="cta-box bg-white wow fadeInUp" data-wow-delay="0.2s">
            <h3>Start growing with Bootbox today!</h3>
            <p class="mb-30 mx-auto">Lorem ipsum dolor sit amet, consecta detudzdae rcquisc adipiscing elit. Aenean
                socada commodo sit ame orci eget ero ligaui egets dolor. Nullam quis ante tiam sit ame
                orci eget
                erovtiu faucid.
            </p>
            <a href="#" class="btn btn-lg btn-custom">Get free estimate <i
                    class="zmdi zmdi-long-arrow-right ml-2"></i></a>
        </div>
    </div>
</section>
<!-- END Section CTA -->
<!-- END Content -->

<?= $this->endSection() ?>
