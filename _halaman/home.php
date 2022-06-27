<?php
  $setTemplate=false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KKT - KRESNA KARYA TEKNOLOGI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?=assets()?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="<?=assets()?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=assets()?>lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=assets()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=assets()?>css/style.css" rel="stylesheet">
</head>

<body>
    <div id="home"></div>
    <!-- Topbar Start 
    <div id="home" class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Graha Pena Building 14th floor R.1401, Surabaya, Indonesia, 60234</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+628111986758</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>customer@kkteknologi.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
     Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="<?=url('home')?>" class="navbar-brand p-0">
            <link href="<?=assets()?>img/logo.ico" rel="icon">
                <h1 class="m-0">KRESNA</h1>
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

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?=assets()?>img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-3 animated slideInDown">PT. KRESNA KARYA TEKNOLOGI</h4>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Technology Integrator</h1>
                            <a href="#about" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Know Us Better</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?=assets()?>img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-3 animated slideInDown">PT. KRESNA KARYA TEKNOLOGI</h4>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Technology Integrator</h1>
                            <a href="#about" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Know Us Better</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?=assets()?>img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-3 animated slideInDown">PT. KRESNA KARYA TEKNOLOGI</h4>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Technology Integrator</h1>
                            <a href="#about" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Know Us Better</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?=assets()?>img/carousel-4.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-3 animated slideInDown">PT. KRESNA KARYA TEKNOLOGI</h4>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Technology Integrator</h1>
                            <a href="#about" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Know Us Better</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h4 class="fw-bold text-primary text-uppercase">About Us</h4>
                    </div>
                    <div class="row">
                        <div class="col wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3 text-primary">VISION</h5>
                            <p>To be global & trusted technology Integrator</p>
                            <h5 class="mb-3 text-primary">MISSION</h5>
                            <p>Integrating KNOWLEDGE and innovative technology RESPONSIBLY for EFFICIENT world creation</p>
                            <h5 class="mb-3 text-primary">VALUE</h5>
                            <p>SPEED work to build strong NETWORKING through remarkable ACHIEVEMENTS</p>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?=assets()?>img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div id="about" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h4 class="fw-bold text-primary text-uppercase">Why Choose Us</h4>
                <h1 class="mb-0">We Are Technology Integrator</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-lightbulb text-white"></i>
                            </div>
                            <h4>Knowledge</h4>
                            <p class="mb-0">Always learning and improving knowledge to provide the best service</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-person-heart text-white"></i>
                            </div>
                            <h4>Responsibility</h4>
                            <p class="mb-0">Take responsibility for creating a better life for human kind</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-leaf text-white"></i>
                            </div>
                            <h4>Efficient</h4>
                            <p class="mb-0">Participating for greener earth and optimal use of energy for future generations</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="<?=assets()?>img/about-3.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-lightning-fill text-white"></i>
                            </div>
                            <h4>Speed</h4>
                            <p class="mb-0">Time is precious and speed is our concern</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa bi bi-link text-white"></i>
                            </div>
                            <h4>Networking</h4>
                            <p class="mb-0">Wide relationships in order to provide mutual benefits</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Achievements</h4>
                            <p class="mb-0">Remarkable achievement for our satisfaction and others</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- Service Start -->
    <div id="services" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h4 class="fw-bold text-primary text-uppercase">Our Services</h4>
                <h1 class="mb-0">Provide The Suitable Solution for Your Needs</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-industry text-white"></i>
                        </div>
                        <h4 class="mb-3">Industrial Automation Solutions</h4>
                        <p class="m-0">As an experienced company in the industrial Automation
                            we are trying to provide added value that can increase productivity and efficiency
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="<?=url('content1')?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-building text-white"></i>
                        </div>
                        <h4 class="mb-3">Building Automation Solutions</h4>
                        <p class="m-0">Our experience as a technology intergrator is not only applied in industry
                            but can also applied in builing to provide comfort, safety and efficient use of power
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="<?=url('content2')?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For Quote</h3>
                        <p class="text-white mb-3">If you have any questions about solutions for your automation problems, feel free to contact us</p>
                        <h3 class="text-white mb-0">+62 811 1986 758</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- References Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h4 class="fw-bold text-primary text-uppercase">Project References</h4>
                <h1 class="mb-0">Who has Used Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?=assets()?>img/transmart.jpg" style="width: 100px; height: 100px; object-fit: cover;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Transmart Mall</h4>
                            <small class="text-uppercase">Sidoarjo - 2017</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Chiller sequencing control to provide sufficient cooling capacity for efficient use of electrical energy
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?=assets()?>img/carstensz.jpg" style="width: 100px; height: 100px; object-fit: cover;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Carstensz Residence</h4>
                            <small class="text-uppercase">Tangerang - 2019</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Chiller sequencing control to provide sufficient cooling capacity for efficient use of electrical energy
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="<?=assets()?>img/pullman.jpg" style="width: 100px; height: 100px; object-fit: cover;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Pullman Beach Resort</h4>
                            <small class="text-uppercase">Mandalika - 2021</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Chiller sequencing control and Building management System for efficient use of energy
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?=assets()?>img/psmi.jpg" style="width: 100px; height: 100px; object-fit: cover;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">PG PSMI</h4>
                            <small class="text-uppercase">Lampung - 2022</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Power assist system that helps optimize power loads on sugarcane milling machines
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?=assets()?>img/prajekan.jpg" style="width: 100px; height: 100px; object-fit: cover;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">PG Prajekan</h4>
                            <small class="text-uppercase">Bondowoso - 2022</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        HGF machine automation based on washing sugar to increase productivity 
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?=assets()?>img/pgka.jpg" style="width: 100px; height: 100px; object-fit: cover;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">PG Kebon Agung</h4>
                            <small class="text-uppercase">Malang - 2022</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Power assist system that helps optimize power loads on sugarcane milling machines
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div id="contact" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h4 class="fw-bold text-primary text-uppercase">Contact Us</h4>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-2">Feel free to ask</h4>
                            <h5 class="text-primary mb-0">+628111986758</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-2">Email to get free quote</h4>
                            <h5 class="text-primary mb-0">cs@kresnateknologi.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-2">Visit our office</h4>
                            <h5 class="text-primary mb-0">Graha Pena 14th, SBY</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe src="https://maps.google.com/maps?q=graha%20pena&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" 
                                id="gmap_canvas" frameborder="0" scrolling="no" style="width: 600px; height: 345px;"></iframe>
                                <style>.mapouter{position:relative;text-align:right;height:345px;width:600px;}</style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="<?=img()?>vendor1.png" alt="">
                    <img src="<?=img()?>vendor2.png" alt="">
                    <img src="<?=img()?>vendor3.png" alt="">
                    <img src="<?=img()?>vendor4.png" alt="">
                    <img src="<?=img()?>vendor5.png" alt="">
                    <img src="<?=img()?>vendor6.png" alt="">
                    <img src="<?=img()?>vendor7.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white">KKT</h1>
                        </a>
                        <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd eos duo.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Graha Pena Building 14th floor R.1401, Surabaya, East Java, Indonesia, 60234</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">cs@kresnateknologi.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+62 811 1986 758</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#home"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#about"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#services"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light" href="#contact"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">KRESNA KARYA TEKNOLOGI</a>. All Rights Reserved.
						Designed by <a class="text-white border-bottom">AM</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#home" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top scroll-to-section"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1c7de8299b.js" crossorigin="anonymous"></script>
    <script src="<?=assets()?>lib/wow/wow.min.js"></script>
    <script src="<?=assets()?>lib/easing/easing.min.js"></script>
    <script src="<?=assets()?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?=assets()?>lib/counterup/counterup.min.js"></script>
    <script src="<?=assets()?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=assets()?>js/main.js"></script>
</body>

</html>