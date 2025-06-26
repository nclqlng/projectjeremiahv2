@extends('layouts.user')

@section('styles')
    @vite('resources/css/styles.css')
    <link rel="stylesheet" href="/css/welcome.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
@endsection

@section('content')

<!-- Welcome Header -->
<div class="welcome-header-hero">
    <div class="container">
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

<div class="welcome-cards">


    <div class="welcome-card">
        <div class="welcome-card-icon">
            <span class="material-icons">call</span>
        </div>
        <div class="welcome-card-title">Emergency Hotline</div>
        <div class="welcome-card-desc">
            In times of urgent need, our 24/7 hotline provides immediate, compassionate support to the NU Laguna community in Calamba. Your well-being is our priority.
        </div>
        <a href="#" class="welcome-card-link"><br>View</a>
    </div>
    <div class="welcome-card">
        <div class="welcome-card-icon">
            <span class="material-icons">notifications</span>
        </div>
        <div class="welcome-card-title">Services</div>
        <div class="welcome-card-desc">
            This section is your central hub for all the support and resources offered by the NU Laguna Guidance Office, designed to assist you throughout your academic and personal journey.
        </div>
        <a href="#" class="welcome-card-link"><br>View</a>
    </div>
    <div class="welcome-card">
        <div class="welcome-card-icon">
            <span class="material-icons">campaign</span>
        </div>
        <div class="welcome-card-title">e-Hayag</div>
        <div class="welcome-card-desc">
            This is your safe and judgment-free space to express your thoughts, feelings, and experiences. A personal corner for comfort and honesty, allowing you to share what's truly on your mind.
        </div>
        <a href="#" class="welcome-card-link">View</a>
    </div>
</div>

<!-- Guidance Awareness Month Section -->
<div class="guidance-awareness-section">
    <h2>Guidance Awareness Month</h2>
    <div class="guidance-awareness-underline"></div>
    <div class="guidance-awareness-flex">
        <iframe class="guidance-awareness-video" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fwatch%2F%3Fv%3D1043939594363886" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        <div class="guidance-awareness-text">
            <p>
                As we celebrate the Guidance Awareness Month on this month of May, let's retrospect on the highlights of the services and initiatives provided by NU Laguna Center for Guidance Services.<br><br>
                Let this month serve as a reminder for all of us of the significance of promoting mental health and renewing our commitment to highly relevant programs for NU Laguna community.<br><br>
                Together, we can create a safe environment where everyone can flourish!<br>
                <span style="color: #3b438b; font-size: 1.5rem;">💙🎗️</span>
            </p>
        </div>
    </div>
</div>

@endsection