<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Galeri Pahlawan Indonesia</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
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
            background-color: var(--color-light-bg);
            color: var(--color-text-dark);
            min-height: 100vh;
            overflow-x: hidden;
            background-image: 
                linear-gradient(135deg, rgba(13, 71, 161, 0.03) 0%, transparent 50%),
                linear-gradient(45deg, rgba(255, 193, 7, 0.03) 0%, transparent 50%);
            position: relative;
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
        
        /* Floating Garuda feathers */
        .feathers-container {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }
        
        .feather {
            position: absolute;
            background: linear-gradient(135deg, var(--color-primary-yellow), var(--color-secondary-yellow));
            opacity: 0.1;
            border-radius: 50% 50% 50% 0;
            transform: rotate(45deg);
            animation: float-feather 20s infinite ease-in-out;
        }
        
        @keyframes float-feather {
            0%, 100% { transform: translateY(0) rotate(45deg) scale(1); }
            50% { transform: translateY(-30px) rotate(45deg) scale(1.05); }
        }
        
        /* Navbar styling */
        .navbar {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            border-bottom: 3px solid var(--color-primary-yellow);
            box-shadow: var(--shadow-medium);
            padding: 0.8rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.9rem;
            color: var(--color-white) !important;
            display: flex;
            align-items: center;
            gap: 12px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .navbar-brand i {
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
        
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            height: 3px;
            background: var(--color-primary-yellow);
            border-radius: 3px;
        }
        
        /* Main content */
        main.container {
            padding: 2.5rem 1rem;
            position: relative;
            z-index: 1;
        }
        
        /* Hero section */
        .hero-section {
            background: linear-gradient(135deg, var(--color-primary-blue), var(--color-secondary-blue));
            border-radius: 20px;
            padding: 3.5rem 2.5rem;
            margin-bottom: 3rem;
            box-shadow: var(--shadow-heavy);
            border: 2px solid var(--color-primary-yellow);
            position: relative;
            overflow: hidden;
            color: var(--color-white);
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
            font-weight: 800;
            font-size: 3.2rem;
            margin-bottom: 1.2rem;
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
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.3rem;
            max-width: 650px;
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }
        
        /* Garuda Shield */
        .garuda-shield {
            position: absolute;
            right: 3rem;
            bottom: 0;
            width: 200px;
            height: 250px;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .shield {
            width: 160px;
            height: 200px;
            background: linear-gradient(135deg, var(--color-primary-yellow), var(--color-secondary-yellow));
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .shield-inner {
            width: 120px;
            height: 160px;
            background: linear-gradient(135deg, var(--color-primary-blue), var(--color-secondary-blue));
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-primary-yellow);
            font-size: 3.5rem;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        
        /* Card styling */
        .card {
            border: none;
            border-radius: 18px;
            box-shadow: var(--shadow-soft);
            background-color: var(--color-card-bg);
            transition: all 0.4s ease;
            overflow: hidden;
            margin-bottom: 1.8rem;
            border-top: 4px solid var(--color-primary-blue);
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
            border-top: 4px solid var(--color-primary-yellow);
        }
        
        .card-header {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            color: var(--color-white);
            border: none;
            border-radius: 0 !important;
            padding: 1.5rem 1.8rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .card-header i {
            color: var(--color-primary-yellow);
            font-size: 1.8rem;
        }
        
        .card-body {
            padding: 2rem;
        }
        
        /* Button styling */
        .btn {
            border-radius: 50px;
            padding: 0.8rem 2rem;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.7s ease;
        }
        
        .btn:hover::before {
            left: 100%;
        }
        
        .btn-primary {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            color: var(--color-white);
        }
        
        .btn-primary:hover {
            background: linear-gradient(90deg, var(--color-secondary-blue), var(--color-accent-blue));
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(25, 118, 210, 0.4);
        }
        
        .btn-warning {
            background: linear-gradient(90deg, var(--color-primary-yellow), var(--color-secondary-yellow));
            color: var(--color-text-dark);
        }
        
        .btn-warning:hover {
            background: linear-gradient(90deg, var(--color-secondary-yellow), #FFECB3);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 193, 7, 0.4);
        }
        
        .btn-success {
            background: linear-gradient(90deg, var(--color-success), #4CAF50);
            color: var(--color-white);
        }
        
        .btn-success:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(46, 125, 50, 0.4);
        }
        
        .btn-danger {
            background: linear-gradient(90deg, var(--color-danger), #F44336);
            color: var(--color-white);
        }
        
        .btn-danger:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(198, 40, 40, 0.4);
        }
        
        .btn-info {
            background: linear-gradient(90cd, var(--color-accent-blue), #64B5F6);
            color: var(--color-white);
        }
        
        .btn-sm {
            padding: 0.5rem 1.2rem;
            font-size: 0.9rem;
        }
        
        /* Table styling */
        .table-responsive {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            border: 1px solid var(--color-border);
        }
        
        .table {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table thead {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            color: var(--color-white);
        }
        
        .table thead th {
            border: none;
            padding: 1.3rem 1rem;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
            border-right: 1px solid rgba(255, 255, 255, 0.15);
        }
        
        .table thead th:last-child {
            border-right: none;
        }
        
        .table tbody tr {
            transition: all 0.3s ease;
            background-color: var(--color-card-bg);
        }
        
        .table tbody tr:nth-child(even) {
            background-color: rgba(227, 242, 253, 0.5);
        }
        
        .table tbody tr:hover {
            background-color: rgba(13, 71, 161, 0.08);
        }
        
        .table tbody td {
            border: none;
            border-bottom: 1px solid var(--color-border);
            padding: 1.3rem 1rem;
            vertical-align: middle;
        }
        
        .table tbody tr:last-child td {
            border-bottom: none;
        }
        
        /* Image styling */
        .img-thumbnail {
            border-radius: 10px;
            border: 2px solid var(--color-border);
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .img-thumbnail:hover {
            transform: scale(1.05);
            border-color: var(--color-primary-yellow);
            box-shadow: 0 8px 20px rgba(255, 193, 7, 0.2);
        }
        
        /* Alert styling */
        .alert {
            border-radius: 15px;
            border: none;
            box-shadow: var(--shadow-soft);
            border-left: 5px solid;
        }
        
        .alert-success {
            background: linear-gradient(90deg, rgba(46, 125, 50, 0.1), rgba(46, 125, 50, 0.05));
            border-left-color: var(--color-success);
            color: var(--color-success);
        }
        
        /* Pagination styling */
        .pagination {
            gap: 8px;
        }
        
        .page-item .page-link {
            border: 1px solid var(--color-border);
            border-radius: 10px;
            color: var(--color-text-dark);
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.7rem 1.2rem;
        }
        
        .page-item.active .page-link {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            border-color: var(--color-primary-blue);
            color: var(--color-white);
            box-shadow: 0 5px 15px rgba(13, 71, 161, 0.3);
        }
        
        .page-item:not(.active) .page-link:hover {
            background-color: rgba(13, 71, 161, 0.08);
            border-color: var(--color-primary-blue);
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 5rem 2rem;
            color: var(--color-text-light);
        }
        
        .empty-state-icon {
            font-size: 5rem;
            color: var(--color-border);
            margin-bottom: 1.5rem;
            opacity: 0.5;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
            margin-top: 4rem;
            padding: 2.5rem 0;
            color: var(--color-white);
            border-top: 3px solid var(--color-primary-yellow);
        }
        
        .footer-logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--color-white);
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1rem;
        }
        
        .footer-logo i {
            color: var(--color-primary-yellow);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .garuda-shield {
                display: none;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-section {
                padding: 2.5rem 1.5rem;
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
                border-radius: 10px;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
        }
    </style>
    
    <!-- Custom JS for interactions -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Create floating feathers
            createFeathers();
            
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
        
        function createFeathers() {
            const container = document.querySelector('.feathers-container');
            if (!container) return;
            
            const featherCount = 12;
            
            for (let i = 0; i < featherCount; i++) {
                const feather = document.createElement('div');
                feather.classList.add('feather');
                
                // Random size between 20 and 60px
                const size = Math.random() * 40 + 20;
                feather.style.width = `${size}px`;
                feather.style.height = `${size}px`;
                
                // Random position
                feather.style.left = `${Math.random() * 100}%`;
                feather.style.top = `${Math.random() * 100}%`;
                
                // Random animation delay
                feather.style.animationDelay = `${Math.random() * 20}s`;
                
                container.appendChild(feather);
            }
        }
    </script>
</head>
<body>
    <!-- Garis merah putih -->
    <div class="red-white-line"></div>
    
    <!-- Floating feathers -->
    <div class="feathers-container"></div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('pahlawans.index') }}">
                <i class="fas fa-shield-alt"></i> Galeri Pahlawan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('pahlawans.index') }}">
                            <i class="fas fa-home me-1"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pahlawans.create') }}">
                            <i class="fas fa-plus-circle me-1"></i> Tambah Pahlawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="fas fa-info-circle me-1"></i> Tentang
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
                <h1 class="hero-title">Mengenal <span>Pahlawan Indonesia</span></h1>
                <p class="hero-subtitle">
                    Menghormati jasa para pahlawan yang telah berkorban untuk kemerdekaan dan kemajuan bangsa Indonesia.
                    Setiap kisah perjuangan mereka adalah warisan berharga untuk generasi penerus.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('pahlawans.create') }}" class="btn btn-warning">
                        <i class="fas fa-plus-circle"></i> Tambah Pahlawan Baru
                    </a>
                    {{-- <a href="#data-pahlawan" class="btn btn-primary">
                        <i class="fas fa-users"></i> Lihat Semua Pahlawan
                    </a> --}}
                </div>
            </div>
            
            <!-- Garuda Shield -->
            <div class="garuda-shield d-none d-lg-block">
                <div class="shield">
                    <div class="shield-inner">
                        <i class="fas fa-star"></i>
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
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <div class="footer-logo">
                        <i class="fas fa-shield-alt"></i> Galeri Pahlawan Indonesia
                    </div>
                    <p class="mb-0">Mengenang jasa, Meneladani sikap, Meneruskan perjuangan.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <p class="mb-2">
                        <i class="fas fa-heart text-warning"></i> 
                        Dibuat dengan semangat nasionalisme untuk Indonesia
                        <i class="fas fa-heart text-warning"></i>
                    </p>
                    <p class="small mb-0">© 2023 Galeri Pahlawan Indonesia. Semua hak dilindungi.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>