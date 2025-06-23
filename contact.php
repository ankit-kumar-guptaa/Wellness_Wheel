<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact WellnessWheel - Premium at-home diagnostic services in India. Reach out to our team for inquiries, support, or to schedule your diagnostic tests.">
    <meta name="keywords" content="contact wellness wheel, diagnostic services contact, home test contact, medical support india">
    <meta name="author" content="WellnessWheel Diagnostics">
    <title>Contact Us | WellnessWheel | At-Home Diagnostic Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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
        
        
        /* Contact Section */
        .contact-section {
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .contact-section::before {
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
        
        .contact-section::after {
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
        
        .contact-info-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: all 0.4s;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        
        .contact-info-card::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 0;
            background: linear-gradient(135deg, rgba(26, 60, 108, 0.03) 0%, rgba(26, 60, 108, 0.06) 100%);
            bottom: 0;
            left: 0;
            transition: all 0.4s;
            z-index: -1;
            border-radius: 20px;
        }
        
        .contact-info-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .contact-info-card:hover::before {
            height: 100%;
        }
        
        .contact-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 10px 20px rgba(26, 60, 108, 0.2);
            transition: all 0.4s;
        }
        
        .contact-info-card:hover .contact-icon {
            transform: rotateY(180deg);
        }
        
        .contact-icon i {
            font-size: 1.8rem;
            color: white;
        }
        
        .contact-info-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--primary);
            text-align: center;
        }
        
        .contact-info-text {
            color: #6c757d;
            text-align: center;
            margin-bottom: 0;
        }
        
        .contact-info-text a {
            color: #6c757d;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .contact-info-text a:hover {
            color: var(--secondary);
        }
        
        /* Contact Form */
        .contact-form-container {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            position: relative;
            z-index: 1;
        }
        
        .contact-form-title {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .contact-form-subtitle {
            color: #6c757d;
            margin-bottom: 30px;
        }
        
        .form-floating {
            margin-bottom: 20px;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 15px 20px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }
        
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(26, 60, 108, 0.1);
            border-color: var(--primary);
        }
        
        .form-floating > label {
            padding: 15px 20px;
        }
        
        .btn-submit {
            background: var(--gradient-secondary);
            color: white;
            border: none;
            padding: 15px 35px;
            font-size: 1.1rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 6px 15px rgba(230, 57, 70, 0.3);
        }
        
        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background: rgba(0, 0, 0, 0.1);
            transition: all 0.4s;
            z-index: -1;
        }
        
        .btn-submit:hover {
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(230, 57, 70, 0.4);
        }
        
        .btn-submit:hover::before {
            width: 100%;
        }
        
        /* Map Section */
        .map-section {
            padding-bottom: 100px;
        }
        
        .map-container {
            height: 450px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* CTA Section */
        .cta-section {
            background: var(--gradient-primary);
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            margin-bottom: 100px;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -100px;
            left: -100px;
        }
        
        .cta-section::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -100px;
            right: -100px;
        }
        
        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 800;
        }
        
        .cta-text {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        /* Footer */
        .footer {
            background: var(--dark);
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
            color: white;
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
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
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
            padding-bottom: 10px;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            border-radius: 10px;
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
            margin-bottom: 15px;
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
            flex-shrink: 0;
        }
        
        .footer-contact-text {
            opacity: 0.8;
        }
        
        .footer-contact-text a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-contact-text a:hover {
            color: var(--secondary);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 50px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
            font-size: 0.9rem;
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
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                margin-top: 15px;
            }
            
            .contact-form-container {
                padding: 30px;
                margin-top: 40px;
            }
        }
        
        @media (max-width: 767px) {
            .breadcrumb-section {
                padding: 0px 0 40px;
            }
            
            .breadcrumb-title {
                font-size: 2.2rem;
            }
            
            .contact-section {
                padding: 60px 0;
            }
            
            .contact-info-card {
                margin-bottom: 30px;
            }
            
            .map-container {
                height: 350px;
                margin-top: 30px;
            }
            
            .cta-section {
                padding: 60px 0;
                margin-bottom: 60px;
            }
            
            .cta-title {
                font-size: 2rem;
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

    <!-- Breadcrumb Section -->
         <!-- Hero Section -->
    <section class="career-hero-section mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h1 class="hero-title mb-4">Contact Us</h1>
                    <!-- <p class="hero-subtitle">Be part of a team that's transforming healthcare delivery in India. Explore exciting career opportunities with WellnessWheel.</p> -->
                </div>
            </div>
        </div>
    </section>
     <!-- Breadcrumb -->
      <!-- Breadcrumb -->
      <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contact Info Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="contact-info-title">Our Location</h4>
                        <p class="contact-info-text">D-1/147 New Kondli<br>Mayur Vihar Phase 3<br>Delhi 110096</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4 class="contact-info-title">Call Us</h4>
                        <p class="contact-info-text">
                            <a href="tel:+918076780562">+91 8076780562</a><br>
                            <span>Mon-Sat: 8:00 AM - 8:00 PM</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4 class="contact-info-title">Email Us</h4>
                        <p class="contact-info-text">
                            <!-- <a href="mailto:support@wellnesswheel.in">support@wellnesswheel.in</a><br> -->
                            <a href="mailto:info@wellnesswheels.in">info@wellnesswheels.in</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Contact WellnessWheel" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-form-container">
                        <h3 class="contact-form-title">Get In Touch</h3>
                        <p class="contact-form-subtitle">Have questions about our services? Fill out the form below and our team will get back to you within 24 hours.</p>
                        
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" placeholder="Your Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="subject">
                                            <option selected disabled>Select Subject</option>
                                            <option value="General Inquiry">General Inquiry</option>
                                            <option value="Test Booking">Test Booking</option>
                                            <option value="Report Query">Report Query</option>
                                            <option value="Feedback">Feedback</option>
                                            <option value="Career">Career</option>
                                        </select>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="message" placeholder="Your Message" style="height: 150px"></textarea>
                                <label for="message">Your Message</label>
                            </div>
                            <div class="mt-4 text-center">
                                <button type="submit" class="btn btn-submit">
                                    <i class="fas fa-paper-plane me-2"></i> Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-container" data-aos="zoom-in">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.9012560834584!2d77.31146937547852!3d28.60300427566615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5384e8b0e0d%3A0x1b9b5652c590f39!2sNew%20Kondli%2C%20Mayur%20Vihar%20Phase%20III%2C%20New%20Delhi%2C%20Delhi%20110096!5e0!3m2!1sen!2sin!4v1689234567890!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="cta-title">Ready to Book Your Diagnostic Test?</h2>
                    <p class="cta-text">Experience premium diagnostic services at your doorstep with our certified healthcare professionals.</p>
                    <a href="index.php#appointment" class="btn btn-custom-outline">
                        <i class="fas fa-calendar-check me-2"></i> Book an Appointment
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

        // Contact Form Submission (Mock)
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            contactForm.reset();
        });
    </script>
</body>
