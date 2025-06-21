<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - WellnessWheel | Premium Diagnostics at Your Doorstep</title>
    <meta name="description" content="Learn about WellnessWheel's journey, mission, vision, and the dedicated team behind India's leading at-home diagnostic service provider.">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <!-- Inline Styles -->
    <style>
        :root {
            --primary-color: #e74c3c;
            --primary-dark: #c0392b;
            --secondary-color: #34495e;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --white-color: #ffffff;
            --gray-color: #95a5a6;
            --light-gray: #f8f9fa;
            --secondary: #E63946;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--secondary-color);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            color: var(--dark-color);
        }
        
        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--white-color);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s, visibility 0.5s;
        }
        
        .preloader-content {
            text-align: center;
        }
        
        .preloader-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid var(--light-color);
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Navbar */
         /* Navbar */
         .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 15px 0;
            transition: all 0.4s ease;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        
        .navbar-brand img {
            height: 90px;
            width: auto;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
            transition: all 0.3s;
        }
        
        .navbar-brand:hover img {
            transform: scale(1.05);
        }
        
        .nav-link {
            color: var(--primary) !important;
            font-weight: 600;
            margin: 0 12px;
            position: relative;
            transition: all 0.3s;
            padding: 8px 0;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: var(--secondary);
            bottom: 0;
            left: 0;
            border-radius: 10px;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--secondary) !important;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .nav-link.active {
            color: var(--secondary) !important;
        }
        
        /* Hero Section */
        .hero-section {
            background-color: #f8f9fa;
            padding: 180px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            font-family: 'Playfair Display', serif;
            color: var(--dark-color);
        }
        
        .hero-title span {
            color: var(--primary-color);
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
            color: var(--secondary-color);
        }
        
        /* About Page Specific Styles */
        .about-hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white-color);
            padding: 180px 0 100px;
            text-align: center;
        }
        
        .about-hero-title {
            color: var(--white-color);
            font-size: 3.5rem;
            margin-bottom: 20px;
        }
        
        .about-hero-subtitle {
            color: var(--light-color);
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .section {
            padding: 100px 0;
        }
        
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-family: 'Playfair Display', serif;
            position: relative;
            display: inline-block;
        }
        
        .section-title span {
            color: var(--primary-color);
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: var(--gray-color);
            margin-bottom: 50px;
            max-width: 700px;
        }
        
        .about-story-img {
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .about-story-img:hover {
            transform: translateY(-10px);
        }
        
        .about-content h3 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: var(--dark-color);
        }
        
        .about-content p {
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        .mission-vision-section {
            background-color: var(--light-gray);
        }
        
        .mission-vision-card {
            background-color: var(--white-color);
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .mission-vision-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .mission-vision-icon {
            width: 70px;
            height: 70px;
            background-color: rgba(231, 76, 60, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
        }
        
        .mission-vision-icon i {
            font-size: 30px;
            color: var(--primary-color);
        }
        
        .mission-vision-card h4 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .mission-vision-card p {
            color: var(--secondary-color);
            line-height: 1.7;
        }
        
        .team-section {
            background-color: var(--white-color);
        }
        
        .team-card {
            background-color: var(--white-color);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .team-img-container {
            position: relative;
            overflow: hidden;
        }
        
        .team-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .team-card:hover .team-img {
            transform: scale(1.05);
        }
        
        .team-content {
            padding: 25px 20px;
            text-align: center;
        }
        
        .team-name {
            font-size: 1.3rem;
            margin-bottom: 5px;
        }
        
        .team-position {
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 15px;
        }
        
        .team-bio {
            color: var(--secondary-color);
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .team-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .team-social a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(231, 76, 60, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            transition: background-color 0.3s, color 0.3s;
        }
        
        .team-social a:hover {
            background-color: var(--primary-color);
            color: var(--white-color);
        }
        
        .values-section {
            background-color: var(--light-gray);
        }
        
        .value-card {
            background-color: var(--white-color);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .value-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(231, 76, 60, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .value-icon i {
            font-size: 25px;
            color: var(--primary-color);
        }
        
        .value-card h4 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .value-card p {
            color: var(--secondary-color);
            line-height: 1.7;
        }
        
        .timeline-section {
            position: relative;
            padding: 100px 0;
        }
        
        .timeline-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .timeline-container::after {
            content: '';
            position: absolute;
            width: 4px;
            background-color: var(--light-gray);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
        }
        
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: var(--white-color);
            border: 4px solid var(--primary-color);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        
        .timeline-left {
            left: 0;
        }
        
        .timeline-right {
            left: 50%;
        }
        
        .timeline-left::after {
            right: -10px;
        }
        
        .timeline-right::after {
            left: -10px;
        }
        
        .timeline-content {
            padding: 20px 30px;
            background-color: var(--white-color);
            position: relative;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        
        .timeline-year {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        
        .timeline-title {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .timeline-text {
            line-height: 1.7;
        }
        
        .cta-section {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 100px 0;
            text-align: center;
            color: var(--white-color);
        }
        
        .cta-title {
            font-size: 2.8rem;
            color: var(--white-color);
            margin-bottom: 20px;
        }
        
        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            color: var(--light-color);
        }
        
        .btn-custom {
            background-color: var(--primary-color);
            color: var(--white-color);
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 500;
            border: 2px solid var(--primary-color);
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .btn-custom:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            color: var(--white-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-custom-outline {
            background-color: transparent;
            color: var(--primary-color);
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 500;
            border: 2px solid var(--primary-color);
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .btn-custom-outline:hover {
            background-color: var(--primary-color);
            color: var(--white-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-cta {
            background-color: var(--primary-color);
            color: var(--white-color);
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 500;
            border: 2px solid var(--primary-color);
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .btn-cta:hover {
            background-color: transparent;
            color: var(--white-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-cta-outline {
            background-color: transparent;
            color: var(--white-color);
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 500;
            border: 2px solid var(--white-color);
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .btn-cta-outline:hover {
            background-color: var(--white-color);
            color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-icon {
            font-size: 1.1rem;
        }
        
        /* Footer */
        .footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 80px 0 30px;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .footer-logo-img {
            height: 50px;
            margin-right: 15px;
        }
        
        .footer-logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--white-color);
        }
        
        .footer-logo-text span {
            color: var(--primary-color);
        }
        
        .footer-about {
            margin-bottom: 25px;
            line-height: 1.7;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .social-icons a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white-color);
            transition: background-color 0.3s, color 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-color);
            color: var(--white-color);
        }
        
        .footer-heading {
            color: var(--white-color);
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            margin-bottom: 15px;
        }
        
        .footer-links a {
            color: var(--light-color);
            text-decoration: none;
            transition: color 0.3s;
            display: inline-flex;
            align-items: center;
        }
        
        .footer-links a::before {
            content: '\f105';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            margin-right: 10px;
            color: var(--primary-color);
        }
        
        .footer-links a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }
        
        .footer-contact-item {
            display: flex;
            margin-bottom: 20px;
        }
        
        .footer-contact-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary-color);
        }
        
        .footer-contact-text {
            flex: 1;
        }
        
        .footer-contact-text a {
            color: var(--light-color);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-contact-text a:hover {
            color: var(--primary-color);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 50px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
        }
        
        .copyright a {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: var(--white-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 99;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: var(--primary-dark);
            color: var(--white-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* Responsive Styles */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                margin-top: 15px;
            }
            
            .timeline-container::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item::after {
                left: 21px;
            }
            
            .timeline-right {
                left: 0;
            }
        }
        
        @media (max-width: 767px) {
            .section {
                padding: 60px 0;
            }
            
            .about-hero-section {
                padding: 100px 0 60px;
                text-align: center;
            }
            
            .about-hero-title {
                font-size: 2.5rem;
            }
            
            .about-hero-subtitle {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .about-content {
                margin-top: 40px;
            }
            
            .cta-title {
                font-size: 2.2rem;
            }
            
            .footer {
                padding: 60px 0 30px;
            }
        }
        
        @media (max-width: 575px) {
            .about-hero-title {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .btn-custom, .btn-custom-outline, .btn-cta, .btn-cta-outline {
                padding: 12px 25px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="preloader-content">
            <div class="preloader-spinner"></div>
            <h3>WellnessWheel</h3>
            <p>Loading amazing healthcare...</p>
        </div>
    </div>

  <!-- Navbar -->
  <?php include "include/header.php"?>

    <!-- About Hero Section -->
    <section class="about-hero-section">
        <div class="container">
            <h1 class="about-hero-title mt-5" data-aos="fade-up">About <span>WellnessWheel</span></h1>
            <p class="about-hero-subtitle" data-aos="fade-up" data-aos-delay="100">Revolutionizing healthcare accessibility with premium at-home diagnostic services across India</p>
            <a href="index.php#appointment" class="btn btn-custom" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-calendar-check btn-icon"></i> Book a Test
            </a>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Our <span>Story</span></h2>
                <p class="section-subtitle mx-auto" data-aos="fade-up" data-aos-delay="100">The journey of WellnessWheel from a small startup to India's leading at-home diagnostic service provider</p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="WellnessWheel Story" class="img-fluid about-story-img">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-content">
                        <h3>From Vision to Reality</h3>
                        <p>WellnessWheel was founded in 2018 by a team of healthcare professionals who recognized a critical gap in India's diagnostic services landscape. Our founders witnessed firsthand how patients, especially the elderly and those with mobility challenges, struggled to access quality diagnostic services.</p>
                        <p>What began as a small operation in Delhi with just 5 technicians and a handful of basic tests has now grown into India's most trusted at-home diagnostic service provider, serving over 50 cities with a comprehensive range of tests and a team of 500+ certified professionals.</p>
                        <p>Our journey has been driven by a simple yet powerful belief: quality healthcare should be accessible to everyone, regardless of their location or mobility constraints. This belief continues to guide our expansion and innovation as we strive to revolutionize healthcare accessibility across India.</p>
                        <div class="d-flex flex-wrap gap-3 mt-4">
                            <a href="index.php#services" class="btn btn-custom">
                                <i class="fas fa-stethoscope btn-icon"></i> Our Services
                            </a>
                            <a href="index.php#why-us" class="btn btn-custom-outline">
                                <i class="fas fa-award btn-icon"></i> Why Choose Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="section mission-vision-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Mission & <span>Vision</span></h2>
                <p class="section-subtitle mx-auto" data-aos="fade-up" data-aos-delay="100">Our guiding principles that drive us to deliver exceptional healthcare services</p>
            </div>
            
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-vision-card">
                        <div class="mission-vision-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4>Our Mission</h4>
                        <p>To revolutionize healthcare accessibility by providing premium diagnostic services at patients' doorsteps, ensuring accurate results, timely delivery, and compassionate care.</p>
                        <p>We are committed to making quality healthcare accessible to everyone, regardless of their location or mobility constraints, through innovative solutions and a patient-first approach.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="mission-vision-card">
                        <div class="mission-vision-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4>Our Vision</h4>
                        <p>To be India's most trusted healthcare partner, recognized for our commitment to excellence, innovation, and patient-centered care in diagnostic services.</p>
                        <p>We envision a future where every Indian has access to world-class diagnostic services without leaving their home, empowering them to take control of their health through preventive care and early detection.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="section values-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Our <span>Values</span></h2>
                <p class="section-subtitle mx-auto" data-aos="fade-up" data-aos-delay="100">The core principles that guide our actions and decisions every day</p>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Patient-Centered Care</h4>
                        <p>We put patients at the center of everything we do, ensuring their comfort, dignity, and well-being throughout their healthcare journey with us.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4>Excellence & Accuracy</h4>
                        <p>We are committed to maintaining the highest standards of quality and accuracy in our diagnostic services, partnering only with NABL-accredited laboratories.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Innovation</h4>
                        <p>We continuously seek innovative solutions to improve healthcare accessibility, convenience, and efficiency for our patients and healthcare partners.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Integrity & Trust</h4>
                        <p>We operate with complete transparency, honesty, and ethical standards, earning the trust of our patients, partners, and communities we serve.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4>Compassion</h4>
                        <p>We approach every patient interaction with empathy, understanding, and genuine care, recognizing that behind every test is a person seeking answers.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Inclusivity</h4>
                        <p>We are committed to making quality healthcare accessible to all segments of society, regardless of age, location, mobility, or socioeconomic status.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Journey Timeline -->
    <section class="section timeline-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Our <span>Journey</span></h2>
                <p class="section-subtitle mx-auto" data-aos="fade-up" data-aos-delay="100">Key milestones in our path to revolutionizing healthcare accessibility in India</p>
            </div>
            
            <div class="timeline-container">
                <div class="timeline-item timeline-left" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2018</div>
                        <h4 class="timeline-title">The Beginning</h4>
                        <p class="timeline-text">WellnessWheel was founded in Delhi with a small team of 5 technicians offering basic blood tests at home.</p>
                    </div>
                </div>
                
                <div class="timeline-item timeline-right" data-aos="fade-left">
                    <div class="timeline-content">
                        <div class="timeline-year">2019</div>
                        <h4 class="timeline-title">Expansion to NCR</h4>
                        <p class="timeline-text">Expanded services to Noida, Gurgaon, and Greater Noida, growing our team to 50 technicians and adding specialized tests.</p>
                    </div>
                </div>
                
                <div class="timeline-item timeline-left" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2020</div>
                        <h4 class="timeline-title">COVID-19 Response</h4>
                        <p class="timeline-text">Rapidly adapted to provide safe, at-home COVID-19 testing, serving over 10,000 patients during the pandemic.</p>
                    </div>
                </div>
                
                <div class="timeline-item timeline-right" data-aos="fade-left">
                    <div class="timeline-content">
                        <div class="timeline-year">2021</div>
                        <h4 class="timeline-title">Advanced Diagnostics</h4>
                        <p class="timeline-text">Introduced specialized neurological, cardiac, and pulmonary diagnostic services at home with portable equipment.</p>
                    </div>
                </div>
                
                <div class="timeline-item timeline-left" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2022</div>
                        <h4 class="timeline-title">National Expansion</h4>
                        <p class="timeline-text">Expanded to 20+ cities across India, partnering with top NABL-accredited laboratories nationwide.</p>
                    </div>
                </div>
                
                <div class="timeline-item timeline-right" data-aos="fade-left">
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <h4 class="timeline-title">Digital Transformation</h4>
                        <p class="timeline-text">Launched our mobile app and digital health records system, enabling seamless booking and access to test results.</p>
                    </div>
                </div>
                
                <div class="timeline-item timeline-left" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2024</div>
                        <h4 class="timeline-title">Present Day</h4>
                        <p class="timeline-text">Now serving 50+ cities with 500+ certified technicians, having conducted over 1 million tests for 50,000+ satisfied patients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team Section -->
    <!-- <section class="section team-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Our <span>Leadership</span> Team</h2>
                <p class="section-subtitle mx-auto" data-aos="fade-up" data-aos-delay="100">Meet the dedicated professionals leading our mission to revolutionize healthcare accessibility</p>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <div class="team-img-container">
                            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="team-img" alt="Dr. Rajesh Sharma">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Dr. Rajesh Sharma</h4>
                            <div class="team-position">Founder & CEO</div>
                            <p class="team-bio">With over 20 years of experience in healthcare management, Dr. Sharma founded WellnessWheel with a vision to make quality diagnostics accessible to all.</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card">
                        <div class="team-img-container">
                            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" class="team-img" alt="Dr. Priya Patel">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Dr. Priya Patel</h4>
                            <div class="team-position">Medical Director</div>
                            <p class="team-bio">A pathologist with 15+ years of experience, Dr. Patel oversees our medical operations, ensuring the highest standards of diagnostic accuracy.</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card">
                        <div class="team-img-container">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" class="team-img" alt="Vikram Mehta">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Vikram Mehta</h4>
                            <div class="team-position">Chief Technology Officer</div>
                            <p class="team-bio">A tech visionary with experience at leading healthtech companies, Vikram leads our digital transformation and technology initiatives.</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2 class="cta-title">Experience Healthcare at Your Doorstep</h2>
                <p class="cta-text">Join thousands of satisfied patients who have chosen WellnessWheel for convenient, accurate, and compassionate diagnostic services.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="index.php#appointment" class="btn btn-cta">
                        <i class="fas fa-calendar-check btn-icon"></i> Book a Test Now
                    </a>
                    <a href="index.php#services" class="btn btn-cta-outline">
                        <i class="fas fa-stethoscope btn-icon"></i> Explore Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
       <!-- Footer Section -->
       <?php include "include/footer.php"?>
       
    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        // Preloader
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
            }, 1000);
        });

        // Navbar Scroll Effect
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // AOS Initialization
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });
        
        // Fix for Back to Top Button Click
        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth Scroll for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>