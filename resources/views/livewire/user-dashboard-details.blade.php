<div class="user-dashboard-details">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="ud">
        <i class="fas fa-user-check"></i>
        <div class="email-section">
            <h1>{{ Auth::user()->email }}</h1>
            <p>{{ Auth::user()->phone }}</p>
        </div>
    </div>
    <div class="ud">
        <i class="fas fa-graduation-cap"></i>
        <p class="quize">quize Grade</p>
    </div>
    <div class="ud">
        <i class="fas fa-chart-simple"></i>
        <p class="count">quize Count</p>
    </div>
    <div class="ud">
       <i class="fas fa-comments"></i>
       <p class="active">Active</p> 
    </div>
</div>
