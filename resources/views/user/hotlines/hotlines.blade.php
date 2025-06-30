@extends('layouts.user')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ENjdO4Dr2bkBIFxQpeoA6DQD8R1pWIUyo1q9Wl+0I1hKf6UksdQRVvoxMfooAo8y" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ENjdO4Dr2bkBIFxQpeoA6DQD8R1pWIUyo1q9Wl+0I1hKf6UksdQRVvoxMfooAo8y" crossorigin="anonymous">

@endsection

@section('content')
<div class="emergency-header text-center page-container">
    <div class="container">
        <h1 class="display-6 fw-bold text-gold">Emergency Hotlines</h1>
        <p class="lead text-light"> If you or someone you know is in crisis, immediate help is available.
            These resources provide 24/7 support when you need it most.</p>
    </div>
</div>

<div class="container mb-5 page-container">
    <div class="danger-alert text-danger">
        <h5><i class="fas fa-exclamation-triangle me-2"></i>In Case of Immediate Danger</h5>
        <p>If you or someone else is in immediate danger, call 911 or go to your nearest emergency room.</p>
    </div>

    <div class="row g-4 page-container">
        @foreach($entries as $entry)
        <div class="col-md-6 col-lg-4">
            <div class="card hotline-card border-{{ $loop->iteration % 2 == 0 ? 'primary' : 'danger' }}">
                <div class="badge">24/7</div>
                <div class="card-body text-center">
                    <i class="fas {{ $entry->icon ?? 'fa-heart' }} text-{{ $loop->iteration % 2 == 0 ? 'primary' : 'danger' }}"></i>
                    <h5 class="card-title mt-2 fw-bold">{{ $entry->name }}</h5>
                    <p class="text-muted mb-1">{{ $entry->description }}</p>
                    <p class="text-muted small mb-2">{{ $entry->email }}</p>
                    <p class="text-danger fw-semibold">{{ $entry->phone_number }}</p>
                    <small class="d-block text-muted">{{ $entry->availability ?? 'Available 24/7' }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Additional Resources -->
    <div class="mt-5 page-container">
        <div class="additional-resources">
            <h4 class="fw-bold mb-4">Additional Support Resources</h4>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div>
                        <div class="resource-icon bg-light text-primary"><i class="fas fa-book-medical"></i></div>
                        <div class="resource-label">Mental Health First Aid</div>
                        <p class="text-muted">Learn to recognize signs of mental health crises</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div>
                        <div class="resource-icon bg-light text-success"><i class="fas fa-heart"></i></div>
                        <div class="resource-label">Self-Help Resources</div>
                        <p class="text-muted">Apps and tools for managing stress and anxiety</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div>
                        <div class="resource-icon bg-light text-purple"><i class="fas fa-users"></i></div>
                        <div class="resource-label">Support Groups</div>
                        <p class="text-muted">Connect with others who understand your experiences</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
