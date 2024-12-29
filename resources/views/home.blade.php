@extends('layouts.app')

@section('content')

@if (session('message')) 
<script>
    alert('{{ session('message') }}');
</script>
@endif

<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
<div class=".container-fluid" id="p-header">
    <h1 class="welcome">Welcome</h1>

    <div class="container" id="get-started">
        <p class="des">Learn tech Skills to move you to the Next level in life</p>
        <a href="{{ url('dashboard/'.$user->course_id) }}" class="get-btn">Get Started</a>
    </div>
</div>
@endsection




































{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
