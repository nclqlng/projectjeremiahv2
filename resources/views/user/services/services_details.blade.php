@extends('layouts.user')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="details-header">
    <h1 class="details-main-title">{{ $service->name }}</h1>
    <p class="details-subtitle">Comprehensive support designed to help you thrive.</p>
</div>

<div class="details-main-content">

    <div class="details-card">
        <div class="feature-icon-wrapper">
            <span class="material-icons feature-icon">verified_user</span>
        </div>
        <h2 class="details-card-title" style="justify-content: center;">
            Service Description
        </h2>
        <p class="service-description" style="text-align: center;">{!! $service->description !!}</p>
    </div>

    @if($service->consultation)
        <div class="details-card" style="text-align: center;">
            <div class="feature-icon-wrapper">
                <span class="material-icons feature-icon">event_available</span>
            </div>
            <h2 class="details-card-title" style="justify-content: center;">
                Schedule a Consultation
            </h2>
            <p>{{ $service->consultation->description }}</p>
            <a href="{{ $service->consultation->request_link }}" class="back-btn" target="_blank" style="margin-top: 1rem; border-width: 2px; background-color: #1e40af; color: #fff;">
                Request Consultation
            </a>
        </div>
    @endif

    <div style="text-align: center; margin-bottom: 2rem;">
        <a href="{{ route('user.services') }}" class="back-btn">
            <span class="material-icons">arrow_back</span>
            Back to Services
        </a>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.details-card');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    cards.forEach(card => {
        observer.observe(card);
    });
});
</script>
@endsection