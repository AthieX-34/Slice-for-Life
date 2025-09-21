<!-- Custom Navigation Bar -->
<header class="header">
    <div class="container">
        <div class="header-content">
            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/Logo2.1.jpg') }}" alt="Slice of Life Logo" class="logo-image" />
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="main-nav">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'active' : '' }}">Menu</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    <li><a href="{{ route('location') }}" class="{{ request()->routeIs('location') ? 'active' : '' }}">Locations</a></li>
                    <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                    <li><a href="{{ route('profile.edit') }}" class="{{ request()->routeIs('profile.edit') ? 'active' : '' }}">Profile</a></li>
                </ul>
            </nav>

            <!-- User Actions -->
            <div class="order-button">
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-btn">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</header>
