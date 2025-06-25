@extends('layouts.user')

@section('styles')
    @vite('resources/css/styles.css')
@endsection

@section('content')

<!-- Header Section -->
<div class="emergency-header text-center py-5">
    <div class="container page-container">
        <h1 class="display-5 fw-bold text-gold">e-Hayag</h1>
        <p class="lead welcome-subheading">
            Welcome to e-Hayag – your safe space to express your thoughts, feelings, and experiences without fear of judgment.
            Here you may pour out whatever is in your heart – joy, sadness, hope, frustration, gratitude, confusion, or anything in between.
            Whether you're working through a challenge, carrying a heavy burden, having a bad day, revisiting past experiences, or simply reflecting on your current situation, this is your personal corner of comfort and honesty.
        </p>
    </div>
</div>

<!-- How to Use Section -->
<div class="container mt-5 page-container">
    <div class="card info-card p-4 page-container">
        <h4 class="mb-3 text-blue"><i class="fas fa-info-circle me-2 text-gold"></i> How to Use this Space:</h4>
        <p class="mb-3"><strong class="text-gold">Fear not – this will only be seen by your guidance counselors.</strong></p>

        <ul class="mb-3" style="line-height: 1.8;">
            <li><strong>Be honest:</strong> Share what you truly feel. No filters needed.</li>
            <li><strong>Be kind:</strong> To yourself and to others. This is a judgment-free zone.</li>
            <li><strong>Stay anonymous if you wish:</strong> You don’t need to sign your name. What matters is that you feel heard.</li>
        </ul>

        <div class="text-center mt-4">
            <p class="text-muted fst-italic">Take a moment. Breathe. Write.<br>Here, you are heard. You are valued. You are home.</p>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="text-center mt-5">
    <div class="top-bar mb-3">
        <h2 class="navigation-title text-gold">Ready to express your thoughts?</h2>
    </div>
    <a href="{{ route('user.freedomwall.create') }}" class="btn btn-primary px-4 py-2">
        <i class="fas fa-heart me-2"></i> Click Here
    </a>
    <div class="nav-line-separator mt-3"></div>
</div>

@endsection
