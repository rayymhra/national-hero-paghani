<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pahlawan Indonesia | Mengenal Para Pejuang Bangsa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate CSS for smooth animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-primary-blue: #0D47A1;     /* Biru Tua */
            --color-secondary-blue: #1976D2;   /* Biru Sedang */
            --color-accent-blue: #42A5F5;      /* Biru Muda */
            --color-primary-yellow: #FFC107;   /* Kuning Emas */
            --color-secondary-yellow: #FFD54F; /* Kuning Muda */
            --color-white: #FFFFFF;
            --color-light-bg: #F5F9FF;
            --color-card-bg: #FFFFFF;
            --color-text-dark: #1A237E;
            --color-text-light: #546E7A;
            --color-border: #E3F2FD;
            --color-success: #2E7D32;
            --color-warning: #FF8F00;
            --color-danger: #C62828;
            --shadow-soft: 0 8px 25px rgba(13, 71, 161, 0.08);
            --shadow-medium: 0 15px 35px rgba(13, 71, 161, 0.12);
            --shadow-heavy: 0 20px 50px rgba(13, 71, 161, 0.15);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--color-text-dark);
            line-height: 1.6;
            background-color: var(--color-light-bg);
            background-image: 
                linear-gradient(135deg, rgba(13, 71, 161, 0.03) 0%, transparent 50%),
                linear-gradient(45deg, rgba(255, 193, 7, 0.03) 0%, transparent 50%);
        }
        
        /* Garis merah-putih dekoratif */
        .red-white-line {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: repeating-linear-gradient(90deg, #C62828, #C62828 20px, #FFFFFF 20px, #FFFFFF 40px);
            z-index: 1000;
        }
        
        /* Navbar Styling - Diperbarui */
        .navbar-custom {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            box-shadow: var(--shadow-medium);
            padding: 0.8rem 0;
            transition: all 0.3s ease;
            border-bottom: 3px solid var(--color-primary-yellow);
        }
        
        .navbar-custom.scrolled {
            padding: 0.6rem 0;
        }
        
        .nav-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1rem;
            color: var(--color-white) !important;
            display: flex;
            align-items: center;
            gap: 12px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .nav-brand i {
            color: var(--color-primary-yellow);
            font-size: 2.2rem;
            filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.3));
        }
        
        .nav-link {
            color: var(--color-white) !important;
            font-weight: 500;
            padding: 0.6rem 1.4rem !important;
            border-radius: 30px;
            margin: 0 0.2rem;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--color-primary-yellow) !important;
            background-color: rgba(255, 193, 7, 0.15);
        }
        
        .btn-nav {
            background: linear-gradient(90deg, var(--color-primary-yellow), var(--color-secondary-yellow));
            color: var(--color-text-dark) !important;
            border-radius: 30px;
            padding: 0.5rem 1.5rem;
            margin-left: 10px;
            font-weight: 600;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        
        .btn-nav:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            background: linear-gradient(90deg, var(--color-secondary-yellow), #FFECB3);
        }
        
        /* Hero Section - Diperbarui */
        .hero-section {
            background: linear-gradient(rgba(13, 71, 161, 0.85), rgba(25, 118, 210, 0.9)), 
                        url('https://images.unsplash.com/photo-1551524165-6b6e5a6166f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0 80px;
            min-height: 80vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 193, 7, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        
        .hero-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            color: var(--color-white);
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }
        
        .hero-title span {
            color: var(--color-primary-yellow);
            position: relative;
        }
        
        .hero-title span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--color-primary-yellow);
            opacity: 0.7;
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 600px;
            line-height: 1.7;
        }
        
        .btn-hero {
            background: linear-gradient(90deg, var(--color-primary-yellow), var(--color-secondary-yellow));
            color: var(--color-text-dark);
            padding: 14px 36px;
            font-weight: 600;
            border-radius: 30px;
            border: none;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }
        
        .btn-hero:hover {
            background: linear-gradient(90deg, var(--color-secondary-yellow), #FFECB3);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* Section Styling */
        .section-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--color-primary-blue);
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--color-primary-yellow), var(--color-secondary-yellow));
            border-radius: 2px;
        }
        
        .section-title-center::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        /* Feature Cards */
        .feature-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: var(--shadow-soft);
            background-color: var(--color-card-bg);
            border-top: 4px solid var(--color-primary-blue);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
            border-top: 4px solid var(--color-primary-yellow);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--color-primary-blue);
            margin-bottom: 1rem;
        }
        
        /* Stats Section */
        .stats-section {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            color: white;
            padding: 60px 0;
            border-top: 3px solid var(--color-primary-yellow);
            border-bottom: 3px solid var(--color-primary-yellow);
        }
        
        .stat-number {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: var(--color-primary-yellow);
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* Database Heroes Section - DIKONSISTENKAN */
        .hero-card {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
            border: none;
            box-shadow: var(--shadow-soft);
            background-color: var(--color-card-bg);
            height: 100%;
            border-top: 4px solid var(--color-primary-blue);
        }
        
        .hero-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
            border-top: 4px solid var(--color-primary-yellow);
        }
        
        .hero-card .card-img-top {
            height: 200px;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
        
        .hero-card .no-image {
            height: 200px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--color-light-bg), var(--color-border));
        }
        
        .text-truncate-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.5;
            font-size: 0.9rem;
            color: var(--color-text-light);
        }
        
        /* Database Stats Card */
        .database-stats-card {
            background: linear-gradient(135deg, var(--color-primary-blue), var(--color-secondary-blue));
            color: white;
            border-radius: 15px;
            border: 3px solid var(--color-primary-yellow);
            box-shadow: var(--shadow-heavy);
        }
        
        /* New Sections Styles - Diperbarui */
        
        /* Fun Fact Section */
        .fun-fact-section {
            background: linear-gradient(135deg, var(--color-light-bg), var(--color-border));
            border-radius: 15px;
            padding: 40px;
            margin: 30px 0;
            box-shadow: var(--shadow-soft);
            border: 2px solid var(--color-primary-yellow);
        }
        
        .fun-fact-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            color: var(--color-primary-blue);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .fun-fact-title i {
            color: var(--color-primary-yellow);
        }
        
        .fun-fact-content {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--color-text-dark);
            min-height: 80px;
            display: flex;
            align-items: center;
            line-height: 1.5;
        }
        
        /* Quote Section */
        .quote-section {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            color: white;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
            border-top: 3px solid var(--color-primary-yellow);
            border-bottom: 3px solid var(--color-primary-yellow);
        }
        
        .quote-section::before {
            content: '"';
            position: absolute;
            top: -50px;
            left: 10%;
            font-size: 15rem;
            color: rgba(255, 255, 255, 0.05);
            font-family: Georgia, serif;
        }
        
        .quote-text {
            font-size: 1.8rem;
            font-style: italic;
            margin-bottom: 20px;
            line-height: 1.4;
            position: relative;
            z-index: 1;
        }
        
        .quote-author {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--color-primary-yellow);
        }
        
        /* Values Section */
        .values-card {
            background: var(--color-card-bg);
            border-radius: 15px;
            padding: 30px;
            height: 100%;
            box-shadow: var(--shadow-soft);
            border-left: 5px solid var(--color-primary-yellow);
            transition: all 0.3s ease;
            border-top: 3px solid transparent;
        }
        
        .values-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
            border-top: 3px solid var(--color-primary-blue);
        }
        
        .values-icon {
            font-size: 2.5rem;
            color: var(--color-primary-blue);
            margin-bottom: 20px;
        }
        
        /* Map Section */
        .map-section {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: var(--shadow-soft);
        }
        
        .map-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            filter: brightness(0.9);
        }
        
        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(13, 71, 161, 0.8), rgba(25, 118, 210, 0.9));
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
        }
        
        .map-overlay h3 {
            color: var(--color-primary-yellow);
        }
        
        /* Timeline Section */
        .timeline-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .timeline-container::after {
            content: '';
            position: absolute;
            width: 6px;
            background: linear-gradient(to bottom, var(--color-primary-blue), var(--color-secondary-blue));
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }
        
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
            margin-bottom: 40px;
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
        }
        
        .timeline-content {
            padding: 20px;
            background-color: var(--color-card-bg);
            border-radius: 10px;
            box-shadow: var(--shadow-soft);
            position: relative;
            border-top: 3px solid var(--color-primary-blue);
        }
        
        .timeline-year {
            font-weight: bold;
            color: var(--color-primary-blue);
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        
        .timeline-item:nth-child(odd)::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -13px;
            background-color: white;
            border: 4px solid var(--color-primary-blue);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        
        .timeline-item:nth-child(even)::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            left: -13px;
            background-color: white;
            border: 4px solid var(--color-primary-blue);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        
        /* Modern Heroes Section */
        .modern-heroes-section {
            background-color: var(--color-light-bg);
            border-radius: 15px;
            padding: 40px;
            border: 2px solid var(--color-border);
        }
        
        .modern-hero-card {
            text-align: center;
            padding: 20px;
            transition: all 0.3s ease;
            background: var(--color-card-bg);
            border-radius: 10px;
            height: 100%;
            box-shadow: var(--shadow-soft);
        }
        
        .modern-hero-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }
        
        .modern-hero-icon {
            font-size: 2.5rem;
            color: var(--color-primary-blue);
            margin-bottom: 15px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Features Section */
        .features-section {
            background: linear-gradient(135deg, var(--color-light-bg) 0%, #E3F2FD 100%);
        }
        
        /* Footer - Diperbarui */
        .footer {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            color: white;
            padding: 60px 0 30px;
            border-top: 3px solid var(--color-primary-yellow);
        }
        
        .footer-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--color-primary-yellow);
        }
        
        .footer-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-link:hover {
            color: var(--color-primary-yellow);
            transform: translateX(3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }
        
        /* Button Styling Konsisten */
        .btn-primary {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            color: var(--color-white);
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(90deg, var(--color-secondary-blue), var(--color-accent-blue));
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(25, 118, 210, 0.4);
        }
        
        .btn-warning {
            background: linear-gradient(90deg, var(--color-primary-yellow), var(--color-secondary-yellow));
            color: var(--color-text-dark);
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-warning:hover {
            background: linear-gradient(90deg, var(--color-secondary-yellow), #FFECB3);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 193, 7, 0.4);
        }
        
        /* Pagination */
        .pagination .page-item.active .page-link {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            border-color: var(--color-primary-blue);
            color: white;
        }
        
        .pagination .page-link {
            color: var(--color-primary-blue);
            border-radius: 8px;
            margin: 0 3px;
            border: 1px solid var(--color-border);
        }
        
        .pagination .page-link:hover {
            background-color: rgba(13, 71, 161, 0.1);
            color: var(--color-primary-blue);
            border-color: var(--color-primary-blue);
        }
        
        /* Form controls */
        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid var(--color-border);
            padding: 10px 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--color-primary-blue);
            box-shadow: 0 0 0 0.25rem rgba(13, 71, 161, 0.25);
        }
        
        .input-group-text {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            color: white;
            border: none;
            border-radius: 10px 0 0 10px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .timeline-container::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
            
            .timeline-item:nth-child(odd)::after,
            .timeline-item:nth-child(even)::after {
                left: 21px;
            }
            
            .quote-text {
                font-size: 1.4rem;
            }
            
            .fun-fact-content {
                font-size: 1.1rem;
            }
            
            .section-padding {
                padding: 60px 0;
            }
            
            .fun-fact-section, .modern-heroes-section {
                padding: 25px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .btn-hero, .btn-primary, .btn-warning {
                padding: 10px 20px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Garis merah putih -->
    <div class="red-white-line"></div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand nav-brand" href="/">
                <i class="fas fa-shield-alt"></i> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#database-heroes">Daftar Pahlawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#new-features">Wawasan Kepahlawanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-nav" href="{{ route('pahlawans.index') }}">
                            <i class="fas fa-database me-1"></i> Kelola Data
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="hero-title animate__animated animate__fadeInDown">Mengenal Para <span>Pejuang Kemerdekaan</span> Indonesia</h1>
                    <p class="hero-subtitle animate__animated animate__fadeIn animate__delay-1s">
                        Mereka adalah pahlawan yang mengorbankan jiwa dan raga untuk kemerdekaan bangsa. 
                        Mari kita kenang jasa-jasa mereka dan pelajari sejarah perjuangan Indonesia.
                    </p>
                    <div class="mt-4 animate__animated animate__fadeIn animate__delay-2s">
                        <a href="{{ route('pahlawans.index') }}" class="btn btn-hero me-3">
                            <i class="fas fa-book-open me-2"></i> Jelajahi Database
                        </a>
                        <a href="#new-features" class="btn btn-outline-light" style="padding: 12px 32px; border-radius: 30px;">
                            <i class="fas fa-star me-2"></i> Wawasan Kepahlawanan
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative">
                        <img src="https://geotimes.id/wp-content/uploads/2017/08/w644-2.jpg" alt="Pahlawan Indonesia" 
                             class="w-100 rounded animate__animated animate__fadeInRight"
                             style="border: 3px solid var(--color-primary-yellow); box-shadow: var(--shadow-heavy);">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-warning text-dark fs-6">Sumber: Geotimes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section-padding" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="section-title">Menghormati <span>Warisan Sejarah</span> Bangsa</h2>
                    <p class="lead mb-4" style="color: var(--color-primary-blue); font-weight: 500;">
                        Setiap pahlawan Indonesia memiliki cerita perjuangan yang unik, dari berbagai daerah 
                        dan latar belakang, tetapi dengan satu tujuan: kemerdekaan dan kedaulatan bangsa.
                    </p>
                    <p style="color: var(--color-text-light);">
                        Melalui platform ini, kami berkomitmen untuk melestarikan memori dan jasa para pahlawan 
                        dengan cara yang modern dan mudah diakses. Database yang kami bangun memungkinkan 
                        generasi muda untuk mempelajari sejarah dengan lebih interaktif.
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('pahlawans.index') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-users me-2"></i> Temukan Pahlawan
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="feature-card p-4 text-center h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-landmark"></i>
                                </div>
                                <h4 class="mb-3">Warisan Sejarah</h4>
                                <p class="text-muted">Mendokumentasikan perjalanan panjang para pahlawan dari berbagai periode sejarah Indonesia.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card p-4 text-center h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h4 class="mb-3">Edukasi Digital</h4>
                                <p class="text-muted">Menyajikan informasi sejarah dalam format digital yang mudah diakses oleh semua kalangan.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card p-4 text-center h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-database"></i>
                                </div>
                                <h4 class="mb-3">Database Terpusat</h4>
                                <p class="text-muted">Kumpulan data terstruktur tentang pahlawan nasional dan daerah dari seluruh Indonesia.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card p-4 text-center h-100">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4 class="mb-3">Pelestarian Nilai</h4>
                                <p class="text-muted">Menjaga nilai-nilai kepahlawanan agar tetap relevan bagi generasi masa kini dan mendatang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-number" data-count="187">0</div>
                    <div class="stat-label">Pahlawan Nasional</div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-number" data-count="34">0</div>
                    <div class="stat-label">Provinsi</div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-number" data-count="500">0</div>
                    <div class="stat-label">Data Terkumpul</div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-number" data-count="24">0</div>
                    <div class="stat-label">Jam Operasional</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Database Heroes Section -->
    <section class="section-padding" id="database-heroes">
        <div class="container">
            <h2 class="section-title text-center section-title-center mb-5">Daftar Pahlawan dalam Database</h2>
            
            <!-- Filter and Search Section -->
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" id="heroSearch" class="form-control" placeholder="Cari pahlawan berdasarkan nama atau daerah...">
                        <button class="btn btn-outline-secondary" type="button" id="clearSearch">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 mt-2 mt-md-0">
                    <select class="form-select" id="regionFilter">
                        <option value="">Semua Daerah</option>
                        @php
                            $regions = \App\Models\Pahlawan::select('daerah')->distinct()->orderBy('daerah')->get();
                        @endphp
                        @foreach($regions as $region)
                            <option value="{{ $region->daerah }}">{{ $region->daerah }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <!-- Heroes Grid -->
            <div class="row" id="heroesGrid">
                @php
                    $pahlawans = \App\Models\Pahlawan::orderBy('nama_pahlawan')->paginate(8);
                @endphp
                
                @forelse($pahlawans as $pahlawan)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 hero-item" 
                     data-name="{{ strtolower($pahlawan->nama_pahlawan) }}" 
                     data-region="{{ strtolower($pahlawan->daerah) }}">
                    <div class="card h-100 border-0 hero-card">
                        <div class="card-img-top position-relative">
                            @if($pahlawan->gambar)
                                <img src="{{ asset($pahlawan->gambar) }}" alt="{{ $pahlawan->nama_pahlawan }}" 
                                     class="w-100 card-img-top" style="height: 200px; object-fit: cover;">
                            @else
                                <div class="no-image d-flex align-items-center justify-content-center">
                                    <i class="fas fa-user-circle fa-5x text-secondary"></i>
                                </div>
                            @endif
                            <div class="position-absolute top-0 end-0 m-2">
                                <span class="badge bg-primary">{{ $loop->iteration }}</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-2" style="color: var(--color-primary-blue);">{{ $pahlawan->nama_pahlawan }}</h5>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <span class="text-muted small">{{ $pahlawan->daerah }}</span>
                            </div>
                            <p class="card-text small text-truncate-3">
                                {{ $pahlawan->jasa }}
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('pahlawans.show', $pahlawan) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye me-1"></i> Detail
                                </a>
                                {{-- <a href="{{ route('pahlawans.edit', $pahlawan) }}" class="btn btn-sm btn-outline-warning">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <div class="empty-state" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 15px; border: 2px dashed #dee2e6; padding: 40px;">
                        <i class="fas fa-database fa-4x text-muted mb-3"></i>
                        <h4 class="text-muted">Database Masih Kosong</h4>
                        <p class="text-muted mb-4">Belum ada data pahlawan yang terdaftar.</p>
                        <a href="{{ route('pahlawans.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus-circle me-2"></i> Tambah Pahlawan Pertama
                        </a>
                    </div>
                </div>
                @endforelse
            </div>
            
            <!-- Pagination -->
            @if($pahlawans->hasPages())
            <div class="row mt-4">
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            @if($pahlawans->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">«</span>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $pahlawans->previousPageUrl() }}#database-heroes">«</a>
                            </li>
                            @endif
                            
                            @for($i = 1; $i <= $pahlawans->lastPage(); $i++)
                            <li class="page-item {{ $pahlawans->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $pahlawans->url($i) }}#database-heroes">{{ $i }}</a>
                            </li>
                            @endfor
                            
                            @if($pahlawans->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $pahlawans->nextPageUrl() }}#database-heroes">»</a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <span class="page-link">»</span>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            @endif
            
            <!-- Database Stats -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card border-0 database-stats-card">
                        <div class="card-body">
                            <h5 class="card-title mb-3 text-white">
                                <i class="fas fa-chart-bar me-2"></i>
                                Statistik Database
                            </h5>
                            <div class="row">
                                @php
                                    $totalPahlawans = \App\Models\Pahlawan::count();
                                    $uniqueRegions = \App\Models\Pahlawan::select('daerah')->distinct()->count();
                                    $latestAdded = \App\Models\Pahlawan::latest()->first();
                                @endphp
                                
                                <div class="col-md-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-white bg-opacity-20 p-3 rounded me-3">
                                            <i class="fas fa-users text-white fa-lg"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-white">Total Pahlawan</h6>
                                            <h4 class="mb-0 text-warning">{{ $totalPahlawans }}</h4>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-white bg-opacity-20 p-3 rounded me-3">
                                            <i class="fas fa-map-marked-alt text-white fa-lg"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-white">Daerah Asal</h6>
                                            <h4 class="mb-0 text-warning">{{ $uniqueRegions }}</h4>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-white bg-opacity-20 p-3 rounded me-3">
                                            <i class="fas fa-history text-white fa-lg"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 text-white">Terakhir Ditambahkan</h6>
                                            @if($latestAdded)
                                            <div class="text-truncate text-white" style="max-width: 150px;">
                                                {{ $latestAdded->nama_pahlawan }}
                                            </div>
                                            @else
                                            <div class="text-white">-</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Features Section -->
    <section class="section-padding" id="new-features">
        <div class="container">
            <h2 class="section-title text-center section-title-center mb-5">Wawasan Kepahlawanan</h2>
            
            <!-- Tahukah Kamu? (Fun Facts) -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="fun-fact-section animate__animated animate__fadeIn">
                        <h3 class="fun-fact-title">
                            <i class="fas fa-lightbulb"></i> Tahukah Kamu?
                        </h3>
                        <div class="fun-fact-content" id="funFactDisplay">
                            <!-- Fun facts will be displayed here by JavaScript -->
                        </div>
                        <div class="text-end mt-3">
                            <button id="nextFactBtn" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-sync-alt me-1"></i> Fakta Lainnya
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Nilai Kepahlawanan -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="section-title mb-4">Nilai Kepahlawanan</h3>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="values-card animate__animated animate__fadeInUp">
                        <div class="values-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4 style="color: var(--color-primary-blue);">Gotong Royong</h4>
                        <p class="text-muted">Nilai kebersamaan dan saling membantu yang dicontohkan para pahlawan masih relevan dalam membangun komunitas yang solid di era modern.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="values-card animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="values-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 style="color: var(--color-primary-blue);">Integritas</h4>
                        <p class="text-muted">Kejujuran dan konsistensi dalam memegang prinsip merupakan warisan berharga dari para pahlawan untuk menghadapi tantangan zaman now.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="values-card animate__animated animate__fadeInUp animate__delay-2s">
                        <div class="values-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4 style="color: var(--color-primary-blue);">Kecerdasan Strategis</h4>
                        <p class="text-muted">Kemampuan berpikir kritis dan membuat strategi yang ditunjukkan para pahlawan sangat dibutuhkan dalam memecahkan masalah kompleks masa kini.</p>
                    </div>
                </div>
            </div>
            
            <!-- Kutipan Pahlawan -->
            <div class="quote-section mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto text-center">
                            <p class="quote-text animate__animated animate__fadeIn">
                                "Beri aku 1.000 orang tua, niscaya akan kucabut Semeru dari akarnya. Beri aku 10 pemuda, niscaya akan kuguncangkan dunia."
                            </p>
                            <p class="quote-author animate__animated animate__fadeIn animate__delay-1s">— Ir. Soekarno, Proklamator Kemerdekaan Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pahlawan Hari Ini -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="section-title mb-4">Pahlawan Hari Ini</h3>
                    <div class="modern-heroes-section animate__animated animate__fadeIn">
                        <p class="lead text-center mb-4" style="color: var(--color-primary-blue);">
                            <strong>Konsep:</strong> Guru, tenaga medis, relawan, dan masyarakat yang berkontribusi 
                            bagi bangsa adalah pahlawan di era modern.
                        </p>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="modern-hero-card">
                                    <div class="modern-hero-icon">
                                        <i class="fas fa-user-md"></i>
                                    </div>
                                    <h5 style="color: var(--color-primary-blue);">Tenaga Medis</h5>
                                    <p class="text-muted">Para dokter, perawat, dan tenaga kesehatan yang berjuang di garis depan.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="modern-hero-card">
                                    <div class="modern-hero-icon">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <h5 style="color: var(--color-primary-blue);">Guru</h5>
                                    <p class="text-muted">Pendidik yang membentuk generasi penerus bangsa dengan dedikasi tinggi.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="modern-hero-card">
                                    <div class="modern-hero-icon">
                                        <i class="fas fa-hands-helping"></i>
                                    </div>
                                    <h5 style="color: var(--color-primary-blue);">Relawan</h5>
                                    <p class="text-muted">Individu yang mengabdi tanpa pamrih untuk membantu sesama masyarakat.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="modern-hero-card">
                                    <div class="modern-hero-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <h5 style="color: var(--color-primary-blue);">Masyarakat</h5>
                                    <p class="text-muted">Warga yang aktif berkontribusi dalam pembangunan lingkungan dan sosial.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pahlawan dari Sabang sampai Merauke -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="map-section animate__animated animate__fadeIn">
                        <img src="https://images.unsplash.com/photo-1526779259212-939e64788e3c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Peta Indonesia" class="map-image">
                        <div class="map-overlay">
                            <h3 class="mb-3">Pahlawan dari Sabang sampai Merauke</h3>
                            <p class="mb-0">
                                Pahlawan Indonesia berasal dari seluruh penjuru nusantara, dari Sabang hingga Merauke, 
                                dengan latar belakang suku, agama, dan profesi yang beragam. Keberagaman ini justru 
                                memperkaya perjuangan dan memperkuat persatuan bangsa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Jejak Waktu Perjuangan (Timeline) -->
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title mb-4">Jejak Waktu Perjuangan</h3>
                    <div class="timeline-container">
                        <div class="timeline-item animate__animated animate__fadeInLeft">
                            <div class="timeline-content">
                                <div class="timeline-year">1908</div>
                                <h5 style="color: var(--color-primary-blue);">Kebangkitan Nasional</h5>
                                <p class="text-muted">Didirikannya Budi Utomo sebagai organisasi modern pertama yang memperjuangkan kemerdekaan Indonesia.</p>
                            </div>
                        </div>
                        <div class="timeline-item animate__animated animate__fadeInRight">
                            <div class="timeline-content">
                                <div class="timeline-year">1928</div>
                                <h5 style="color: var(--color-primary-blue);">Sumpah Pemuda</h5>
                                <p class="text-muted">Kongres Pemuda II menghasilkan Sumpah Pemuda yang menjadi dasar persatuan bangsa.</p>
                            </div>
                        </div>
                        <div class="timeline-item animate__animated animate__fadeInLeft">
                            <div class="timeline-content">
                                <div class="timeline-year">1945</div>
                                <h5 style="color: var(--color-primary-blue);">Proklamasi Kemerdekaan</h5>
                                <p class="text-muted">Ir. Soekarno dan Drs. Moh. Hatta memproklamasikan kemerdekaan Indonesia pada 17 Agustus 1945.</p>
                            </div>
                        </div>
                        <div class="timeline-item animate__animated animate__fadeInRight">
                            <div class="timeline-content">
                                <div class="timeline-year">1945-1949</div>
                                <h5 style="color: var(--color-primary-blue);">Revolusi Fisik</h5>
                                <p class="text-muted">Periode perjuangan mempertahankan kemerdekaan dari upaya kolonialisme Belanda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section-padding features-section" id="features">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-center">Mengapa Platform Ini Penting?</h2>
                <p class="lead max-width-800 mx-auto" style="color: var(--color-text-light); max-width: 800px;">
                    Dalam era digital, penting untuk menyajikan sejarah dengan cara yang menarik 
                    dan mudah diakses oleh generasi muda.
                </p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle p-3 me-3" style="background: linear-gradient(135deg, var(--color-primary-blue), var(--color-secondary-blue));">
                                <i class="fas fa-search text-white fs-4"></i>
                            </div>
                            <h4 class="mb-0" style="color: var(--color-primary-blue);">Pencarian Cerdas</h4>
                        </div>
                        <p class="text-muted">Temukan pahlawan berdasarkan nama, daerah asal, atau periode sejarah dengan mudah menggunakan sistem pencarian kami.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle p-3 me-3" style="background: linear-gradient(135deg, var(--color-primary-blue), var(--color-secondary-blue));">
                                <i class="fas fa-edit text-white fs-4"></i>
                            </div>
                            <h4 class="mb-0" style="color: var(--color-primary-blue);">Kontribusi Terbuka</h4>
                        </div>
                        <p class="text-muted">Anda dapat berkontribusi dengan menambahkan atau memperbarui informasi pahlawan melalui sistem CRUD yang user-friendly.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle p-3 me-3" style="background: linear-gradient(135deg, var(--color-primary-blue), var(--color-secondary-blue));">
                                <i class="fas fa-mobile-alt text-white fs-4"></i>
                            </div>
                            <h4 class="mb-0" style="color: var(--color-primary-blue);">Akses Mobile</h4>
                        </div>
                        <p class="text-muted">Platform yang sepenuhnya responsif, dapat diakses dengan optimal dari smartphone, tablet, maupun desktop.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('pahlawans.create') }}" class="btn btn-warning btn-lg">
                    <i class="fas fa-plus-circle me-2"></i> Tambah Pahlawan Baru
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 class="footer-title">
                        <i class="fas fa-shield-alt me-2"></i> Pahlawan Indonesia
                    </h3>
                    <p class="text-white opacity-75">
                        Platform digital untuk melestarikan sejarah dan mengenang jasa para pahlawan 
                        Indonesia dari berbagai daerah dan periode.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-decoration-none me-3">
                            <i class="fab fa-facebook fa-lg footer-link"></i>
                        </a>
                        <a href="#" class="text-decoration-none me-3">
                            <i class="fab fa-twitter fa-lg footer-link"></i>
                        </a>
                        <a href="#" class="text-decoration-none me-3">
                            <i class="fab fa-instagram fa-lg footer-link"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-youtube fa-lg footer-link"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 class="footer-title">Menu</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#hero" class="footer-link">Beranda</a></li>
                        <li class="mb-2"><a href="#about" class="footer-link">Tentang</a></li>
                        <li class="mb-2"><a href="#features" class="footer-link">Fitur</a></li>
                        <li class="mb-2"><a href="{{ route('pahlawans.index') }}" class="footer-link">Database</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h4 class="footer-title">Kategori Pahlawan</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Pahlawan Nasional</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Pahlawan Revolusi</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Pahlawan Daerah</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Pahlawan Kemerdekaan</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h4 class="footer-title">Kontak</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-envelope me-2 footer-link"></i>
                            <a href="mailto:info@pahlawanindonesia.id" class="footer-link">info@pahlawanindonesia.id</a>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone me-2 footer-link"></i>
                            <a href="tel:+62123456789" class="footer-link">+62 123 456 789</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt me-2 footer-link"></i>
                            <span class="footer-link">Jakarta, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>&copy; 2026 Pahlawan Indonesia. Semua hak dilindungi. | Dibangun dengan <i class="fas fa-heart text-warning"></i> untuk bangsa</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Animated counter for stats
        function animateCounter() {
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200;
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                const count = parseInt(counter.innerText);
                const increment = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(animateCounter, 1);
                } else {
                    counter.innerText = target;
                }
            });
        }

        // Initialize counter when stats section is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter();
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                if (this.getAttribute('href') !== '#') {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#hero') {
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    } else {
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 80,
                                behavior: 'smooth'
                            });
                        }
                    }
                }
            });
        });

        // Fun Facts Rotation
        const funFacts = [
            "Cut Nyak Dhien, pahlawan nasional dari Aceh, tetap melanjutkan perjuangan melawan Belanda meskipun suaminya Teuku Umar gugur dalam pertempuran.",
            "Pangeran Diponegoro memimpin Perang Jawa (1825-1830) yang menelan korban sekitar 200.000 jiwa di pihak Jawa dan 8.000 di pihak Belanda.",
            "R.A. Kartini tidak hanya memperjuangkan emansipasi wanita, tetapi juga mendirikan sekolah untuk anak perempuan di Rembang.",
            "Jenderal Sudirman memimpin gerilya melawan Belanda selama 7 bulan meskipun dalam keadaan sakit paru-paru.",
            "Bung Tomo dikenal dengan pidato-pidatonya yang membakar semangat arek-arek Suroboyo dalam pertempuran 10 November 1945.",
            "Tan Malaka adalah salah satu bapak bangsa yang menguasai 7 bahasa asing dan memiliki pemikiran jauh melampaui zamannya.",
            "Kapitan Pattimura berasal dari Maluku dan sebelumnya adalah seorang mantan sersan militer Inggris.",
            "Sultan Hasanuddin dari Gowa dijuluki 'Ayam Jantan dari Timur' oleh Belanda karena keberaniannya melawan VOC."
        ];

        let currentFactIndex = 0;
        const funFactDisplay = document.getElementById('funFactDisplay');
        const nextFactBtn = document.getElementById('nextFactBtn');

        function displayRandomFact() {
            // Get a random fact that's not the current one
            let newIndex;
            do {
                newIndex = Math.floor(Math.random() * funFacts.length);
            } while (newIndex === currentFactIndex && funFacts.length > 1);
            
            currentFactIndex = newIndex;
            
            // Add fade out effect
            funFactDisplay.style.opacity = '0';
            funFactDisplay.style.transition = 'opacity 0.5s ease';
            
            setTimeout(() => {
                funFactDisplay.textContent = funFacts[currentFactIndex];
                funFactDisplay.style.opacity = '1';
            }, 500);
        }

        // Initialize with first fact
        funFactDisplay.textContent = funFacts[currentFactIndex];

        // Auto rotate facts every 10 seconds
        let factInterval = setInterval(displayRandomFact, 10000);

        // Manual fact rotation on button click
        nextFactBtn.addEventListener('click', function() {
            displayRandomFact();
            // Reset the interval
            clearInterval(factInterval);
            factInterval = setInterval(displayRandomFact, 10000);
        });

        // Add animation on scroll for new sections
        const animatedElements = document.querySelectorAll('.animate__animated');
        
        const elementObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const animationClass = entry.target.classList[1]; // Get the animation class
                    entry.target.classList.add(animationClass);
                    
                    // Remove observer after animation is triggered
                    elementObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        animatedElements.forEach(element => {
            elementObserver.observe(element);
        });

        // Initialize counter animation for stats
        document.addEventListener('DOMContentLoaded', function() {
            // Animate counters if stats section is in view on page load
            if (statsSection.getBoundingClientRect().top < window.innerHeight) {
                animateCounter();
            }
        });

        // Search and Filter Functionality
        const heroSearch = document.getElementById('heroSearch');
        const regionFilter = document.getElementById('regionFilter');
        const clearSearch = document.getElementById('clearSearch');
        const heroItems = document.querySelectorAll('.hero-item');

        function filterHeroes() {
            const searchTerm = heroSearch.value.toLowerCase();
            const regionTerm = regionFilter.value.toLowerCase();
            
            heroItems.forEach(item => {
                const heroName = item.getAttribute('data-name');
                const heroRegion = item.getAttribute('data-region');
                
                const nameMatch = heroName.includes(searchTerm);
                const regionMatch = regionTerm === '' || heroRegion === regionTerm;
                
                if (nameMatch && regionMatch) {
                    item.classList.remove('hidden');
                    // Add animation
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                        item.style.transition = 'all 0.3s ease';
                    }, 50);
                } else {
                    item.classList.add('hidden');
                }
            });
            
            // Show message if no results
            const visibleItems = document.querySelectorAll('.hero-item:not(.hidden)');
            const heroesGrid = document.getElementById('heroesGrid');
            
            if (visibleItems.length === 0) {
                let noResults = document.querySelector('.no-results-message');
                if (!noResults) {
                    noResults = document.createElement('div');
                    noResults.className = 'col-12 text-center py-5 no-results-message';
                    noResults.innerHTML = `
                        <div class="empty-state" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 15px; border: 2px dashed #dee2e6; padding: 40px;">
                            <i class="fas fa-search fa-4x text-muted mb-3"></i>
                            <h4 class="text-muted">Tidak Ditemukan</h4>
                            <p class="text-muted mb-4">Tidak ada pahlawan yang cocok dengan kriteria pencarian.</p>
                            <button class="btn btn-outline-primary" id="resetFilters">
                                <i class="fas fa-redo me-2"></i> Reset Filter
                            </button>
                        </div>
                    `;
                    heroesGrid.appendChild(noResults);
                    
                    // Add reset functionality
                    document.getElementById('resetFilters').addEventListener('click', function() {
                        heroSearch.value = '';
                        regionFilter.value = '';
                        filterHeroes();
                        noResults.remove();
                    });
                }
            } else {
                const noResults = document.querySelector('.no-results-message');
                if (noResults) noResults.remove();
            }
        }

        // Event listeners
        if (heroSearch) {
            heroSearch.addEventListener('input', filterHeroes);
        }

        if (regionFilter) {
            regionFilter.addEventListener('change', filterHeroes);
        }

        if (clearSearch) {
            clearSearch.addEventListener('click', function() {
                heroSearch.value = '';
                filterHeroes();
            });
        }

        // Initialize filtering on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Add data attributes for filtering
            heroItems.forEach(item => {
                const cardTitle = item.querySelector('.card-title');
                const regionSpan = item.querySelector('span.text-muted.small');
                
                if (cardTitle) {
                    item.setAttribute('data-name', cardTitle.textContent.toLowerCase().trim());
                }
                
                if (regionSpan) {
                    item.setAttribute('data-region', regionSpan.textContent.toLowerCase().trim());
                }
            });
        });
    </script>
</body>
</html>