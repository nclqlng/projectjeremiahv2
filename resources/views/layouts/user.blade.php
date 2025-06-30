<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Guidance Office Services')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/user-layout.css" rel="stylesheet">
    @yield('styles')
</head>
<body>
   <nav class="navbar navbar-expand-md navbar-static" id="navbar-static" style="width:100%;padding:0;margin:0;min-height:unset;">
    <div class="container py-2" style="min-height:unset;">
        <a class="navbar-brand d-flex align-items-center" href="/" style="padding:0;">
            <img src="/nu logo.png" alt="NU Laguna Logo" style="height:50px;width:auto;margin-right:10px;">
            <span class="d-flex flex-column lh-sm" style="font-size:0.9rem;line-height:1.1;">
                <span>NU LAGUNA</span>
                <span>CENTER FOR</span>
                <span>GUIDANCE SERVICES</span>
            </span>
        </a>
        <button class="navbar-toggler custom-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStaticLinks" aria-controls="navbarStaticLinks" aria-expanded="false" aria-label="Toggle navigation" style="background:transparent; border:none; box-shadow:none;">
            <i data-lucide="menu" style="color:#fff; width:2em; height:2em;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarStaticLinks">
            <ul class="navbar-nav ms-auto d-flex flex-md-row flex-column" style="gap:0.5rem;align-items:center;margin-bottom:0;">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.hotline') }}">Emergency Hotlines</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.freedomwall.add') }}">e-Hayag</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md" id="navbar-sticky" style="width:100%;padding:0;margin:0;min-height:unset;">
    <div class="container py-2" style="min-height:unset;">
        <a class="navbar-brand d-flex align-items-center" href="/" style="padding:0;">
            <img src="/nu logo.png" alt="NU Laguna Logo" style="height:50px;width:auto;margin-right:10px;">
            <span class="d-flex flex-column lh-sm" style="font-size:0.9rem;line-height:1.1;">
                <span>NU LAGUNA</span>
                <span>CENTER FOR</span>
                <span>GUIDANCE SERVICES</span>
            </span>
        </a>
        <button class="navbar-toggler custom-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStickyLinks" aria-controls="navbarStickyLinks" aria-expanded="false" aria-label="Toggle navigation" style="background:transparent; border:none; box-shadow:none;">
            <i data-lucide="menu" style="color:#fff; width:2em; height:2em;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarStickyLinks">
            <ul class="navbar-nav ms-auto d-flex flex-md-row flex-column" style="gap:0.5rem;align-items:center;margin-bottom:0;">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.hotline') }}">Emergency Hotlines</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.freedomwall.add') }}">e-Hayag</a></li>
            </ul>
        </div>
    </div>
</nav>

    <main>
        <div class="page-container">
            @yield('content')
        </div>
    </main>

   
    <footer>
        <div class="container py-4">
            <div class="row align-items-start gy-4">
                <!-- Logo and Description -->
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="d-flex align-items-center mb-2">
                        <img src="/nu logo.png" alt="NU Laguna Logo" class="me-2" style="height:55px; width:auto;">
                        <div>
                            <div class="fw-bold" style="color: var(--nu-light);">NU LAGUNA<br>CENTER FOR<br>GUIDANCE SERVICES</div>
                        </div>
                    </div>
                    <p style="color: var(--nu-light); font-size: 0.95em;">
                        Our platform connects students to counseling services, professional support, and online consultations—all in one place.
                    </p>
                    <div>
                        <a href="#" class="mx-1" aria-label="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="mx-1" aria-label="X"><i class="fab fa-x-twitter fa-lg"></i></a>
                        <a href="#" class="mx-1" aria-label="Instagram"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
                <!-- Quick Links -->
                <div class="col-6 col-md-2 mb-3 mb-md-0">
                    <div class="fw-bold mb-2" style="color: var(--nu-light);">Quick Links</div>
                    <ul class="list-unstyled" style="font-size: 0.97em;">
                        <li><a href="/" class="footer-link">Home</a></li>
                        <li><a href="{{ route('user.hotline') }}" class="footer-link">Hotlines</a></li>
                        <li><a href="{{ route('user.services') }}" class="footer-link">Services</a></li>
                        <li><a href="{{ route('user.freedomwall.add') }}" class="footer-link">e–Hayag</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="fw-bold mb-2" style="color: var(--nu-light);">Contact</div>
                    <ul class="list-unstyled" style="font-size: 0.97em;">
                        <li><i class="fas fa-map-marker-alt me-2"></i> National Highway, Laguna</li>
                        <li><i class="fas fa-phone me-2"></i> (02) 1234-5678</li>
                        <li><i class="fas fa-envelope me-2"></i> cgs@nu-laguna.edu.ph</li>
                    </ul>
                </div>
                <!-- Hours -->
                <div class="col-12 col-md-3">
                    <div class="fw-bold mb-2" style="color: var(--nu-light);">Hours</div>
                    <ul class="list-unstyled" style="font-size: 0.97em;">
                        <li>Monday – Friday: 8AM – 6PM</li>
                        <li>Saturday: 9AM – 3PM</li>
                    </ul>
                </div>
            </div>
            <hr style="border-color: var(--nu-light); opacity: 0.2;">
            <div class="text-center" style="color: var(--nu-light); font-size: 0.95em;">
                &copy; 2025 Guidance Office Services. All rights reserved.
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const stickyNavbar = document.getElementById('navbar-sticky');
        const staticNavbar = document.getElementById('navbar-static');
        let isScrolling = false;
        
        function handleScroll() {
            const scrollY = window.scrollY;
            const staticNavbarHeight = staticNavbar.offsetHeight;
            
            if (scrollY > staticNavbarHeight) {
                // Show sticky navbar when scrolled past static navbar
                stickyNavbar.classList.add('show', 'sticky');
            } else {
                // Hide sticky navbar when at top
                stickyNavbar.classList.remove('show', 'sticky');
            }
        }
        
        // Throttle scroll events for better performance
        window.addEventListener('scroll', function() {
            if (!isScrolling) {
                window.requestAnimationFrame(function() {
                    handleScroll();
                    isScrolling = false;
                });
                isScrolling = true;
            }
        });
        
        // Initialize on page load
        handleScroll();
    </script>
    
    @yield('scripts')
</body>
</html>