<!DOCTYPE html>
<html lang="en">

<!--------------head-----------------------head---------------head-------------->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Slice of Life - Profile')</title>
    <link rel="stylesheet" href="{{ asset('css/home2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!--------------body----------------------body----------------body-------------->
<body>
    @yield('body')

<!--------------header-----------------------header----------------header-------------->
    <header class="header">
        @yield('header')
        <div class="container2">
            <div class="header-content">

                <div class="logo">
                    <img src="{{ asset('images/Logo2.1.jpg') }}" alt="Slice of Life Logo" class="logo-image" />
                    <div class="logo-text">
                        <h1>Slice of Life</h1>
                        <p class="tagline">Family owned since 1995</p>
                    </div>
                </div>

                <nav class="main-nav">
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'active' : '' }}">Menu</a></li>
                        <li><a href="{{ route('cart') }}" class="{{ request()->routeIs('cart') ? 'active' : '' }}">Cart</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                        <li><a href="{{ route('location') }}" class="{{ request()->routeIs('location') ? 'active' : '' }}">Locations</a></li>
                        @auth
                        <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                            </form>
                        </li>
                        <li><a href="{{ route('menu') }}" class="order-btn">Order Online</a></li>
                        @else
                        <li><a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Sign Up</a></li>
                        @endauth
                    </ul>
                    
                </nav>

            </div>
        </div>
    </header>
        <br><br>
<!-----------------main---------------------------main----------------------main---------->
    <main>
        @yield('main')
        
    </main>
    <!------------------------- CTA Section ----------------->
        <section class="cta">
            <div class="container">
                <h2>Ready to order your perfect slice?</h2>
                <a href="{{ route('order') }}" class="btn primary-btn large">Order Online Now</a>
                <p>or call us: <a href="tel:0215550123" class="phone">021 555 0123</a></p>
            </div>
        </section>
        
<!----------------- Footer ------------------------- Footer ------------------------- Footer -------------->
    <footer class="footer">
        @yield('footer')
        <div class="container">
            <div class="footer-sections">
                <div class="footer-section">
                    <h3>Slice of Life</h3>
                    <p>Family-owned pizza with a tradition of excellence since 1995.</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon">📱</a>
                        <a href="#" class="social-icon">📘</a>
                        <a href="#" class="social-icon">📸</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('menu') }}">Menu</a></li>
                        <li><a href="{{ route('location') }}">Locations</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Us</h4>
                    <p>Email: info@sliceoflife.co.za</p>
                    <p>Phone: 021 555 0123</p>
                    <p>Head Office: 123 Main Road, Sea Point, Cape Town</p>
                </div>
                <div class="footer-section">
                    <h4>Opening Hours</h4>
                    <p>Monday - Thursday: 11am - 10pm</p>
                    <p>Friday - Saturday: 11am - 11pm</p>
                    <p>Sunday: 12pm - 9pm</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Slice of Life Pizzeria. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
