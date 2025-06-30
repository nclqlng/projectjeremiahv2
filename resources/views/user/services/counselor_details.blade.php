@extends('layouts.user')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
<div class="details-header-hero">
    <div>
        <h1 class="details-main-title">{{ $counselor->name }}</h1>
        <p class="details-subtitle">{{ $counselor->position }}</p>
    </div>
</div>

<div class="details-main-content">
    <div class="details-card">
        <div class="counselor-info-container">
            <div class="counselor-info-avatar-wrapper">
                @if($counselor->image)
                    <img src="{{ asset($counselor->image) }}" alt="{{ $counselor->name }}" class="counselor-info-avatar">
                @endif
            </div>
            <div class="counselor-info-details">
                <h2 style="font-weight: 700; color: #1e3a8a; margin-top:0; margin-bottom: 1.5rem;">{{ $counselor->name }}</h2>
                <p><span class="material-icons">work</span> {{ $counselor->position }}</p>
                <p><span class="material-icons">school</span> {{ $counselor->college }}</p>
                <p><span class="material-icons">email</span> <a href="mailto:{{ $counselor->email }}">{{ $counselor->email }}</a></p>
                <p><span class="material-icons">business</span> {{ $counselor->ms_teams_account }}</p>
            </div>
        </div>
    </div>

    <div class="details-card">
        <h2 class="details-card-title">
            <span class="material-icons">schedule</span>
            Weekly Availability
        </h2>
        @php
            $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        @endphp
        <div class="schedule-grid">
            @foreach($days as $day)
                @php
                    $daySchedules = $counselor->schedules->where('day_of_week', $day);
                @endphp
                <div class="schedule-day-card">
                    <h3 class="schedule-day-title">
                        <span class="material-icons">calendar_today</span>
                        {{ $day }}
                    </h3>
                    <ul class="schedule-times">
                        @if($daySchedules->isNotEmpty())
                            @foreach($daySchedules as $schedule)
                                <li class="schedule-time-slot">
                                    {{ \Carbon\Carbon::parse($schedule->start_time)->format('h:i A') }} - 
                                    {{ \Carbon\Carbon::parse($schedule->end_time)->format('h:i A') }}
                                </li>
                            @endforeach
                        @else
                            <li class="schedule-time-slot" style="background: #f1f5f9; color: #64748b;">Not Available</li>
                        @endif
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

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