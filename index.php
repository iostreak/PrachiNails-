<?php
include 'config/config.php';
/*
|--------------------------------------------------------------------------
| Project Name : Prachi Nails
| File Name    : index.php
| Company      : IoStreak Solutions Pvt Ltd
| Website      : https://iostreak.com
| Description  : Index page 
| Author       : IoStreak Solutions Pvt Ltd
| Created On   : 09-11-2025
| Version      : 1.0
|--------------------------------------------------------------------------
*/
if ($conn) {
     echo "<script>console.log('Database Connected Successfully!');</script>";
} else {
    echo "<h3 style='color: red;'> Failed to connect to database! Error code : 400 Connect with Iostreak Solution pvt. ltd</h3>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prachi Nails Studio</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fff6fa;
        }
        h1, h2, h3, .section-title {
            font-family: 'Playfair Display', serif;
        }
        .hero-btn {
            background: #ff1493;
            border-radius: 50px;
            padding: 12px 30px;
            color: white;
            font-weight: 500;
        }
        .service-box img, .portfolio img {
            width: 100%;
            border-radius: 15px;
        }
        .testimonial-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.05);
        }
        footer {
            background: white;
            padding: 40px 0;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Prachi Nails</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Our Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
      <a href="#" class="btn hero-btn">Book Now</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1>Perfect Nails.<br>Perfect You.</h1>
      <p class="mt-3">We help you look confident and beautiful with premium Nail Art and Lash Extensions.</p>
      <button class="hero-btn mt-3">Book Your Appointment</button>
    </div>
    <div class="col-md-6 text-center">
      <img src="assets/hero.jpg" class="img-fluid rounded">
    </div>
  </div>
</div>

<!-- Services -->
<section class="container py-5" id="services">
    <h2 class="text-center section-title">Your Beauty, Our Expertise</h2>
    <p class="text-center text-muted">Choose from our premium services</p>

    <div class="row g-4 mt-4">
        <div class="col-md-4 service-box">
            <img src="assets/nail1.jpg">
            <h5 class="mt-3 text-center">Nail Art & Extensions</h5>
        </div>
        <div class="col-md-4 service-box">
            <img src="assets/pedicure.jpg">
            <h5 class="mt-3 text-center">Luxury Pedicure</h5>
        </div>
        <div class="col-md-4 service-box">
            <img src="assets/lash.jpg">
            <h5 class="mt-3 text-center">Lash Extensions</h5>
        </div>
    </div>
</section>

<!-- Gallery -->
<section class="container py-5" id="portfolio">
    <h2 class="text-center section-title">Our Work Speaks for Itself</h2>
    <div class="row g-3 mt-4 portfolio">
        <div class="col-6 col-md-3"><img src="assets/g1.jpg"></div>
        <div class="col-6 col-md-3"><img src="assets/g2.jpg"></div>
        <div class="col-6 col-md-3"><img src="assets/g3.jpg"></div>
        <div class="col-6 col-md-3"><img src="assets/g4.jpg"></div>
    </div>
</section>

<!-- Testimonials -->
<section class="container py-5">
    <h2 class="text-center section-title">What Our Clients Say</h2>
    <div class="row g-4 mt-4">
        <div class="col-md-4">
            <div class="testimonial-box">“Amazing results! Loved it.” — Sneha</div>
        </div>
        <div class="col-md-4">
            <div class="testimonial-box">“Lashes stayed perfect for weeks!” — Riya</div>
        </div>
        <div class="col-md-4">
            <div class="testimonial-box">“Relaxing and hygienic.” — Neha</div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <p class="fw-bold">Prachi Nails Studio | Nashik & Developed by Iostreak Solution Pvt. Ltd.</p>
    <p id="contact">Phone: +91 99223 34455</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
