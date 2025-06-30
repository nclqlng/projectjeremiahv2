@extends('layouts.user')
@section('styles')
<link rel="stylesheet" href="/css/e-hayag.css">
<link rel="stylesheet" href="/css/responsive.css">
<link rel="stylesheet" href="{{ asset('css/animations.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
@endsection

@section('content')
    <!-- Thank You Hero Section -->
    <section class="ehayag-header-hero submitted-hero position-relative">
        <div class="header-hero-dark-overlay"></div>
        <div class="header-hero-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center animate-hero-content">
            <div class="icon-badge mb-3">
                <i data-lucide="check-circle" style="width: 48px; height: 48px; color: #fff;"></i>
            </div>
            <h1 class="ehayag-main-title text-white text-shadow">Thank You!</h1>
            <div class="ehayag-underline"></div>
            <p class="ehayag-hero-subtitle text-white text-shadow">Your message has been received with care.</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="submitted-main-section services-section">
        <div class="submitted-container">
            
            <!-- Success Message Card -->
            <div class="success-message-card">
                <div class="success-icon">
                    <i data-lucide="check-circle" style="width: 24px; height: 24px; color: #fff;"></i>
                </div>
                <div class="success-content">
                    <h3 class="success-title">Message Submitted Successfully</h3>
                    <p class="success-description">
                        Thank you for sharing your thoughts with us. Your message has been safely received and will be 
                        reviewed by our guidance counselors. Remember, you are heard, you are valued, and you are not alone.
                    </p>
                </div>
            </div>

            <!-- What's Next Section -->
            <div class="whats-next-section">
                <h2 class="whats-next-title">What's Next?</h2>
                
                <div class="next-actions-grid">
                    <!-- Explore Services -->
                    <div class="action-card">
                        <div class="action-icon explore-icon">
                            <i data-lucide="layers" style="width: 32px; height: 32px; color: #fff;"></i>
                        </div>
                        <h4 class="action-title">Explore Services</h4>
                        <p class="action-description">
                            Discover our comprehensive guidance and counseling services designed to support your journey.
                        </p>
                        <a href="{{ route('user.services') }}" class="action-button">
                            View Services →
                        </a>
                    </div>

                    <!-- Share Again -->
                    <div class="action-card">
                        <div class="action-icon share-icon">
                            <i data-lucide="message-square" style="width: 32px; height: 32px; color: #fff;"></i>
                        </div>
                        <h4 class="action-title">Share Again</h4>
                        <p class="action-description">
                            Feel free to return anytime to share more thoughts or feelings. We're always here to listen.
                        </p>
                        <a href="{{ route('user.freedomwall.add') }}" class="action-button">
                            Write Again →
                        </a>
                    </div>

                    <!-- Need Help -->
                    <div class="action-card">
                        <div class="action-icon help-icon">
                            <i data-lucide="phone" style="width: 32px; height: 32px; color: #fff;"></i>
                        </div>
                        <h4 class="action-title">Need Help?</h4>
                        <p class="action-description">
                            Access emergency hotlines for immediate support and assistance when you need it most.
                        </p>
                        <a href="{{ route('user.hotline') }}" class="action-button help-button">
                            Get Help →
                        </a>
                    </div>
                </div>
            </div>

            <!-- You're Not Alone Section -->
            <div class="not-alone-section">
                <div class="heart-icon">
                    <i data-lucide="heart" style="width: 48px; height: 48px; fill: #333e8f; color: #333e8f;"></i>
                </div>
                <h3 class="not-alone-title">You're Not Alone</h3>
                <p class="not-alone-description">
                    Every step forward is progress. Every conversation matters. You're not alone on 
                    this journey. The NU Laguna Center for Guidance Services is here to support you 
                    every step of the way.
                </p>
            </div>

        </div>
    </section>

@endsection

@section('body-class', 'submitted-page')

@section('scripts')
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <script src="{{ asset('js/animations.js') }}"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($randomQuote)
        <script>
            // Show quote popup after a short delay
            setTimeout(() => {
                Swal.fire({
                    title: '{{ $randomQuote->author }} says:',
                    text: '{{ $randomQuote->quote }}',
                    icon: 'success',
                    showCancelButton: true,
                    showDenyButton: true,
                    confirmButtonText: 'Thank you',
                    denyButtonText: 'Need help?',
                    cancelButtonText: 'Close',
                    confirmButtonColor: '#333e8f',
                    denyButtonColor: '#ef4444'
                }).then((result) => {
                    if (result.isConfirmed) { 
                        // Scroll to not alone section
                        document.querySelector('.not-alone-section').scrollIntoView({ 
                            behavior: 'smooth' 
                        });
                    } else if (result.isDenied) {
                        window.location.href = "{{ route('user.hotline') }}";
                    }
                });
            }, 1500);
        </script>
    @endif
@endsection
