<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - WellnessWheel | Join Our Healthcare Revolution</title>
    <meta name="description" content="Join the WellnessWheel team and be part of India's leading at-home diagnostic service provider. Explore exciting career opportunities in healthcare and diagnostics.">
    <meta name="keywords" content="healthcare jobs, diagnostic careers, medical technician jobs, healthcare careers in India, EEG technician jobs, phlebotomist jobs">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <!-- Inline Styles -->
    <style>
        :root {
            --primary: #1A3C6C;
            --secondary: #E63946;
            --accent: #4ECDC4;
            --light: #F7F9FC;
            --dark: #212529;
            --gradient-primary: linear-gradient(135deg, #1A3C6C 0%, #2A5298 100%);
            --gradient-secondary: linear-gradient(135deg, #E63946 0%, #FF6B6B 100%);
            --gradient-accent: linear-gradient(135deg, #4ECDC4 0%, #2EC4B6 100%);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            overflow-x: hidden;
            background-color: var(--light);
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .preloader-content {
            text-align: center;
        }
        
        .preloader-spinner {
            width: 80px;
            height: 80px;
            border: 5px solid rgba(26, 60, 108, 0.1);
            border-radius: 50%;
            border-top-color: var(--secondary);
            animation: spin 1s ease-in-out infinite;
            margin: 0 auto 20px;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
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
        .career-hero-section {
            position: relative;
            padding: 180px 0 100px;
            background: linear-gradient(rgba(26, 60, 108, 0.85), rgba(26, 60, 108, 0.9)), 
                        url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
        }
        
        .breadcrumb-section {
            background-color: var(--light);
            padding: 15px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .breadcrumb {
            margin-bottom: 0;
        }
        
        .breadcrumb-item a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .breadcrumb-item a:hover {
            color: var(--secondary);
        }
        
        .breadcrumb-item.active {
            color: var(--secondary);
        }
        
        /* Section Styling */
        .section {
            padding: 100px 0;
            position: relative;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 60px;
            color: var(--primary);
            text-align: center;
            font-size: 2.5rem;
        }
        
        .section-title span {
            color: var(--secondary);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--secondary);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .section-subtitle {
            text-align: center;
            max-width: 700px;
            margin: -30px auto 50px;
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        /* Career Culture Section */
        .culture-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: all 0.4s;
        }
        
        .culture-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .culture-card-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
        
        .culture-card-content {
            padding: 30px;
        }
        
        .culture-card-title {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        
        .culture-card-text {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        /* Benefits Section */
        .benefits-section {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }
        
        .benefits-section::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: var(--accent);
            opacity: 0.05;
            border-radius: 50%;
            top: -150px;
            left: -150px;
        }
        
        .benefits-section::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: var(--secondary);
            opacity: 0.05;
            border-radius: 50%;
            bottom: -150px;
            right: -150px;
        }
        
        .benefit-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
            transition: all 0.4s;
        }
        
        .benefit-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .benefit-icon {
            width: 60px;
            height: 60px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: var(--secondary);
            font-size: 1.5rem;
            flex-shrink: 0;
            transition: all 0.4s;
        }
        
        .benefit-item:hover .benefit-icon {
            background: var(--gradient-secondary);
            color: white;
            transform: rotateY(180deg);
        }
        
        .benefit-content {
            flex-grow: 1;
        }
        
        .benefit-title {
            color: var(--primary);
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        
        .benefit-text {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        /* CV Submission Section */
        .cv-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            transition: all 0.4s;
            border-left: 5px solid var(--primary);
            text-align: center;
            padding: 40px;
        }
        
        .cv-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .cv-icon {
            width: 100px;
            height: 100px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: var(--primary);
            font-size: 2.5rem;
            transition: all 0.4s;
        }
        
        .cv-card:hover .cv-icon {
            background: var(--gradient-primary);
            color: white;
            transform: scale(1.1);
        }
        
        .cv-title {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 15px;
        }
        
        .cv-description {
            color: #6c757d;
            margin-bottom: 25px;
            font-size: 1.1rem;
        }
        
        .cv-email {
            display: inline-flex;
            align-items: center;
            background: var(--light);
            padding: 12px 25px;
            border-radius: 50px;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 25px;
            transition: all 0.3s;
        }
        
        .cv-email i {
            margin-right: 10px;
            color: var(--secondary);
        }
        
        .cv-email:hover {
            background: var(--gradient-secondary);
            color: white;
            transform: translateY(-5px);
        }
        
        .cv-email:hover i {
            color: white;
        }
        
        .cv-note {
            color: #6c757d;
            font-size: 0.9rem;
            font-style: italic;
        }
        
        /* Job Listings Section - Keeping some styles for reference */
        .job-requirements-title {
            color: var(--primary);
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        
        .job-requirements-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .job-requirements-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 8px;
            color: #6c757d;
        }
        
        .job-requirements-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent);
        }
        
        /* Application Process Section */
        .process-section {
            background: white;
        }
        
        .process-step {
            text-align: center;
            padding: 30px;
            position: relative;
            z-index: 1;
        }
        
        .process-step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -50px;
            width: 100px;
            height: 2px;
            background: var(--light);
            z-index: -1;
        }
        
        .process-icon {
            width: 80px;
            height: 80px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--primary);
            font-size: 2rem;
            position: relative;
            z-index: 1;
            transition: all 0.4s;
        }
        
        .process-step:hover .process-icon {
            background: var(--gradient-primary);
            color: white;
            transform: scale(1.1);
        }
        
        .process-title {
            color: var(--primary);
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        
        .process-text {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        /* Testimonial Section */
        .testimonial-section {
            background: var(--gradient-primary);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .testimonial-section::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -150px;
            left: -150px;
        }
        
        .testimonial-section::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -150px;
            right: -150px;
        }
        
        .testimonial-section .section-title {
            color: white;
        }
        
        .testimonial-section .section-title::after {
            background: var(--secondary);
        }
        
        .testimonial-section .section-subtitle {
            color: rgba(255, 255, 255, 0.8);
        }
        
        .testimonial-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            height: 100%;
            position: relative;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .testimonial-quote {
            font-size: 3rem;
            color: var(--secondary);
            opacity: 0.5;
            position: absolute;
            top: 20px;
            left: 20px;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .testimonial-author {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .testimonial-author-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid var(--secondary);
        }
        
        .testimonial-author-name {
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .testimonial-author-position {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        /* CTA Section */
        .cta-section {
            background: var(--gradient-secondary);
            color: white;
            text-align: center;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -150px;
            left: -150px;
        }
        
        .cta-section::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -150px;
            right: -150px;
        }
        
        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .cta-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }
        
        /* Application Form Modal */
        .modal-content {
            border-radius: 15px;
            overflow: hidden;
            border: none;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        }
        
        .modal-header {
            background: var(--gradient-primary);
            color: white;
            border-bottom: none;
            padding: 20px 30px;
        }
        
        .modal-title {
            font-weight: 700;
        }
        
        .modal-body {
            padding: 30px;
        }
        
        .modal-footer {
            border-top: none;
            padding: 20px 30px;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--primary);
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }
        
        .form-control:focus {
            box-shadow: none;
            border-color: var(--primary);
        }
        
        .form-text {
            color: #6c757d;
        }
        
        /* Footer */
        .footer {
            background-color: var(--primary);
            color: white;
            padding: 80px 0 30px;
            position: relative;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .footer-logo-img {
            height: 60px;
            margin-right: 15px;
        }
        
        .footer-logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            line-height: 1;
        }
        
        .footer-logo-text span {
            color: var(--secondary);
        }
        
        .footer-about {
            margin-bottom: 25px;
            opacity: 0.8;
            line-height: 1.8;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .social-icons a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background: var(--secondary);
            transform: translateY(-5px);
        }
        
        .footer-heading {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 3px;
            background: var(--secondary);
            bottom: 0;
            left: 0;
            border-radius: 2px;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
        }
        
        .footer-links a:hover {
            color: var(--secondary);
            transform: translateX(5px);
        }
        
        .footer-contact-item {
            display: flex;
            margin-bottom: 20px;
        }
        
        .footer-contact-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--secondary);
            flex-shrink: 0;
        }
        
        .footer-contact-text {
            opacity: 0.8;
        }
        
        .footer-contact-text a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-contact-text a:hover {
            color: var(--secondary);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.7;
        }
        
        .copyright a {
            color: var(--secondary);
            text-decoration: none;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--secondary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s;
            z-index: 99;
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-5px);
        }
        
        /* Responsive Styles */
        @media (max-width: 991px) {
            .process-step:not(:last-child)::after {
                display: none;
            }
            
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                margin-top: 15px;
            }
        
        @media (max-width: 767px) {
            .section {
                padding: 60px 0;
            }
            
            .career-hero-section {
                padding: 150px 0 80px;
            }
            
            .cta-title {
                font-size: 2.2rem;
            }
            
            .footer {
                padding: 60px 0 30px;
            }
        }
        
        @media (max-width: 575px) {
            .career-hero-section {
                padding: 130px 0 60px;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .btn-custom {
                padding: 12px 25px;
                font-size: 1rem;
            }
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Preloader -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-content">
            <div class="preloader-spinner"></div>
            <h3>WellnessWheel</h3>
            <p>Loading amazing healthcare...</p>
        </div>
    </div> -->

    <!-- Navbar -->
    <?php include "include/header.php"?>

    <!-- Hero Section -->
    <section class="career-hero-section mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h1 class="hero-title mb-4">Join Our Healthcare Revolution</h1>
                    <p class="hero-subtitle">Be part of a team that's transforming healthcare delivery in India. Explore exciting career opportunities with WellnessWheel.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Careers</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Our Culture Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Our <span>Culture</span></h2>
            <p class="section-subtitle" data-aos="fade-up">At WellnessWheel, we foster a culture of innovation, compassion, and excellence</p>
            
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="culture-card">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" class="culture-card-img" alt="Collaborative Environment">
                        <div class="culture-card-content">
                            <h3 class="culture-card-title">Collaborative Environment</h3>
                            <p class="culture-card-text">We believe in the power of teamwork. Our collaborative environment encourages open communication, idea sharing, and mutual support to achieve our common goals.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="culture-card">
                        <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="culture-card-img" alt="Patient-Centered Approach">
                        <div class="culture-card-content">
                            <h3 class="culture-card-title">Patient-Centered Approach</h3>
                            <p class="culture-card-text">Our patients are at the heart of everything we do. We're committed to providing compassionate care and exceptional service to improve health outcomes.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="culture-card">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="culture-card-img" alt="Innovation & Growth">
                        <div class="culture-card-content">
                            <h3 class="culture-card-title">Innovation & Growth</h3>
                            <p class="culture-card-text">We embrace innovation and continuous learning. Our team members are encouraged to explore new ideas, develop their skills, and grow both personally and professionally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="section benefits-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Why <span>Work</span> With Us</h2>
            <p class="section-subtitle" data-aos="fade-up">Join WellnessWheel and enjoy these amazing benefits</p>
            
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Comprehensive Health Coverage</h3>
                            <p class="benefit-text">We offer extensive health insurance plans for employees and their families, including medical, dental, and vision coverage.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Professional Development</h3>
                            <p class="benefit-text">Access to continuous learning opportunities, specialized training programs, and career advancement pathways.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Work-Life Balance</h3>
                            <p class="benefit-text">Flexible work arrangements, paid time off, and wellness programs to ensure you maintain a healthy balance between work and personal life.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Competitive Compensation</h3>
                            <p class="benefit-text">Attractive salary packages, performance bonuses, and retirement plans to recognize your contributions and secure your future.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Inclusive Workplace</h3>
                            <p class="benefit-text">A diverse and inclusive environment where every team member is valued, respected, and empowered to contribute their unique perspectives.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Recognition Programs</h3>
                            <p class="benefit-text">Employee recognition initiatives, service awards, and appreciation events to celebrate your achievements and milestones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Submit CV Section -->
    <section class="section" id="apply-now">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Submit Your <span>CV</span></h2>
            <p class="section-subtitle" data-aos="fade-up">We're always looking for talented individuals to join our team</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="cv-card">
                        <div class="cv-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 class="cv-title">Join Our Growing Team</h3>
                        <p class="cv-description">At WellnessWheel, we're always on the lookout for talented, passionate individuals who share our commitment to making healthcare accessible and convenient for all. Whether you're a healthcare professional, technician, customer service expert, or have other skills to contribute, we'd love to hear from you.</p>
                        
                        <a href="mailto:info@wellnesswheel.in" class="cv-email">
                            <i class="fas fa-envelope"></i> info@wellnesswheel.in
                        </a>
                        
                        <p class="cv-description">Please include your updated CV/resume in PDF format, a brief cover letter explaining your interest in joining WellnessWheel, the position you're interested in (if any specific role), and your contact information.</p>
                        
                        <div class="mt-4">
                            <a href="mailto:info@wellnesswheel.in" class="btn btn-custom">
                                <i class="fas fa-paper-plane btn-icon"></i> Email Your CV Now
                            </a>
                            <button class="btn btn-custom-outline ms-3" data-bs-toggle="modal" data-bs-target="#applicationModal">
                                <i class="fas fa-file-upload btn-icon"></i> Use Online Form
                            </button>
                        </div>
                        
                        <p class="cv-note mt-4">Our HR team typically responds within 3-5 business days. We look forward to reviewing your application!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process Section -->
    <section class="section process-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Application <span>Process</span></h2>
            <p class="section-subtitle" data-aos="fade-up">Our streamlined recruitment process is designed to identify the best talent</p>
            
            <div class="row justify-content-center">
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step">
                        <div class="process-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 class="process-title">Application</h3>
                        <p class="process-text">Submit your application with your resume and cover letter</p>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step">
                        <div class="process-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="process-title">Screening</h3>
                        <p class="process-text">Initial phone screening to discuss your experience and expectations</p>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step">
                        <div class="process-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="process-title">Interview</h3>
                        <p class="process-text">In-person or virtual interview with the hiring team</p>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-step">
                        <div class="process-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="process-title">Offer</h3>
                        <p class="process-text">Job offer and onboarding process</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <!-- <section class="section testimonial-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Employee <span>Stories</span></h2>
            <p class="section-subtitle" data-aos="fade-up">Hear what our team members have to say about working at WellnessWheel</p>
            
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">"Joining WellnessWheel was the best career decision I've made. The supportive environment, opportunities for growth, and the satisfaction of making a difference in patients' lives make it an incredible place to work."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Priya Sharma" class="testimonial-author-img">
                            <h4 class="testimonial-author-name">Priya Sharma</h4>
                            <p class="testimonial-author-position">Medical Lab Technician</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">"The work-life balance at WellnessWheel is exceptional. The management truly cares about our wellbeing and professional development. I've grown so much in my role here over the past two years."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rahul Verma" class="testimonial-author-img">
                            <h4 class="testimonial-author-name">Rahul Verma</h4>
                            <p class="testimonial-author-position">EEG Technician</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">"What I love most about WellnessWheel is the collaborative culture. Everyone is passionate about our mission to make healthcare accessible. The learning opportunities and supportive colleagues make every day rewarding."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Neha Patel" class="testimonial-author-img">
                            <h4 class="testimonial-author-name">Neha Patel</h4>
                            <p class="testimonial-author-position">Customer Service Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="cta-title">Ready to Join Our Team?</h2>
                    <p class="cta-subtitle">Take the first step towards a rewarding career at WellnessWheel. Send us your CV today and become part of our growing family.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="#apply-now" class="btn btn-custom-outline">
                            <i class="fas fa-paper-plane btn-icon"></i> Submit Your CV
                        </a>
                        <a href="mailto:info@wellnesswheel.in" class="btn btn-custom-outline">
                            <i class="fas fa-envelope btn-icon"></i> Email Us Directly
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form Modal -->
    <div class="modal fade" id="applicationModal" tabindex="-1" aria-labelledby="applicationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applicationModalLabel">Submit Your CV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="applicationForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name*</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name*</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address*</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number*</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="experience" class="form-label">Years of Experience*</label>
                                <select class="form-select" id="experience" name="experience" required>
                                    <option value="" selected disabled>Select experience</option>
                                    <option value="0-1">0-1 years</option>
                                    <option value="1-3">1-3 years</option>
                                    <option value="3-5">3-5 years</option>
                                    <option value="5+">5+ years</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="position" class="form-label">Interested Position</label>
                                <input type="text" class="form-control" id="position" name="position" placeholder="Position you're interested in (optional)">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="education" class="form-label">Highest Education*</label>
                            <input type="text" class="form-control" id="education" name="education" placeholder="Degree, Institution, Year" required>
                        </div>
                        <div class="mb-3">
                            <label for="resume" class="form-label">Upload CV/Resume*</label>
                            <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                            <div class="form-text">Accepted formats: PDF, DOC, DOCX (Max 2MB)</div>
                        </div>
                        <div class="mb-3">
                            <label for="coverLetter" class="form-label">Cover Letter</label>
                            <textarea class="form-control" id="coverLetter" name="coverLetter" rows="4" placeholder="Tell us about yourself and why you're interested in joining WellnessWheel"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="termsCheck" required>
                            <label class="form-check-label" for="termsCheck">I agree to the processing of my personal data for recruitment purposes</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-custom" id="submitApplication">Submit Application</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
     <!-- Footer Section -->
     <?php include "include/footer.php"?>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
    <script>
        // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            setTimeout(function() {
                preloader.style.opacity = '0';
                setTimeout(function() {
                    preloader.style.display = 'none';
                }, 500);
            }, 1000);
        });
        
        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Back to Top Button
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });
        
        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                if (this.getAttribute('href') !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
        
        // CV Submission Modal
        const applicationModal = document.getElementById('applicationModal');
        if (applicationModal) {
            // Mock Form Submission
            const submitButton = document.getElementById('submitApplication');
            const applicationForm = document.getElementById('applicationForm');
            
            submitButton.addEventListener('click', function() {
                if (applicationForm.checkValidity()) {
                    // Show loading state
                    submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';
                    submitButton.disabled = true;
                    
                    // Mock API call delay
                    setTimeout(function() {
                        const modal = bootstrap.Modal.getInstance(applicationModal);
                        modal.hide();
                        
                        // Reset form
                        applicationForm.reset();
                        submitButton.innerHTML = 'Submit Application';
                        submitButton.disabled = false;
                        
                        // Show success message
                        alert('Your CV has been submitted successfully! Our HR team will contact you soon.');
                    }, 2000);
                } else {
                    applicationForm.reportValidity();
                }
            });
        }

        // Initialize Bootstrap Modal
        const modal = new bootstrap.Modal(applicationModal);
        
    </script>
</body>
</html>