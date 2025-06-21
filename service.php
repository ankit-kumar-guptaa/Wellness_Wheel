<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - WellnessWheel | Premium Diagnostics at Your Doorstep</title>
    <meta name="description" content="Explore WellnessWheel's comprehensive range of at-home diagnostic services including blood tests, neurological tests, cardiac monitoring, and specialized health panels.">
    <meta name="keywords" content="home blood test, diagnostic center, EEG at home, NCV test, PFT test, Holter monitor, sleep study at home, medical tests at home, lab tests at home">
    
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
        .service-hero-section {
            position: relative;
            padding: 180px 0 100px;
            background: linear-gradient(rgba(26, 60, 108, 0.85), rgba(26, 60, 108, 0.9)), 
                        url('https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2091&q=80') no-repeat center center/cover;
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
        
        /* Service Detail Styles */
        .service-detail-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 50px;
            transition: all 0.4s;
        }
        
        .service-detail-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .service-detail-img {
            height: 300px;
            width: 100%;
            object-fit: cover;
        }
        
        .service-detail-content {
            padding: 30px;
        }
        
        .service-detail-title {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .service-detail-title::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            bottom: 0;
            left: 0;
            border-radius: 2px;
        }
        
        .service-detail-description {
            margin-bottom: 25px;
            color: #6c757d;
            line-height: 1.8;
        }
        
        .service-features {
            margin-bottom: 25px;
        }
        
        .service-feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .service-feature-icon {
            width: 40px;
            height: 40px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--secondary);
            flex-shrink: 0;
        }
        
        .service-feature-text {
            flex-grow: 1;
        }
        
        .service-feature-text h6 {
            margin-bottom: 5px;
            color: var(--primary);
        }
        
        .service-feature-text p {
            margin-bottom: 0;
            color: #6c757d;
            font-size: 0.95rem;
        }
        
        .service-price-box {
            background: var(--light);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }
        
        .service-price-title {
            font-size: 1.2rem;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .service-price-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.1);
        }
        
        .service-price-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .service-price-name {
            font-weight: 500;
        }
        
        .service-price-value {
            font-weight: 700;
            color: var(--secondary);
        }
        
        /* FAQ Section */
        .faq-section {
            background-color: var(--light);
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .accordion-button {
            padding: 20px 25px;
            font-weight: 600;
            color: var(--primary);
            background-color: white;
        }
        
        .accordion-button:not(.collapsed) {
            color: white;
            background: var(--gradient-primary);
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0, 0, 0, 0.125);
        }
        
        .accordion-body {
            padding: 20px 25px;
            background-color: white;
        }
        
        /* CTA Section */
        .cta-section {
            background: var(--gradient-primary);
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
            .hero-title {
                font-size: 3rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                margin-top: 15px;
            }
        }
        
        @media (max-width: 767px) {
            .section {
                padding: 60px 0;
            }
            
            .service-hero-section {
                padding: 150px 0 80px;
                text-align: center;
            }
            
            .service-detail-img {
                height: 250px;
            }
            
            .cta-title {
                font-size: 2.2rem;
            }
            
            .footer {
                padding: 60px 0 30px;
            }
        }
        
        @media (max-width: 575px) {
            .service-hero-section {
                padding: 130px 0 60px;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .service-detail-title {
                font-size: 1.5rem;
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
    <div class="preloader" id="preloader">
        <div class="preloader-content">
            <div class="preloader-spinner"></div>
            <h3>WellnessWheel</h3>
            <p>Loading amazing healthcare...</p>
        </div>
    </div>

    <!-- Navbar -->
      <!-- Navbar -->
      <?php include "include/header.php"?>

    <!-- Hero Section -->
    <section class="service-hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h1 class="hero-title mb-4">Our Comprehensive Diagnostic Services</h1>
                    <p class="hero-subtitle">Premium at-home diagnostic services with certified healthcare professionals, accurate results, and compassionate care - all at your convenience.</p>
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
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Services Overview Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Our <span>Diagnostic</span> Services</h2>
            <p class="section-subtitle" data-aos="fade-up">We offer a comprehensive range of diagnostic services delivered at your doorstep by certified healthcare professionals</p>
            
            <!-- Blood Test Services -->
            <div class="service-detail-card" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://images.unsplash.com/photo-1530026186672-2cd00ffc50fe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="service-detail-img" alt="Blood Test Services">
                    </div>
                    <div class="col-md-7">
                        <div class="service-detail-content">
                            <h3 class="service-detail-title">Blood Test Services</h3>
                            <p class="service-detail-description">Our comprehensive blood testing services are designed to provide accurate insights into your health status from the comfort of your home. Our certified phlebotomists ensure painless sample collection with the highest standards of hygiene and safety.</p>
                            
                            <div class="service-features">
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>Wellease Basic Package</h6>
                                        <p>Complete Blood Count (CBC), Liver Function Test (LFT), Kidney Function Test (KFT), Lipid Profile, Blood Sugar Tests</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>Wellease Advanced Package</h6>
                                        <p>All Basic Package tests plus Thyroid Profile, Vitamin D, B12, Iron Studies, HbA1c, Electrolytes</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>Wellease Full Body Package</h6>
                                        <p>Our most comprehensive package including all Advanced tests plus Tumor Markers, Hormone Panels, and more specialized tests</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="service-price-box">
                                <h5 class="service-price-title">Pricing</h5>
                                <div class="service-price-item">
                                    <div class="service-price-name">Wellease Basic Package</div>
                                    <div class="service-price-value">₹999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">Wellease Advanced Package</div>
                                    <div class="service-price-value">₹1,999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">Wellease Full Body Package</div>
                                    <div class="service-price-value">₹2,999</div>
                                </div>
                            </div>
                            
                            <a href="#appointment" class="btn btn-custom">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Neurological Tests -->
            <div class="service-detail-card" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-md-5 order-md-2">
                        <img src="https://atlantabrainandspine.com/wp-content/uploads/2022/02/iStock-472064219-1024x683.jpg" class="service-detail-img" alt="Neurological Tests">
                    </div>
                    <div class="col-md-7 order-md-1">
                        <div class="service-detail-content">
                            <h3 class="service-detail-title">Neurological Tests</h3>
                            <p class="service-detail-description">Our specialized neurological diagnostic services are performed by certified technicians at your home. We use state-of-the-art portable equipment to ensure accurate results and maximum comfort.</p>
                            
                            <div class="service-features">
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>EEG (Electroencephalogram)</h6>
                                        <p>Records electrical activity in the brain to diagnose conditions like epilepsy, seizures, brain tumors, and sleep disorders</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>NCV (Nerve Conduction Velocity)</h6>
                                        <p>Measures how quickly electrical signals move through your peripheral nerves to diagnose nerve damage</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>BERA (Brainstem Evoked Response Audiometry)</h6>
                                        <p>Tests hearing function and neural pathways by measuring brain response to sound stimuli</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>VEP (Visual Evoked Potential)</h6>
                                        <p>Measures electrical activity in the brain's visual pathways to detect optic nerve disorders</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="service-price-box">
                                <h5 class="service-price-title">Pricing</h5>
                                <div class="service-price-item">
                                    <div class="service-price-name">EEG (Electroencephalogram)</div>
                                    <div class="service-price-value">₹2,999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">NCV (Nerve Conduction Velocity)</div>
                                    <div class="service-price-value">₹3,499</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">BERA Test</div>
                                    <div class="service-price-value">₹3,999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">VEP Test</div>
                                    <div class="service-price-value">₹2,999</div>
                                </div>
                            </div>
                            
                            <a href="#appointment" class="btn btn-custom">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Cardiac & Pulmonary Tests -->
            <div class="service-detail-card" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="service-detail-img" alt="Cardiac & Pulmonary Tests">
                    </div>
                    <div class="col-md-7">
                        <div class="service-detail-content">
                            <h3 class="service-detail-title">Cardiac & Pulmonary Tests</h3>
                            <p class="service-detail-description">Our cardiac and pulmonary diagnostic services provide comprehensive evaluation of heart and lung function in the comfort of your home. Our technicians are trained to set up monitoring equipment and guide you through the process.</p>
                            
                            <div class="service-features">
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>Holter Monitoring (24/48 Hour)</h6>
                                        <p>Continuous ECG recording for 24-48 hours to detect irregular heart rhythms and evaluate symptoms like palpitations or dizziness</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>PFT (Pulmonary Function Test)</h6>
                                        <p>Evaluates how well your lungs work by measuring lung volume, capacity, rates of flow, and gas exchange</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>Sleep Study (Polysomnography)</h6>
                                        <p>Overnight monitoring of sleep patterns, breathing, oxygen levels, and body movements to diagnose sleep disorders</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="service-price-box">
                                <h5 class="service-price-title">Pricing</h5>
                                <div class="service-price-item">
                                    <div class="service-price-name">Holter Monitoring (24 Hour)</div>
                                    <div class="service-price-value">₹2,999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">Holter Monitoring (48 Hour)</div>
                                    <div class="service-price-value">₹3,999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">PFT (Pulmonary Function Test)</div>
                                    <div class="service-price-value">₹2,999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">Sleep Study (Polysomnography)</div>
                                    <div class="service-price-value">₹7,999</div>
                                </div>
                            </div>
                            
                            <a href="#appointment" class="btn btn-custom">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Specialized Health Panels -->
            <div class="service-detail-card" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-md-5 order-md-2">
                        <img src="https://naturopathosteopathclinic.com/mississauga/wp-content/uploads/sites/22/2024/02/female-hormone-panel-1.webp" class="service-detail-img" alt="Specialized Health Panels">
                    </div>
                    <div class="col-md-7 order-md-1">
                        <div class="service-detail-content">
                            <h3 class="service-detail-title">Specialized Health Panels</h3>
                            <p class="service-detail-description">Our specialized health panels are designed to address specific health concerns with targeted diagnostic tests. These comprehensive panels provide detailed insights for better health management.</p>
                            
                            <div class="service-features">
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>Allergy Sensitivity Panel</h6>
                                        <p>Comprehensive testing for food, environmental, and inhalant allergens to identify sensitivity triggers</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>Fever & Infection Panel</h6>
                                        <p>Diagnostic tests for common infections including CBC, ESR, CRP, and specific tests for typhoid, malaria, and dengue</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>Hormonal Health Panels</h6>
                                        <p>Specialized hormone testing including infertility panels for couples and female hormonal panels</p>
                                    </div>
                                </div>
                                <div class="service-feature-item">
                                    <div class="service-feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="service-feature-text">
                                        <h6>Diabetes Management Panel</h6>
                                        <p>Comprehensive testing for diabetes diagnosis and management including FBS, PPBS, HbA1c, Insulin, and C-peptide</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="service-price-box">
                                <h5 class="service-price-title">Pricing</h5>
                                <div class="service-price-item">
                                    <div class="service-price-name">Allergy Sensitivity Panel (40 allergens)</div>
                                    <div class="service-price-value">₹2,999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">Allergy Sensitivity Panel (60 allergens)</div>
                                    <div class="service-price-value">₹4,999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">Fever & Infection Panel</div>
                                    <div class="service-price-value">₹999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">Infertility Panel (Couples)</div>
                                    <div class="service-price-value">₹3,999</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">Female Hormonal Panel</div>
                                    <div class="service-price-value">₹2,499</div>
                                </div>
                                <div class="service-price-item">
                                    <div class="service-price-name">Diabetes Management Panel</div>
                                    <div class="service-price-value">₹1,499</div>
                                </div>
                            </div>
                            
                            <a href="#appointment" class="btn btn-custom">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Frequently <span>Asked</span> Questions</h2>
            <p class="section-subtitle" data-aos="fade-up">Find answers to common questions about our diagnostic services</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="faqAccordion" data-aos="fade-up">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                    How do I prepare for a blood test at home?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    For most blood tests, you'll need to fast for 8-12 hours before the test (water is allowed). Our technician will confirm specific requirements when scheduling your appointment. Wear loose-fitting clothes with easy access to your arms, and stay hydrated (unless instructed otherwise). Have your doctor's prescription ready if applicable.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    How long does it take to get test results?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Most routine blood test results are available within 24-48 hours. Specialized tests may take 3-5 business days. Neurological tests (EEG, NCV) typically take 2-3 business days for complete reports. We'll send your reports via email, and you can also access them through our patient portal. For critical results, our medical team will contact you immediately.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    Are your technicians certified and experienced?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, all our technicians are certified professionals with relevant qualifications and extensive experience in their respective fields. Our phlebotomists are certified in blood collection techniques, while our EEG and other specialized technicians hold diplomas or degrees in their specialties. All staff undergo rigorous training and regular skill assessments to ensure the highest standards of service.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                    What areas do you serve in Delhi NCR?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We provide services throughout Delhi NCR, including Delhi, Noida, Greater Noida, Ghaziabad, Faridabad, and Gurugram. Our home collection services cover all major localities and residential areas within these regions. If you're unsure about coverage in your specific area, please contact our customer service team.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                    Do you accept insurance for your diagnostic services?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we accept insurance from major health insurance providers. Please check with our customer service team to verify if your specific insurance plan is covered. We'll provide detailed receipts and medical documentation required for insurance claims. For direct billing, please provide your insurance details when booking your appointment.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="cta-title">Ready to Book Your Test?</h2>
                    <p class="cta-subtitle">Schedule your at-home diagnostic service today and take the first step towards better health management.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="#appointment" class="btn btn-custom-outline">
                            <i class="fas fa-calendar-check btn-icon"></i> Book Appointment
                        </a>
                        <a href="tel:+918076780562" class="btn btn-custom-outline">
                            <i class="fas fa-phone-alt btn-icon"></i> Call: +91-8076780562
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="footer-logo">
                        <img src="logo.png" alt="WellnessWheel Logo" class="footer-logo-img">
                        <div class="footer-logo-text">Wellness<span>Wheel</span></div>
                    </div>
                    <p class="footer-about">WellnessWheel is India's leading at-home diagnostic service provider, delivering accurate and timely health testing with utmost convenience.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mb-4">
                    <h5 class="footer-heading">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="#careers">Careers</a></li>
                        <li><a href="#appointment">Book Appointment</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <h5 class="footer-heading">Our Services</h5>
                    <ul class="footer-links">
                        <li><a href="#services">Blood Tests</a></li>
                        <li><a href="#services">Neurological Tests</a></li>
                        <li><a href="#services">Cardiac Tests</a></li>
                        <li><a href="#services">Pulmonary Tests</a></li>
                        <li><a href="#services">Sleep Studies</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <h5 class="footer-heading">Contact Us</h5>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="footer-contact-text">D-1/147 New Kondli Mayur Vihar Phase 3 , Delhi 110096</div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="footer-contact-text"><a href="tel:+918076780562">+91-8076780562</a></div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="footer-contact-text"><a href="mailto:support@wellnesswheel.in">support@wellnesswheel.in</a></div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2025 WellnessWheel Diagnostics. All Rights Reserved. Designed by <a href="#">Team Wellness</a>
            </div>
        </div>
    </footer>

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