    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
                <a href="<?=url('home')?>" class="navbar-brand p-0">
                    <h1 class="m-0">KKT</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#home" class="nav-item nav-link scroll-to-section">Home</a>
                        <a href="#about" class="nav-item nav-link scroll-to-section">About</a>
                        <div class="nav-item dropdown">
                        <a href="#services" class="nav-item nav-link scroll-to-section">Services</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?=url('content1')?>" class="dropdown-item">Industrial Automation</a>
                                <a href="<?=url('content2')?>" class="dropdown-item">Building Automation</a>
                            </div>
                        </div>
                        <a href="#contact" class="nav-item nav-link scroll-to-section">Contact</a>
                    </div>
                </div>
            </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn"><?=$judul?></h1>
                    <a href="<?=url('home')?>" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="<?=url($konten_link)?>" class="h5 text-white"><?=$konten?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->