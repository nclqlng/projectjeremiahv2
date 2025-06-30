@extends('layouts.user')

@section('styles')
    <link rel="stylesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ENjdO4Dr2bkBIFxQpeoA6DQD8R1pWIUyo1q9Wl+0I1hKf6UksdQRVvoxMfooAo8y" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
@endsection

@section('content')

<!-- Welcome Header -->
<div class="welcome-header-hero">
    <div class="container animate-hero-content">
        <h1 class="welcome-main-title">
            NU LAGUNA<br>
            CENTER FOR GUIDANCE SERVICES
        </h1>
        <div class="welcome-underline"></div>
        <div class="welcome-contact">
            <div>
                <span class="welcome-icon material-icons">mail</span>
                <span>cgs@nu-laguna.edu.ph</span>
            </div>
            <div>
                <span class="welcome-icon material-icons">link</span>
                <span>bit.ly/NUL-MySchool</span>
            </div>
        </div>
    </div>
</div>

<!-- Motivational Toast Pop-up -->
<div id="motivation-toast" class="motivation-toast" style="display:none;">
    <button class="motivation-toast-close" onclick="document.getElementById('motivation-toast').style.display='none'">&times;</button>
    <div class="motivation-flex">
        <div class="motivation-img-wrap">
            <img src="/bulldog.svg" alt="Bulldog Mascot" class="motivation-bulldog">
        </div>
        <span id="motivation-text" class="motivation-text"></span>
    </div>
</div>
<link rel="stylesheet" href="/css/motivation.css">
<script src="/js/motivation.js"></script>

<div class="welcome-cards stagger-animation">


    <div class="welcome-card fade-in">
        <div class="welcome-card-icon">
            <span class="material-icons">call</span>
        </div>
        <div class="welcome-card-title">Emergency Hotline</div>
        <div class="welcome-card-desc">
            In times of urgent need, our 24/7 hotline provides immediate, compassionate support to the NU Laguna community in Calamba. Your well-being is our priority.
        </div>
        <a href="#" class="welcome-card-link"><br>View</a>
    </div>
    <div class="welcome-card fade-in">
        <div class="welcome-card-icon">
            <span class="material-icons">notifications</span>
        </div>
        <div class="welcome-card-title">Services</div>
        <div class="welcome-card-desc">
            This section is your central hub for all the support and resources offered by the NU Laguna Guidance Office, designed to assist you throughout your academic and personal journey.
        </div>
        <a href="#" class="welcome-card-link"><br>View</a>
    </div>
    <div class="welcome-card fade-in">
        <div class="welcome-card-icon">
            <i class="bi bi-chat-dots-fill"></i>

        </div>
        <div class="welcome-card-title">e-Hayag</div>
        <div class="welcome-card-desc">
            This is your safe and judgment-free space to express your thoughts, feelings, and experiences. A personal corner for comfort and honesty, allowing you to share what's truly on your mind.
        </div>
        <a href="#" class="welcome-card-link">View</a>
    </div>
</div>

<!-- Guidance Awareness Month Header  -->
<div class="guidance-header text-center mb-4" style="margin-top: 6rem;">
    <div class="service-card-icon mb-2">
        <i data-lucide="info" class="pulse-icon"></i>
    </div>
    <h2 class="services-section-title">Guidance Awareness Month</h2>
    <p class="services-subtitle services-subtitle--counselor">
        Last May, we celebrated mental health and the NU Laguna Center for Guidance Services. Thank you for helping us build a supportive community! 
    </p>
</div>

<!-- Lucide Icons CDN and Init -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>

<!-- Guidance Awareness Month Section-->
<div class="guidance-awareness-social-post card mb-5 guidance-post-wide">
    <div class="row g-0 align-items-stretch">
        <div class="col-md-6 d-flex align-items-center justify-content-center guidance-post-left-bg">
            <div class="guidance-browser-frame">
                <div class="guidance-browser-bar">
                    <span class="guidance-browser-dot guidance-browser-dot-yellow"></span>
                    <span class="guidance-browser-dot guidance-browser-dot-blue"></span>
                    <div class="flex-fill"></div>
                    <span class="guidance-browser-url"></span>
                </div>
                <div class="guidance-browser-content">
                    <iframe class="guidance-awareness-video w-100" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fwatch%2F%3Fv%3D1043939594363886" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
        <!-- Post Content -->
        <div class="col-md-6 d-flex flex-column justify-content-between guidance-post-content">
            <div class="guidance-fb-header">
                <img src="/bulldog.svg" alt="NU Laguna Logo" class="rounded-circle" style="width: 44px; height: 44px; object-fit: cover; border: 2px solid #3b438b;">
                <div>
                    <div class="guidance-fb-page">NU Laguna Center for Guidance Services <i class="bi bi-patch-check-fill guidance-fb-verified" title="Verified"></i></div>
                    <div class="guidance-fb-meta">Posted · May 2025 <i class="bi bi-globe2" title="Public"></i></div>
                </div>
            </div>
            <div class="guidance-fb-divider"></div>

            <div class="guidance-fb-caption">
                As we celebrate the <span class="fw-semibold" style="color: #3b438b;">Guidance Awareness Month</span> on this month of May, let's retrospect on the highlights of the services and initiatives provided by NU Laguna Center for Guidance Services.<br><br>
                Let this month serve as a reminder for all of us of the significance of promoting mental health and renewing our commitment to highly relevant programs for NU Laguna community.<br><br>
                Together, we can create a safe environment where everyone can flourish!<br>
                <span style="color: #3b438b; font-size: 1.5rem;">💙🎗️</span>
            </div>

            <!-- Reactions Row -->
            <div class="guidance-fb-reactions-row">
                <span class="guidance-fb-reaction heart"><i class="bi bi-heart-fill"></i></span>
                <span class="guidance-fb-reaction like"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                <span class="guidance-fb-reactions-count">18</span>
            </div>
            <div class="guidance-fb-divider"></div>

            <div class="guidance-fb-actions">
                <span><i class="bi bi-hand-thumbs-up"></i> Like</span>
                <span><i class="bi bi-chat"></i> Comment</span>
                <span><i class="bi bi-share"></i> Share</span>
            </div>

            
            <div class="guidance-fb-comment-box">
                <img src="/bulldog.svg" alt="Your Profile" class="rounded-circle" style="width: 36px; height: 36px; object-fit: cover; border: 1.5px solid #3b438b;">
                <input type="text" class="guidance-fb-comment-input" placeholder="Write a comment...">
            </div>
        </div>
    </div>
</div>

@endsection