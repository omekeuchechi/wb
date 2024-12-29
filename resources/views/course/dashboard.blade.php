@extends('layouts.user')

@section('content')
    <div class="dashboard-link-title">
        <i class="fas fa-chart-pie"></i>
        <p class="dt">
            {{ Auth::user()->role }} Dashboard
        </p>
    </div>
    <livewire:user-dashboard-details />
    @if ($item == $user->course_id && $user->course_id == 1)
        @include('course\frontend')
    @elseif ($item == $user->course_id && $user->course_id == 2)
        @include('course\backend')
    @endif
@endsection