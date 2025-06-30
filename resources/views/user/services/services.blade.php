@extends('layouts.user')
    
@section('styles')
    <link rel="stylesheet" href="/css/e-hayag.css">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
@endsection

@section('content')
    @php
    $service_icons = [
        'book-open', 'heart', 'star', 
        'lightbulb', 'shield', 'users'
    ];
    @endphp

    <!-- Hero Section -->
                                        <div class="services-header-hero">
                                            <div class="container animate-hero-content">
                                                <h1 class="services-main-title">
                                                    Welcome to Our <span class="highlight">Counseling Center</span>
                                                </h1>
                                                <div class="ehayag-underline"></div>
                                                <p class="hero-subtitle">Empowering students through professional guidance and support</p>
                                                <div class="hero-buttons">
                                                    <a href="#services-offered" class="hero-btn primary">Explore Services</a>
                                                    <a href="#consultation-section" class="hero-btn secondary">Book Consultation</a>
                                                </div>
                                            </div>
                                        </div>

    <div class="container">
        <section class="services-section counselors-section-new" id="services-offered">
            <div class="counselor-header">
                <div class="service-card-icon">
                    <i data-lucide="book-marked" class="pulse-icon"></i>
                </div>
                <h2 class="services-section-title">Services Offered</h2>
                <p class="services-subtitle services-subtitle--counselor">Comprehensive support services designed to help you thrive academically, personally, and professionally.</p>
            </div>

            <div class="services-cards-container row g-4" id="services-list">
                @foreach($services as $index => $service)
                    <div class="col-lg-4 col-md-6 @if($index >= 3) hidden-service @endif">
                        <a href="{{ route('user.services.details', $service->id) }}" class="service-card d-block h-100 text-decoration-none">
                            <div class="service-card-icon">
                                <i data-lucide="{{ $service_icons[$index % count($service_icons)] }}"></i>
                            </div>
                            <h3 class="service-card-title">{{ $service->name }}</h3>
                            <p class="service-card-desc">{{ Str::limit(strip_tags($service->description), 150, '...') }}</p>
                        </a>
                    </div>
                @endforeach
            </div>

        @if(count($services) > 3)
            <div class="text-center" style="margin-top: 3rem;">
                <button id="toggle-services-btn" class="toggle-btn">
                    <i data-lucide="plus" class="w-5 h-5"></i>
                    <i data-lucide="minus" class="w-5 h-5" style="display: none;"></i>
                    <span>Show All Services</span>
                </button>
            </div>
        @endif

        <!-- COUNSELOR INFORMATION -->
        <section class="services-section counselors-section-new" id="counselors-section">
            <div class="counselor-header">
                <div class="service-card-icon">
                    <i data-lucide="users" class="pulse-icon"></i>
                </div>
                <h2 class="services-section-title">Meet Our Expert Counselors and Psychometrician</h2>
                <p class="services-subtitle services-subtitle--counselor">Our dedicated team of professional counselors is here to support your journey</p>
            </div>
            
            <div id="counselor-reveal-trigger">
                <div class="counselor-hero-container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <img src="{{ asset('counselors/all.jpg') }}" alt="NU Laguna Guidance Services" class="img-fluid rounded-3 shadow-sm">
                        </div>
                        <div class="col-lg-7">
                            <div class="counselor-hero-description text-center text-lg-start">
                                <h3 class="counselor-hero-description__title">Need someone to talk to?</h3>
                                <p>Let's meet the heart of NU's Center for Guidance Services— the competent and passionate professionals who are committed to your personal growth and well-being.</p>
                                <p>Don't hesitate to reach out; they are here to help you navigate your challenges and achieve your goals! 💛💙</p>
                                <blockquote class="counselor-hero-description__quote">
                                    "Call to me, and I will answer you, and I will tell you great and hidden things that you do not know."
                                    <cite class="counselor-hero-description__cite">Jeremiah 33:3</cite>
                                </blockquote>
                                <p class="counselor-hero-description__hashtags">
                                    #GuidanceThatCares<br>
                                    #MeetOurCounselors #HereToHelp<br>
                                    #centerforguidanceservices<br>
                                    #NULaguna
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="counselor-reveal-trigger__toggle-wrapper">
                    <button id="toggle-counselors-btn" class="toggle-btn">
                        <i data-lucide="users" class="w-5 h-5"></i>
                        <span>Meet Our Counselors and Psychometrician</span>
                    </button>
                </div>
            </div>

            <div class="row g-4" id="counselors-grid" style="display: none; margin-top: 3rem;">
                @foreach($counselors as $counselor)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('user.counselors.details', $counselor->id) }}" class="counselor-card-link-new d-block h-100">
                            <div class="counselor-card-new h-100">
                                <div class="counselor-avatar-wrapper-new">
                                    <img src="{{ asset($counselor->image) }}" alt="{{ $counselor->name }}" class="counselor-avatar-new">
                                    <span class="counselor-badge">Expert</span>
                                </div>
                                <div class="counselor-info-new">
                                    <h3 class="counselor-name-new">{{ $counselor->name }}</h3>
                                    <p class="counselor-position-new">{{ $counselor->position }}</p>
                                    <p class="counselor-department-new">{{ $counselor->college }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- CONSULTATION LINKS -->
        <section class="services-section counselors-section-new" id="consultation-section">
            <div class="counselor-header">
                <div class="service-card-icon">
                    <i data-lucide="calendar" class="pulse-icon"></i>
                </div>
                <h2 class="services-section-title">Schedule Your Consultation</h2>
                <p class="services-subtitle services-subtitle--counselor">Take the first step towards positive change. Book your consultation today</p>
            </div>

            <div class="row g-6 justify-content-center">
                @foreach($consultations as $consultation)
                    <div class="col-lg-13">
                        <div class="consultation-card-item-new h-100">
                            <div class="service-card-icon">
                                <i data-lucide="brain"></i>
                            </div>
                            <h3 class="consultation-card-item-title-new">{{ $consultation->name }}</h3>
                            <p class="consultation-card-item-desc-new">{{ strip_tags($consultation->description) }}</p>
                            <a href="{{ $consultation->request_link }}" target="_blank" class="consultation-button-new">
                                <i data-lucide="external-link" class="w-5 h-5"></i>
                                <span>Request Consultation</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection

@section('scripts')
<script src="https://unpkg.com/lucide@latest"></script>
<script src="{{ asset('js/animations.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        lucide.createIcons();
        const toggleBtn = document.getElementById('toggle-services-btn');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                const hiddenServices = document.querySelectorAll('.hidden-service');
                const isHidden = hiddenServices[0].style.display === 'none' || hiddenServices[0].style.display === '';

                hiddenServices.forEach(service => {
                    service.style.display = isHidden ? 'block' : 'none';
                });

                const btnText = toggleBtn.querySelector('span:last-child');
                const plusIcon = toggleBtn.querySelector('i[data-lucide="plus"]');
                const minusIcon = toggleBtn.querySelector('i[data-lucide="minus"]');
                const plusIconSvg = toggleBtn.querySelector('.lucide-plus');
                const minusIconSvg = toggleBtn.querySelector('.lucide-minus');

                if (isHidden) {
                    btnText.textContent = 'Show Less Services';
                    if(plusIconSvg) plusIconSvg.style.display = 'none';
                    if(minusIconSvg) minusIconSvg.style.display = 'inline-block';
                } else {
                    btnText.textContent = 'Show All Services';
                    if(plusIconSvg) plusIconSvg.style.display = 'inline-block';
                    if(minusIconSvg) minusIconSvg.style.display = 'none';
                }
            });
        }
        
        // Counselors toggle
        const toggleCounselorsBtn = document.getElementById('toggle-counselors-btn');
        const counselorsGrid = document.getElementById('counselors-grid');
        const counselorRevealTrigger = document.getElementById('counselor-reveal-trigger');
        const counselorsSection = document.getElementById('counselors-section');

        if (toggleCounselorsBtn) {
            toggleCounselorsBtn.addEventListener('click', function() {
                counselorsGrid.style.display = 'flex';
                counselorRevealTrigger.style.display = 'none';
                counselorsSection.scrollIntoView({ behavior: 'smooth' });
            });
        }
    });
</script>
@endsection


