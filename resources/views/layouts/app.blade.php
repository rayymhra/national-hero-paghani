<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Galeri Pahlawan Indonesia</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --color-primary: #8A7FFF;
            --color-primary-light: #A594F9;
            --color-secondary: #6CD4FF;
            --color-accent: #FF9A8B;
            --color-bg: #FAF7FF;
            --color-card: #FFFFFF;
            --color-text: #4A4453;
            --color-text-light: #8B849E;
            --color-success: #7FD8BE;
            --color-warning: #FFD166;
            --color-danger: #FF7B9C;
            --color-border: #E8E3F2;
            --shadow-soft: 0 10px 30px rgba(138, 127, 255, 0.08);
            --shadow-medium: 0 15px 40px rgba(138, 127, 255, 0.12);
            --shadow-floating: 0 20px 50px rgba(138, 127, 255, 0.15);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--color-bg);
            color: var(--color-text);
            min-height: 100vh;
            overflow-x: hidden;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(138, 127, 255, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(255, 154, 139, 0.05) 0%, transparent 20%);
            position: relative;
        }
        
        /* Floating particles */
        .particles-container {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--color-primary-light), var(--color-secondary));
            opacity: 0.4;
            animation: float 15s infinite ease-in-out;
        }
        
        .particle:nth-child(2n) {
            background: linear-gradient(135deg, var(--color-accent), var(--color-primary));
            animation-delay: -5s;
        }
        
        .particle:nth-child(3n) {
            background: linear-gradient(135deg, var(--color-secondary), var(--color-success));
            animation-delay: -10s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        /* Navbar styling */
        .navbar {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--color-border);
            box-shadow: var(--shadow-soft);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar:hover {
            background: rgba(255, 255, 255, 0.95);
        }
        
        .navbar-brand {
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
            font-size: 1.8rem;
            background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .navbar-brand i {
            color: var(--color-primary);
            font-size: 2rem;
            filter: drop-shadow(0 2px 5px rgba(138, 127, 255, 0.3));
        }
        
        .nav-link {
            color: var(--color-text) !important;
            font-weight: 500;
            padding: 0.5rem 1.2rem !important;
            border-radius: 50px;
            margin: 0 0.2rem;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--color-primary) !important;
            background-color: rgba(138, 127, 255, 0.08);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
            border-radius: 3px;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 70%;
        }
        
        /* Main content */
        main.container {
            padding: 2rem 1rem;
            position: relative;
            z-index: 1;
        }
        
        /* Hero section */
        .hero-section {
            background: linear-gradient(135deg, rgba(138, 127, 255, 0.1), rgba(255, 154, 139, 0.1));
            border-radius: 24px;
            padding: 3rem 2rem;
            margin-bottom: 3rem;
            box-shadow: var(--shadow-soft);
            border: 1px solid var(--color-border);
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(138, 127, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }
        
        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(255, 154, 139, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
            font-size: 2.8rem;
            margin-bottom: 1rem;
            background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .hero-subtitle {
            color: var(--color-text-light);
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        /* Character illustration */
        .character-container {
            position: absolute;
            right: 3rem;
            bottom: 0;
            width: 180px;
            height: 280px;
            z-index: 1;
        }
        
        .character {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        .character-head {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #FFD6CC, #FF9A8B);
            border-radius: 40% 40% 45% 45%;
            z-index: 2;
            box-shadow: 0 5px 15px rgba(255, 154, 139, 0.3);
        }
        
        .character-eyes {
            position: absolute;
            top: 30px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 15px;
            z-index: 3;
        }
        
        .eye {
            width: 20px;
            height: 24px;
            background: #4A4453;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
        }
        
        .eye::after {
            content: '';
            position: absolute;
            top: 5px;
            left: 5px;
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
        }
        
        .character-body {
            position: absolute;
            top: 70px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 140px;
            background: linear-gradient(135deg, #8A7FFF, #6CD4FF);
            border-radius: 40px 40px 20px 20px;
            z-index: 1;
            box-shadow: 0 10px 20px rgba(138, 127, 255, 0.3);
        }
        
        .character-arms {
            position: absolute;
            top: 85px;
            width: 100%;
            height: 80px;
            z-index: 0;
        }
        
        .arm {
            position: absolute;
            width: 20px;
            height: 70px;
            background: linear-gradient(135deg, #8A7FFF, #6CD4FF);
            border-radius: 10px;
        }
        
        .arm-left {
            left: 15px;
            top: 10px;
            transform: rotate(-30deg);
        }
        
        .arm-right {
            right: 15px;
            top: 10px;
            transform: rotate(30deg);
        }
        
        /* Card styling */
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: var(--shadow-soft);
            background-color: var(--color-card);
            transition: all 0.4s ease;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-floating);
        }
        
        .card-header {
            background: linear-gradient(90deg, var(--color-primary), var(--color-primary-light));
            color: white;
            border: none;
            border-radius: 20px 20px 0 0 !important;
            padding: 1.5rem 1.5rem;
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .card-header i {
            font-size: 1.8rem;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }
        
        .card-body {
            padding: 1.8rem;
        }
        
        /* Button styling */
        .btn {
            border-radius: 50px;
            padding: 0.7rem 1.8rem;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            position: relative;
            overflow: hidden;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s ease;
        }
        
        .btn:hover::before {
            left: 100%;
        }
        
        .btn-success {
            background: linear-gradient(90deg, var(--color-success), #5BC2A7);
            color: white;
            box-shadow: 0 5px 15px rgba(127, 216, 190, 0.4);
        }
        
        .btn-success:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(127, 216, 190, 0.6);
        }
        
        .btn-info {
            background: linear-gradient(90deg, var(--color-secondary), #4DB8E3);
            color: white;
            box-shadow: 0 5px 15px rgba(108, 212, 255, 0.4);
        }
        
        .btn-info:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(108, 212, 255, 0.6);
        }
        
        .btn-warning {
            background: linear-gradient(90deg, var(--color-warning), #FFC145);
            color: white;
            box-shadow: 0 5px 15px rgba(255, 209, 102, 0.4);
        }
        
        .btn-warning:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 209, 102, 0.6);
        }
        
        .btn-danger {
            background: linear-gradient(90deg, var(--color-danger), #FF5C8D);
            color: white;
            box-shadow: 0 5px 15px rgba(255, 123, 156, 0.4);
        }
        
        .btn-danger:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 123, 156, 0.6);
        }
        
        .btn-sm {
            padding: 0.4rem 1.2rem;
            font-size: 0.9rem;
        }
        
        /* Table styling */
        .table-responsive {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
        }
        
        .table {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table thead {
            background: linear-gradient(90deg, var(--color-primary), var(--color-primary-light));
            color: white;
        }
        
        .table thead th {
            border: none;
            padding: 1.2rem 1rem;
            font-weight: 600;
            font-family: 'Quicksand', sans-serif;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .table thead th:last-child {
            border-right: none;
        }
        
        .table tbody tr {
            transition: all 0.3s ease;
            background-color: white;
        }
        
        .table tbody tr:nth-child(even) {
            background-color: rgba(250, 247, 255, 0.7);
        }
        
        .table tbody tr:hover {
            background-color: rgba(138, 127, 255, 0.08);
            transform: translateX(5px);
        }
        
        .table tbody td {
            border: none;
            border-bottom: 1px solid var(--color-border);
            padding: 1.2rem 1rem;
            vertical-align: middle;
        }
        
        .table tbody tr:last-child td {
            border-bottom: none;
        }
        
        /* Image styling */
        .img-thumbnail {
            border-radius: 12px;
            border: 2px solid var(--color-border);
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .img-thumbnail:hover {
            transform: scale(1.05);
            border-color: var(--color-primary);
            box-shadow: 0 8px 20px rgba(138, 127, 255, 0.3);
        }
        
        /* Alert styling */
        .alert {
            border-radius: 16px;
            border: none;
            box-shadow: var(--shadow-soft);
            backdrop-filter: blur(10px);
        }
        
        .alert-success {
            background: linear-gradient(90deg, rgba(127, 216, 190, 0.15), rgba(127, 216, 190, 0.05));
            border-left: 5px solid var(--color-success);
            color: #1A6B53;
        }
        
        /* Pagination styling */
        .pagination {
            gap: 8px;
        }
        
        .page-item .page-link {
            border: none;
            border-radius: 12px;
            color: var(--color-text);
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.6rem 1rem;
        }
        
        .page-item.active .page-link {
            background: linear-gradient(90deg, var(--color-primary), var(--color-primary-light));
            color: white;
            box-shadow: 0 5px 15px rgba(138, 127, 255, 0.4);
        }
        
        .page-item:not(.active) .page-link:hover {
            background-color: rgba(138, 127, 255, 0.1);
            color: var(--color-primary);
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--color-text-light);
        }
        
        .empty-state-icon {
            font-size: 4rem;
            color: var(--color-border);
            margin-bottom: 1.5rem;
        }
        
        /* Footer */
        footer {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-top: 1px solid var(--color-border);
            margin-top: 3rem;
            padding: 2rem 0;
            color: var(--color-text-light);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .character-container {
                display: none;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .table-responsive {
                border-radius: 12px;
            }
            
            .card-header {
                padding: 1.2rem 1rem;
                font-size: 1.3rem;
            }
            
            .btn-group {
                flex-direction: column;
                gap: 5px;
            }
            
            .btn-group .btn {
                width: 100%;
                border-radius: 12px;
            }
        }
    </style>
    
    <!-- Custom JS for interactions -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Create floating particles
            createParticles();
            
            // Add hover effect to table rows
            const tableRows = document.querySelectorAll('.table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.3s ease';
                });
            });
            
            // Add smooth scroll
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
            
            // Button ripple effect
            document.querySelectorAll('.btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    const x = e.clientX - e.target.getBoundingClientRect().left;
                    const y = e.clientY - e.target.getBoundingClientRect().top;
                    
                    const ripple = document.createElement('span');
                    ripple.style.position = 'absolute';
                    ripple.style.borderRadius = '50%';
                    ripple.style.background = 'rgba(255, 255, 255, 0.5)';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.animation = 'ripple 0.6s linear';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.style.width = '100px';
                    ripple.style.height = '100px';
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
            
            // Add CSS for ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        });
        
        function createParticles() {
            const container = document.querySelector('.particles-container');
            if (!container) return;
            
            const particleCount = 15;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size between 5 and 20px
                const size = Math.random() * 15 + 5;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Random animation delay
                particle.style.animationDelay = `${Math.random() * 15}s`;
                
                container.appendChild(particle);
            }
        }
    </script>
</head>
<body>
    <!-- Floating particles -->
    <div class="particles-container"></div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('pahlawans.index') }}">
                <i class="fas fa-heart"></i> Pahlawan Indonesia
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('pahlawans.index') }}">
                            <i class="fas fa-home me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pahlawans.create') }}">
                            <i class="fas fa-plus-circle me-1"></i> Tambah Pahlawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="fas fa-book me-1"></i> Tentang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <h1 class="hero-title">Galeri Pahlawan Indonesia</h1>
                <p class="hero-subtitle">
                    Jelajahi kisah inspiratif para pahlawan nasional yang telah berjuang untuk kemerdekaan dan kemajuan Indonesia. 
                    Setiap cerita adalah warisan berharga bagi generasi penerus bangsa.
                </p>
                <a href="{{ route('pahlawans.create') }}" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Tambah Pahlawan Baru
                </a>
            </div>
            
            <!-- Character illustration -->
            <div class="character-container d-none d-lg-block">
                <div class="character">
                    <div class="character-head">
                        <div class="character-eyes">
                            <div class="eye"></div>
                            <div class="eye"></div>
                        </div>
                    </div>
                    <div class="character-body"></div>
                    <div class="character-arms">
                        <div class="arm arm-left"></div>
                        <div class="arm arm-right"></div>
                    </div>
                </div>
            </div>
        </section>
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="mb-2">
                <i class="fas fa-heart text-danger"></i> 
                Dibuat dengan semangat kepahlawanan untuk Indonesia
                <i class="fas fa-heart text-danger"></i>
            </p>
            <p class="small">© 2023 Galeri Pahlawan Indonesia. Semua hak dilindungi.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>