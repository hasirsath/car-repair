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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Location, City, Country</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <!-- <small class="fa fa-phone-alt text-primary me-2"></small> -->
                    <!-- <small>+012 345 6789</small> -->
                </div>
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


    <!-- -- Navbar Start -->
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">PARTS</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">PARTS</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


 <!-- Parts Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h3 class="text-primary text-uppercase">PARTS</h3>
                <h1 class="mb-5">WE USE THIS PARTS </h1>
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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>LDRP-ITR, Gandhinagar,Gujarat,India</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9316458646</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>blisscarspa@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
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
                    <a class="btn btn-link" href="services.php">Book Service</a>
                   
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