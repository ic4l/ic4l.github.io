<!-- START Header -->
<header class="header position-relative">
    <!-- START Navigation -->
    <div class="navigation-bar" id="affix">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light navbar-reset">
                <a class="logo" href="<?= base_url(''); ?>">
                    <img class="logo-default" src="<?= base_url('_assets/_images/_logo'); ?>/micasa-logo2.png" alt="Arafa">
                </a>
                <button class="navbar-toggler border-0 p-0" type="button" data-toggle="collapse"
                        data-target="#theme-navbar" aria-controls="theme-navbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-lines"></span>
                </button>
                <div class="collapse navbar-collapse" id="theme-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url(''); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="price.html">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Events</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="blog-page.html">Blog Page</a>
                                <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                    <div class="my-3 my-lg-0">
                        <a href="<?= base_url('login'); ?>" class="btn btn-custom">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- END Navigation -->
</header>
<!-- END Header -->
