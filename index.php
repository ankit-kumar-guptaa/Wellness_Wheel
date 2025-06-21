<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WellnessWheel - Premium at-home diagnostic services in India. Book blood tests, EEG, NCV, PFT, Holter & Sleep Study tests with certified professionals at your doorstep.">
    <meta name="keywords" content="home blood test, diagnostic center, EEG at home, NCV test, PFT test, Holter monitor, sleep study at home, medical tests at home, lab tests at home">
    <meta name="author" content="WellnessWheel Diagnostics">
    <title>WellnessWheel | At-Home Diagnostic Services | Book Tests Online</title>
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
        .hero-section {
            position: relative;
            min-height: 100vh;
            background: linear-gradient(rgba(26, 60, 108, 0.8), rgba(26, 60, 108, 0.9)), 
                        url('https://images.unsplash.com/photo-1576091160550-2173fdabe9c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            color: white;
            overflow: hidden;
            padding: 120px 0 80px;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMTI4MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iI2ZmZmZmZiI+PHBhdGggZD0iTTEyODAgMTQwVjBTOTkzLjQ2IDE0MCA2NDAgMTM5IDAgMCAwIDB2MTQweiIvPjwvZz48L3N2Zz4=');
            background-size: 100% 100px;
            bottom: 0;
            height: 100px;
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            background: linear-gradient(to right, #ffffff, #f0f0f0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }
        
        .hero-subtitle {
            font-size: 1.4rem;
            margin-bottom: 30px;
            max-width: 600px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            opacity: 0.9;
        }
        
        .hero-image-container {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-image {
            position: relative;
            z-index: 2;
            max-width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            transform: perspective(1000px) rotateY(-5deg);
            transition: all 0.5s ease;
        }
        
        .hero-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }
        
        .hero-blob {
            position: absolute;
            width: 120%;
            height: 120%;
            top: -10%;
            left: -10%;
            background: var(--accent);
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
            z-index: 1;
            opacity: 0.2;
            animation: blob-animation 8s linear infinite alternate;
        }
        
        @keyframes blob-animation {
            0% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; }
            25% { border-radius: 50% 50% 40% 60% / 60% 40% 50% 40%; }
            50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
            75% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
            100% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; }
        }
        
        /* Animated Elements */
        .floating {
            animation: floating 4s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        /* Buttons */
        .btn-custom {
            background: var(--gradient-secondary);
            color: white;
            border: none;
            padding: 14px 32px;
            font-size: 1.1rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 6px 15px rgba(230, 57, 70, 0.3);
        }
        
        .btn-custom::before {
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
        
        .btn-custom:hover {
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(230, 57, 70, 0.4);
        }
        
        .btn-custom:hover::before {
            width: 100%;
        }
        
        .btn-custom-outline {
            border: 2px solid white;
            color: white;
            background: transparent;
            box-shadow: 0 6px 15px rgba(255, 255, 255, 0.2);
        }
        
        .btn-custom-outline:hover {
            background: white;
            color: var(--primary);
            box-shadow: 0 12px 20px rgba(255, 255, 255, 0.3);
        }
        
        .btn-icon {
            margin-right: 8px;
            transition: transform 0.3s;
        }
        
        .btn-custom:hover .btn-icon {
            transform: translateX(-3px);
        }
        
        /* Section Styling */
        .section {
            padding: 120px 0;
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
        
        /* Why Choose Us */
        .why-us-section {
            background-color: white;
            position: relative;
            overflow: hidden;
        }
        
        .why-us-section::before {
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
        
        .why-us-section::after {
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
        
        .why-us-item {
            text-align: center;
            padding: 40px 30px;
            border-radius: 20px;
            transition: all 0.4s;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            height: 100%;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        
        .why-us-item::before {
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
        
        .why-us-item:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .why-us-item:hover::before {
            height: 100%;
        }
        
        .why-us-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 10px 20px rgba(26, 60, 108, 0.2);
            transition: all 0.4s;
        }
        
        .why-us-item:hover .why-us-icon {
            transform: rotateY(180deg);
        }
        
        .why-us-icon i {
            font-size: 2.2rem;
            color: white;
        }
        
        .why-us-item h4 {
            margin-bottom: 15px;
            color: var(--primary);
            font-size: 1.4rem;
        }
        
        .why-us-item p {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        /* Services Section */
        .services-section {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }
        
        .services-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1IiBoZWlnaHQ9IjUiPgo8cmVjdCB3aWR0aD0iNSIgaGVpZ2h0PSI1IiBmaWxsPSIjZmZmIj48L3JlY3Q+CjxyZWN0IHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9IiNmMGYwZjAiPjwvcmVjdD4KPC9zdmc+');
            opacity: 0.6;
        }
        
        .service-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.5s;
            margin-bottom: 30px;
            height: 100%;
            background: white;
            position: relative;
            z-index: 1;
        }
        
        .service-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .service-img-container {
            position: relative;
            overflow: hidden;
            height: 220px;
        }
        
        .service-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 0.8s;
        }
        
        .service-card:hover .service-img {
            transform: scale(1.1);
        }
        
        .service-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--secondary);
            color: white;
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
            z-index: 2;
        }
        
        .service-content {
            padding: 30px;
        }
        
        .service-title {
            color: var(--primary);
            font-size: 1.4rem;
            margin-bottom: 15px;
        }
        
        .service-list {
            margin-bottom: 25px;
            padding-left: 20px;
        }
        
        .service-list li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 5px;
        }
        
        .service-list li::before {
            content: '✓';
            color: var(--accent);
            font-weight: bold;
            margin-right: 8px;
        }
        
        .service-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 20px;
        }
        
        .service-price span {
            font-size: 0.9rem;
            color: #6c757d;
            font-weight: normal;
        }
        
        /* Appointment Section */
        .appointment-section {
            background: var(--gradient-primary);
            color: white;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(26, 60, 108, 0.3);
            position: relative;
        }
        
        .appointment-section::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -100px;
            left: -100px;
        }
        
        .appointment-section::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -100px;
            right: -100px;
        }
        
        .appointment-img {
            height: 100%;
            object-fit: cover;
            clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);
        }
        
        .appointment-form {
            padding: 50px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }
        
        .appointment-form h3 {
            margin-bottom: 30px;
            font-size: 2rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            color: white;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
        }
        
        .form-label {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            margin-bottom: 8px;
        }
        
        /* Testimonials */
        .testimonials-section {
            background-color: white;
            position: relative;
            overflow: hidden;
        }
        
        .testimonial-swiper {
            padding: 30px 10px 60px;
            overflow: visible;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin: 20px 10px;
            position: relative;
            transition: all 0.4s;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-card::before {
            content: '\201C';
            font-family: Georgia, serif;
            font-size: 5rem;
            color: var(--accent);
            opacity: 0.2;
            position: absolute;
            top: 20px;
            left: 20px;
            line-height: 0.8;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
            color: #555;
            line-height: 1.8;
        }
        
        .testimonial-author-box {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 3px solid var(--accent);
        }
        
        .testimonial-author {
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
            font-size: 1.1rem;
        }
        
        .testimonial-location {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .testimonial-rating {
            margin-top: 10px;
        }
        
        .testimonial-rating i {
            color: #FFD700;
            margin-right: 2px;
        }
        
        .swiper-pagination {
            bottom: 0;
        }
        
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: var(--primary);
            opacity: 0.2;
        }
        
        .swiper-pagination-bullet-active {
            opacity: 1;
            background: var(--secondary);
        }
        
        /* Stats Section */
        .stats-section {
            background: linear-gradient(rgba(26, 60, 108, 0.9), rgba(26, 60, 108, 0.9)), 
                        url('https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') fixed center/cover;
            color: white;
            padding: 100px 0;
            position: relative;
        }
        
        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+CjxwYXRoIGQ9Ik0wIDMwaDYwdjMwSDB6IiBmaWxsPSIjMWEzYzZjIiBmaWxsLW9wYWNpdHk9IjAuMiIvPgo8cGF0aCBkPSJNMzAgNjBsMzAtMzBWNjB6IiBmaWxsPSIjMWEzYzZjIiBmaWxsLW9wYWNpdHk9IjAuMiIvPgo8L3N2Zz4=');
            opacity: 0.3;
        }
        
        .stats-section .section-title {
            color: #fff;
            margin-bottom: 50px;
            position: relative;
            z-index: 1;
        }
        
        .stats-section .section-title span {
            color: var(--secondary);
        }
        
        .stat-item {
            text-align: center;
            padding: 40px 20px;
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(5px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            background-color: rgba(255, 255, 255, 0.15);
        }
        
        .stat-icon {
            font-size: 3rem;
            color: var(--secondary);
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            width: 80px;
            height: 80px;
            line-height: 80px;
            border-radius: 50%;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .stat-item:hover .stat-icon {
            background-color: var(--secondary);
            color: #fff;
            transform: rotateY(180deg);
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            background: linear-gradient(to right, #ffffff, #f0f0f0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
            font-family: 'Montserrat', sans-serif;
        }
        
        .stat-title {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .stat-description {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        /* Career Section */
        .career-image-container {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .career-image-container img {
            transition: transform 0.5s ease;
        }
        
        .career-image-container:hover img {
            transform: scale(1.05);
        }
        
        .career-content {
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
        }
        
        .career-benefit-item {
            display: flex;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        
        .career-benefit-icon {
            background: var(--gradient-primary);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-right: 20px;
            flex-shrink: 0;
            box-shadow: 0 8px 15px rgba(26, 60, 108, 0.2);
        }
        
        .career-benefit-content h5 {
            color: var(--primary);
            margin-bottom: 8px;
        }
        
        .career-benefit-content p {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        .job-listing {
            max-height: 400px;
            overflow-y: auto;
        }
        
        .job-item {
            padding: 20px;
            border-bottom: 1px solid #eee;
            margin-bottom: 15px;
        }
        
        .job-item:last-child {
            border-bottom: none;
        }
        
        .job-details {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 10px 0;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .job-details span i {
            margin-right: 5px;
            color: var(--primary);
        }
        
        /* CTA Section */
        .cta-section {
            background: var(--gradient-secondary);
            color: white;
            text-align: center;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before,
        .cta-section::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .cta-section::before {
            top: -150px;
            left: -150px;
        }
        
        .cta-section::after {
            bottom: -150px;
            right: -150px;
        }
        
        .cta-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .cta-title {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .btn-cta {
            background: white;
            color: var(--secondary);
            border: none;
            padding: 15px 35px;
            font-size: 1.1rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.4s;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-cta:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            color: var(--primary);
        }
        
        .btn-cta-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
        }
        
        .btn-cta-outline:hover {
            background: white;
            color: var(--secondary);
        }
        
        /* Footer */
        .footer {
            background-color: var(--primary);
            color: white;
            padding: 100px 0 30px;
            position: relative;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: var(--gradient-secondary);
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .footer-logo-img {
            height: 60px;
            margin-right: 15px;
            filter: brightness(0) invert(1);
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
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.8);
            max-width: 300px;
        }
        
        .footer-heading {
            color: white;
            margin-bottom: 25px;
            font-size: 1.3rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            bottom: 0;
            left: 0;
            border-radius: 2px;
        }
        
        .footer-links {
            list-style: none;
            padding-left: 0;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s;
            display: block;
            position: relative;
            padding-left: 20px;
        }
        
        .footer-links a::before {
            content: '→';
            position: absolute;
            left: 0;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 25px;
        }
        
        .footer-links a:hover::before {
            left: 5px;
            color: var(--secondary);
        }
        
        .footer-contact-item {
            display: flex;
            margin-bottom: 15px;
            align-items: flex-start;
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
            color: var(--secondary);
            transition: all 0.3s;
        }
        
        .footer-contact-item:hover .footer-contact-icon {
            background: var(--secondary);
            color: white;
        }
        
        .footer-contact-text {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.5;
        }
        
        .social-icons {
            margin-top: 30px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.4s;
        }
        
        .social-icons a:hover {
            background: var(--secondary);
            transform: translateY(-5px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            margin-top: 50px;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
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
            background: var(--gradient-secondary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s;
            transform: translateY(20px);
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .back-to-top:hover {
            background: var(--gradient-primary);
            transform: translateY(-5px);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 1199px) {
            .hero-title {
                font-size: 3.5rem;
            }
        }
        
        @media (max-width: 991px) {
            .section {
                padding: 80px 0;
            }
            
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
            
            .appointment-img {
                clip-path: none;
                height: 300px;
            }
        }
        
        @media (max-width: 767px) {
            .section {
                padding: 60px 0;
            }
            
            .hero-section {
                padding: 100px 0 60px;
                text-align: center;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
                margin-left: auto;
                margin-right: auto;
            }
            
            .hero-buttons {
                justify-content: center;
            }
            
            .hero-image-container {
                margin-top: 40px;
            }
            
            .appointment-form {
                padding: 30px 20px;
            }
            
            .cta-title {
                font-size: 2.2rem;
            }
            
            .footer {
                padding: 60px 0 30px;
            }
        }
        
        @media (max-width: 575px) {
            .hero-title {
                font-size: 2.2rem;
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
    <div class="preloader" id="preloader">
        <div class="preloader-content">
            <div class="preloader-spinner"></div>
            <h3>WellnessWheel</h3>
            <p>Loading amazing healthcare...</p>
        </div>
    </div>

    <!-- Navbar -->
    <?php include "include/header.php"?>

    <!-- Hero Section -->
    <section class="hero-section mt-4" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="hero-title">Premium Diagnostics <br>At Your Doorstep</h1>
                        <p class="hero-subtitle">India's most trusted at-home diagnostic service with certified professionals, accurate results, and compassionate care - all at your convenience.</p>
                        <div class="d-flex flex-wrap gap-3 hero-buttons">
                            <a href="#appointment" class="btn btn-custom">
                                <i class="fas fa-flask btn-icon"></i> Book a Test Now
                            </a>
                            <a href="tel:+918076780562" class="btn btn-custom-outline">
                                <i class="fas fa-phone-alt btn-icon"></i> Call: +91-8076780562
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="hero-image-container">
                        <div class="hero-blob"></div>
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="WellnessWheel Diagnostic Services" class="img-fluid hero-image floating">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section why-us-section" id="why-us">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Why <span>WellnessWheel</span> Stands Out</h2>
            <p class="section-subtitle" data-aos="fade-up">We combine medical expertise with convenience to deliver exceptional diagnostic services right at your doorstep</p>
            
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-us-item">
                        <div class="why-us-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Home Comfort</h4>
                        <p>No travel, no waiting rooms. Our certified technicians come to your home at your preferred time slot.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-us-item">
                        <div class="why-us-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>NABL Certified</h4>
                        <p>Partnered with India's top accredited labs ensuring international quality standards in every test.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-us-item">
                        <div class="why-us-icon">
                            <i class="fas fa-rupee-sign"></i>
                        </div>
                        <h4>Affordable Pricing</h4>
                        <p>Premium quality diagnostics at competitive prices with complete transparency.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-us-item">
                        <div class="why-us-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h4>Fast Results</h4>
                        <p>Receive digital reports within 24-48 hours. Critical reports prioritized and shared immediately.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services-section" id="services">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Our <span>Diagnostic</span> Services in Delhi NCR</h2>
            <p class="section-subtitle" data-aos="fade-up">Premium at-home diagnostic services in Delhi, Noida, Greater Noida, and Gurugram with certified healthcare professionals</p>
            
            <div class="row">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-img-container">
                            <img src="https://images.unsplash.com/photo-1530026186672-2cd00ffc50fe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="service-img" alt="Wellease Full Body Health Checkup Package Delhi NCR">
                            <div class="service-badge">Most Popular</div>
                        </div>
                        <div class="service-content">
                            <h5 class="service-title">Wellease Full Body Package</h5>
                            <p>Comprehensive health assessment with doorstep sample collection:</p>
                            <ul class="service-list">
                                <li>Wellease Basic Package</li>
                                <li>Wellease Advanced Package</li>
                                <li>Complete Blood Count & Metabolic Panels</li>
                                <li>Vitamin & Mineral Profiles</li>
                                <li>Home sample collection included</li>
                            </ul>
                            <div class="service-price">Starting at ₹999 <span>/ package</span></div>
                            <a href="#appointment" class="btn btn-custom w-100">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-img-container">
                            <img src="https://atlantabrainandspine.com/wp-content/uploads/2022/02/iStock-472064219-1024x683.jpg" class="service-img" alt="At-Home Neurological Tests Delhi NCR">
                        </div>
                        <div class="service-content">
                            <h5 class="service-title">Neurological Tests at Home</h5>
                            <p>Advanced neurological diagnostics by certified technicians:</p>
                            <ul class="service-list">
                                <li>EEG (Electroencephalogram)</li>
                                <li>NCV (Nerve Conduction Velocity)</li>
                                <li>BERA (Brainstem Evoked Response Audiometry)</li>
                                <li>VEP (Visual Evoked Potential)</li>
                                <li>RNST (Repetitive Nerve Stimulation Test)</li>
                            </ul>
                            <div class="service-price">Starting at ₹2,999 <span>/ test</span></div>
                            <a href="#appointment" class="btn btn-custom w-100">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-img-container">
                            <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="service-img" alt="Cardiac and Pulmonary Tests at Home Delhi NCR">
                        </div>
                        <div class="service-content">
                            <h5 class="service-title">Cardiac & Pulmonary Tests</h5>
                            <p>Home-based cardiac and respiratory diagnostics:</p>
                            <ul class="service-list">
                                <li>Holter Monitoring (24/48 Hour)</li>
                                <li>PFT (Pulmonary Function Test)</li>
                                <li>Sleep Study (Polysomnography)</li>
                                <li>Home-based services available</li>
                            </ul>
                            <div class="service-price">Starting at ₹2,999 <span>/ test</span></div>
                            <a href="#appointment" class="btn btn-custom w-100">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-img-container">
                            <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="service-img" alt="Allergy Sensitivity Testing Delhi NCR">
                        </div>
                        <div class="service-content">
                            <h5 class="service-title">Allergy Sensitivity Panel</h5>
                            <p>Comprehensive allergy testing with free home collection:</p>
                            <ul class="service-list">
                                <li>Food Allergen Testing</li>
                                <li>Environmental Allergen Testing</li>
                                <li>Inhalant Allergen Testing</li>
                                <li>Tests covering 40-60 allergens</li>
                                <li>Free home collection</li>
                            </ul>
                            <div class="service-price">₹2,999 - ₹4,999 <span>/ panel</span></div>
                            <a href="#appointment" class="btn btn-custom w-100">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-img-container">
                            <img src="https://www.medanta.org/assets/images/medanta-lab-placeholder.png" class="service-img" alt="Fever and Infection Panel Delhi NCR">
                        </div>
                        <div class="service-content">
                            <h5 class="service-title">Fever & Infection Panel</h5>
                            <p>Comprehensive diagnostics for fever and infections:</p>
                            <ul class="service-list">
                                <li>Complete Blood Count (CBC)</li>
                                <li>ESR & CRP (Inflammation Markers)</li>
                                <li>Typhoid, Malaria Testing</li>
                                <li>Dengue Testing (NS1/IgG/IgM)</li>
                                <li>Home sample collection</li>
                            </ul>
                            <div class="service-price">Starting at ₹999 <span>/ panel</span></div>
                            <a href="#appointment" class="btn btn-custom w-100">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-img-container">
                            <img src="https://naturopathosteopathclinic.com/mississauga/wp-content/uploads/sites/22/2024/02/female-hormone-panel-1.webp" class="service-img" alt="Hormonal Health Testing Delhi NCR">
                        </div>
                        <div class="service-content">
                            <h5 class="service-title">Hormonal Health Panels</h5>
                            <p>Specialized hormone testing with expert analysis:</p>
                            <ul class="service-list">
                                <li><strong>Infertility Panel (Couples)</strong>: Male & Female Tests</li>
                                <li>Male: Semen Analysis, Testosterone</li>
                                <li>Female: LH, FSH, AMH, TSH</li>
                                <li><strong>Female Hormonal Panel</strong>: LH, FSH, AMH, Prolactin, TSH, Estradiol</li>
                                <li>Confidential home collection</li>
                            </ul>
                            <div class="service-price">Starting at ₹2,499 <span>/ panel</span></div>
                            <a href="#appointment" class="btn btn-custom w-100">
                                <i class="fas fa-calendar-check btn-icon"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Section -->
    <section class="section" id="appointment">
        <div class="container">
            <div class="appointment-section" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Book Appointment" class="img-fluid appointment-img">
                    </div>
                    <div class="col-lg-6">
                        <div class="appointment-form">
                            <h3 class="text-center">Book Your Test Now</h3>
                            <form id="appointmentForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" placeholder="Enter your number" required>
                                    </div>
                                </div>
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email">
                                
                                <label class="form-label">Select Test Type</label>
                                <select class="form-control" required>
                                    <option value="" disabled selected>Choose a test</option>
                                    <option>Blood Test - Basic Package</option>
                                    <option>Blood Test - Advanced Package</option>
                                    <option>EEG (Electroencephalogram)</option>
                                    <option>NCV (Nerve Conduction Velocity)</option>
                                    <option>PFT (Pulmonary Function Test)</option>
                                    <option>Holter Monitoring</option>
                                    <option>Sleep Study</option>
                                    <option>Other Tests</option>
                                </select>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Preferred Date</label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Preferred Time</label>
                                        <select class="form-control" required>
                                            <option value="" disabled selected>Select time</option>
                                            <option>7:00 AM - 9:00 AM</option>
                                            <option>9:00 AM - 11:00 AM</option>
                                            <option>11:00 AM - 1:00 PM</option>
                                            <option>1:00 PM - 3:00 PM</option>
                                            <option>3:00 PM - 5:00 PM</option>
                                            <option>5:00 PM - 7:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <label class="form-label">Special Instructions (if any)</label>
                                <textarea class="form-control" rows="3" placeholder="Any specific requirements or medical conditions"></textarea>
                                
                                <button type="submit" class="btn btn-custom w-100 mt-4">
                                    <i class="fas fa-check-circle btn-icon"></i> Confirm Appointment
                                </button>
                                <p class="text-center mt-3">We'll confirm your booking within 15 minutes</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials-section" id="testimonials">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Patient <span>Experiences</span></h2>
            <p class="section-subtitle" data-aos="fade-up">Hear what our satisfied customers have to say about our services</p>
            
            <div class="swiper testimonial-swiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <p class="testimonial-text">"At 78, going to labs was stressful. WellnessWheel's home service was a blessing. The technician was patient and professional. Reports came faster than my regular lab!"</p>
                            <div class="testimonial-author-box">
                                <!-- <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Mr. Sharma" class="testimonial-author-img"> -->
                                <div>
                                    <div class="testimonial-author">Mr. R.K. Sharma</div>
                                    <div class="testimonial-location">Delhi, India</div>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <p class="testimonial-text">"The EEG test at home was seamless. The technician explained everything clearly, and the report was delivered the next day. Highly recommend WellnessWheel!"</p>
                            <div class="testimonial-author-box">
                                <!-- <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Mrs. Gupta" class="testimonial-author-img"> -->
                                <div>
                                    <div class="testimonial-author">Mrs. Anjali Gupta</div>
                                    <div class="testimonial-location">Mumbai, India</div>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <p class="testimonial-text">"Booking a sleep study was so easy, and the team was very professional. The results helped my doctor diagnose my condition accurately."</p>
                            <div class="testimonial-author-box">
                                <!-- <img src="https://randomuser.me/api/portraits/men/23.jpg" alt="Mr. Singh" class="testimonial-author-img"> -->
                                <div>
                                    <div class="testimonial-author">Mr. Vikram Singh</div>
                                    <div class="testimonial-location">Bengaluru, India</div>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <h2 class="section-title text-center mb-5" data-aos="fade-up">Our <span>Impact</span></h2>
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="fas fa-users"></i></div>
                        <div class="stat-number count-up">5,000+</div>
                        <div class="stat-title">Happy Patients</div>
                        <div class="stat-description">Satisfied customers who trust our services</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="fas fa-vial"></i></div>
                        <div class="stat-number count-up">10,000+</div>
                        <div class="stat-title">Tests Conducted</div>
                        <div class="stat-description">Accurate diagnostics delivered with care</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="fas fa-city"></i></div>
                        <div class="stat-number count-up">50+</div> <br>
                        <div class="stat-title">Cities Covered</div>
                        <div class="stat-description">Expanding our reach across India</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item">
                        <div class="stat-icon"><i class="fas fa-user-md"></i></div>
                        <div class="stat-number count-up">500+</div>
                        <div class="stat-title">Certified Technicians</div>
                        <div class="stat-description">Skilled professionals at your service</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="cta">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2 class="cta-title">Take Control of Your Health Today</h2>
                <p class="cta-text">Book your at-home diagnostic test with WellnessWheel and experience healthcare like never before. Fast, reliable, and at your doorstep.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="#appointment" class="btn btn-cta">
                        <i class="fas fa-calendar-check btn-icon"></i> Book Now
                    </a>
                    <a href="#services" class="btn btn-cta-outline">
                        <i class="fas fa-stethoscope btn-icon"></i> Explore Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Career Section -->
    <section class="section" id="careers">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Join Our <span>Team</span></h2>
            <p class="section-subtitle" data-aos="fade-up">Be a part of our mission to revolutionize healthcare accessibility</p>
            
            <div class="row mt-5">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="career-image-container">
                        <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Join Our Team" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="career-content">
                        <h3 class="mb-4">Why Work With Us?</h3>
                        <div class="career-benefits">
                            <div class="career-benefit-item">
                                <div class="career-benefit-icon"><i class="fas fa-chart-line"></i></div>
                                <div class="career-benefit-content">
                                    <h5>Growth Opportunities</h5>
                                    <p>Continuous learning and career advancement in a rapidly growing healthcare company</p>
                                </div>
                            </div>
                            <div class="career-benefit-item">
                                <div class="career-benefit-icon"><i class="fas fa-hand-holding-heart"></i></div>
                                <div class="career-benefit-content">
                                    <h5>Meaningful Impact</h5>
                                    <p>Make a real difference in people's lives by improving healthcare accessibility</p>
                                </div>
                            </div>
                            <div class="career-benefit-item">
                                <div class="career-benefit-icon"><i class="fas fa-users"></i></div>
                                <div class="career-benefit-content">
                                    <h5>Collaborative Culture</h5>
                                    <p>Work with a diverse team of passionate professionals in a supportive environment</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#careerModal">
                                <i class="fas fa-briefcase btn-icon"></i> View Open Positions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Career Modal -->
    <div class="modal fade" id="careerModal" tabindex="-1" aria-labelledby="careerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="careerModalLabel">Current Openings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="job-listing">
                        <div class="job-item">
                            <h5>Medical Lab Technician</h5>
                            <div class="job-details">
                                <span><i class="fas fa-map-marker-alt"></i> Delhi NCR</span>
                                <span><i class="fas fa-briefcase"></i> Full-time</span>
                                <span><i class="fas fa-graduation-cap"></i> B.Sc. MLT</span>
                            </div>
                            <p>We're looking for skilled Medical Lab Technicians to join our growing team. The ideal candidate will have experience in blood collection and processing various diagnostic tests.</p>
                            <!-- <button class="btn btn-sm btn-outline-primary">Apply Now</button> -->
                        </div>
                        <div class="job-item">
                            <h5>EEG Technician</h5>
                            <div class="job-details">
                                <span><i class="fas fa-map-marker-alt"></i> Multiple Locations</span>
                                <span><i class="fas fa-briefcase"></i> Full-time</span>
                                <span><i class="fas fa-graduation-cap"></i> Diploma/Certificate in EEG</span>
                            </div>
                            <p>Join our specialized team of EEG technicians to conduct neurological tests at patients' homes. Experience with portable EEG equipment is required.</p>
                            <!-- <button class="btn btn-sm btn-outline-primary">Apply Now</button> -->
                        </div>
                        <div class="job-item">
                            <h5>Customer Service Representative</h5>
                            <div class="job-details">
                                <span><i class="fas fa-map-marker-alt"></i> Delhi</span>
                                <span><i class="fas fa-briefcase"></i> Full-time</span>
                                <span><i class="fas fa-graduation-cap"></i> Any Graduate</span>
                            </div>
                            <p>We're seeking customer-focused individuals to handle appointment scheduling, patient inquiries, and provide exceptional service to our clients.</p>
                            <!-- <button class="btn btn-sm btn-outline-primary">Apply Now</button> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="mailto:careers@wellnesswheel.in" class="btn btn-primary">Email Your Resume</a>
                </div>
            </div>
        </div>
    </div>

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

        // Swiper for Testimonials
        new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
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

        // Appointment Form Submission (Mock)
        const appointmentForm = document.getElementById('appointmentForm');
        appointmentForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Appointment booked successfully! You will receive a confirmation soon.');
            appointmentForm.reset();
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