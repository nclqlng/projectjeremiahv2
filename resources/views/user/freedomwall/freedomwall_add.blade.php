@extends('layouts.user')

@section('styles')
<link rel="stylesheet" href="/css/e-hayag.css">
<link rel="stylesheet" href="{{ asset('css/animations.css') }}">
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
@section('content')
<div class="ehayag-header-hero position-relative">
    <div class="header-hero-dark-overlay"></div>
    <div class="header-hero-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center animate-hero-content">
        <!-- <div class="icon-badge mb-3">
            <i data-lucide="message-circle"></i>
        </div> -->
        <h1 class="services-main-title">
            Welcome to Our <span class="highlight">e-Hayag</span>
        </h1>
         <div class="ehayag-underline"></div>
         <p class="hero-subtitle">Your safe space to express thoughts, feelings, and experiences without judgment</p>
    </div>
</div>

    <div class="container navbar-container py-2" style="min-height:unset;"><div class="container navbar-container py-2" style="min-height:unset;">
   

<section class="ehayag-main-section services-section">
    <div class="container ehayag-container">
        <div class="row flex-column-reverse flex-md-row g-4 align-items-start">
            <!-- Chat Section -->
            <div class="col-12 col-md-7 d-flex">
                <div class="chat-section flex-grow-1 d-flex flex-column">
                    <div class="chat-header">
                        <h2 class="chat-title">Start Your Conversation</h2>
                        <p class="chat-subtitle">Share whatever is on your mind. I'm here to listen and support you.</p>
                    </div>
                    <div class="chat-messages flex-grow-1 mb-3">
                        <div class="chat-message">
                            <div class="message-content">
                                <p class="message-text">Your message will be kept confidential and will only be seen by our guidance counselors. We're here to listen, support, and help you through whatever you're experiencing.</p>
                            </div>  
                            <div class="message-time">{{ now()->format('h:i A') }}</div>
                        </div>
                        <div class="chat-message message-user"></div>
                        <div class="chat-message"></div>
                    </div>
                    <form action="{{ route('freedomwall.store') }}" method="POST" class="chat-input-section mt-auto">
                        @csrf
                        <input type="hidden" name="postName" value="Anonymous">
                        <div class="chat-input-container">
                            <textarea 
                                name="post" 
                                class="chat-input" 
                                placeholder="Type your message here..."
                                required
                                rows="1"
                            ></textarea>
                            <button type="submit" class="chat-send-btn">
                                <i data-lucide="send"></i>
                            </button>
                        </div>
                        <p class="chat-help-text">Press Enter to send, Shift+Enter for new line</p>
                    </form>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-12 col-md-5 d-flex">
                <div class="ehayag-sidebar w-100 d-flex flex-column gap-4">
                    <!-- Safe Space Guidelines -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">
                            <i data-lucide="shield-check" class="sidebar-icon"></i>
                            Safe Space Guidelines
                        </h3>
                        <ul class="guidelines-list">
                            <li class="guideline-item">
                                <div class="guideline-bullet"></div>
                                <div class="guideline-text">
                                    <span class="guideline-strong">Be honest</span> – Share what you truly feel. There's no need to filter or pretend
                                </div>
                            </li>
                            <li class="guideline-item">
                                <div class="guideline-bullet"></div>
                                <div class="guideline-text">
                                    <span class="guideline-strong">Be kind</span> – To yourself and to others. This is a judgment-free zone
                                </div>
                            </li>
                            <li class="guideline-item">
                                <div class="guideline-bullet"></div>
                                <div class="guideline-text">
                                    <span class="guideline-strong">Be anonymous if you wish</span> – You don't have to sign your name. What matters is that you feel heard
                                </div>
                            </li>
                            <li class="guideline-item">
                                <div class="guideline-bullet"></div>
                                <div class="guideline-text">
                                    <span class="guideline-strong">Take a moment</span> – Breathe. Write. Here, you are heard. You are valued. You are home
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Need More Support -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">
                            <i data-lucide="users" class="sidebar-icon"></i>
                            Need More Support?
                        </h3>
                        <div class="support-links">
                            <a href="{{ route('user.hotline') }}" class="support-link">
                                <i data-lucide="phone"></i>
                                Emergency Hotline
                            </a>
                            <a href="{{ route('user.services') }}" class="support-link">
                                <i data-lucide="message-circle"></i>
                                Counseling Services
                            </a>
                            <a href="{{ route('user.services') }}" class="support-link">
                                <i data-lucide="heart-pulse"></i>
                                Mental Health Resources
                            </a>
                        </div>
                    </div>

                    <!-- You Matter -->
                 <div class="sidebar-card you-matter-card text-center">
                    <div class="heart-gradient-circle mx-auto mb-3">
                        <i data-lucide="heart" style="width: 48px; height: 48px;  color:rgb(255, 255, 255);"></i>
                    </div>
                    <h3 class="you-matter-title mt-2">You Matter</h3>
                    <p class="you-matter-text">
                        Every step forward is progress. Every conversation matters. You're not alone on this journey.
                    </p>
                </div>
                </div>
            </div>
        </div>
       
    </div>
</section>



@endsection

@section('body-class', 'ehayag-page')

@section('scripts')
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>
<script src="{{ asset('js/animations.js') }}"></script>
<script>
    
    const textarea = document.querySelector('.chat-input');
    textarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = Math.min(this.scrollHeight, 120) + 'px';
    });

    
    textarea.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            this.closest('form').submit();
        }
    });
</script>
@endsection