<?php  
 include("db.php");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link  href="/car-repair/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white facebook me-1" href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white twitter me-1" href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white linkedin me-1" href="www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white instagram me-0" href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2><img src="img/Logo.png" alt="" height="85px" width="225px" ></h2> 
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <!-- <a href="index.html" class="nav-item nav-link active">Home</a> -->
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <!-- <a href="booking.html" class="dropdown-item">Booking</a> -->
                        <a href="team.php" class="dropdown-item">Technicians</a>
                        <a href="PARTS.php" class="dropdown-item">Parts</a>
                        
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="carousel-inner">
                
                <img class="w-100" src="img/IMG.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown"></h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Repair Service Center</h1>
                                <a href="signup.php" class="btn btn-primary py-3 px-5 animated slideInDown">Register Here</a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
    <!-- Carousel End -->

   


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about1.jpg" style="object-fit: cover;" alt="">
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-primary text-uppercase"> About Us </h3><br>
                    <h1 class="mb-4"><span class="text-primary">CarXcel services</span> Is The Best Place For Your Auto Care</h1>
                   
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    



    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="text-primary text-uppercase"> Our Services </h3>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class=""></i>
                            <h4 class="m-0">Diagnostic Test</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class=""></i>
                            <h4 class="m-0">Engine Servicing</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class=""></i>
                            <h4 class="m-0">Tires Replacement</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class=""></i>
                            <h4 class="m-0">Oil Changing</h4>
                        </button>
                        
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Price :- $200</p>
                                    <a href="booking index.php" class="btn btn-primary py-3 px-5 mt-3">Book this Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Price :- $350</p>
                                    <a href="booking index.php" class="btn btn-primary py-3 px-5 mt-3">Book this Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Price :- $500</p>
                                    <a href="booking index.php" class="btn btn-primary py-3 px-5 mt-3">Book this Service</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <p><i class="fa fa-check text-success me-3"></i> Price :- $650</p>
                                    <a href="booking index.php" class="btn btn-primary py-3 px-5 mt-3">Book this Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                  
        </div>
    </div>
    <!-- Service end -->
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="text-primary text-uppercase"> Our Technicians </h3>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Worker5.jpg" alt="">
                           
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Roy</h5>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Worker2.jpg" alt="">
                           
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Damian</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Worker3.jpg" alt="">
                            
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Andrus</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Worker4.jpg" alt="">
                           
                        </div>           
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Michael</h5>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

 
    <!-- Parts Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h3 class="text-primary text-uppercase">PARTS</h3>
                <h1 class="mb-5">PARTS WE USE </h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/car-oil image.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">TOTAL</h5>
                    <p>Engine Oil</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Engine oil is a crucial component in the smooth operation and longevity of internal combustion engines. It serves multiple functions within the engine, including lubrication, cooling, cleaning, and sealing.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/tyre_car.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">MRF</h5>
                    <p>TYRE</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tires are an essential component of a vehicle, providing the necessary traction, support, and cushioning for smooth and safe transportation.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/alloy.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">ALLOY WHEEL</h5>
                    <p>Wheels</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Alloy wheels are a type of wheel that is made from a combination of metals, typically aluminum or magnesium, and other elements.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/adblue.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Gulf</h5>
                    <p>ADBLUE</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">AdBlue, also known as Diesel Exhaust Fluid (DEF), is a solution used in vehicles with Selective Catalytic Reduction (SCR) systems to reduce harmful nitrogen oxide (NOx) emissions from diesel engines.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Parts End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>LDRP-ITR Gandhinagar,Gujarat,india-382443</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9999999999</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>blisscarspa@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="www.youtube.com"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="signup.php">Sign Up</a>
                    <a class="btn btn-link" href="login.php">Login</a>
                    <a class="btn btn-link" href="index.php">Home</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    
</body>

</html>