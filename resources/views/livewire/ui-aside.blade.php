<aside id="aside">
    {{-- The whole world belongs to you. --}}
    <div class="toggle" style="cursor: pointer" id="nav-btn" onclick="toggleButton()">
        <i class="fas fa-angles-left move" id="nav-toggle"></i>
    </div>
    <div class="user-name-section">
        <p class="u-course">{{ Auth::user()->course->name }}</p>
        <h2 id="u-name"><i class="fas fa-user uic" aria-hidden="true"></i>{{ Auth::user()->name }}</h2>
    </div>

    <ul class="dashboard-links">
        <li class="dash-list">
            <a href="">
                <span class="icon">
                <i class="fa fa-pie-chart v1"></i>
                </span>
                <span class="title" id="titled">Dashboard</span>
            </a>
        </li>

        <li class="dash-list">
            <a href="">
                <span class="icon">
                <i class="fa fa-school v1"></i>
                </span>
                <span class="title" id="titled">Start Learning</span>
            </a>
        </li>

        <li class="dash-list">
            <a href="">
                <span class="icon">
                <i class="fa fa-circle-play v1"></i>
                </span>
                <span class="title" id="titled">online Class</span>
            </a>
        </li>

        <li class="dash-list">
            <a href="">
                <span class="icon">
                    <i class="fas fa-user-circle v1"></i>
                </span>
                <span class="title" id="titled">Profile</span>
            </a>
        </li>
        
        <li class="dash-list">
            <a href="">
                <span class="icon">
                    <i class="fas fa-id-badge v1"></i>
                </span>
                <span class="title" id="titled">Help</span>
            </a>
        </li>
        
        <li class="dash-list">
            <a href="">
                <span class="icon">
                    <i class="fas fa-comments v1"></i>
                </span>
                <span class="title" id="titled">Furums</span>
            </a>
        </li>

        <li onclick="return confirm('Are you sure to logout?')" class="dash-list">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <span class="icon">
                             <i class="fa fa-arrow-right-from-bracket v1"></i>
                             </span>
                             <span class="title" id="titled">Logout</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</aside>
