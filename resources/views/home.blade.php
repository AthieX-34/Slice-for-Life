<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home2.css"><link rel="stylesheet" href="{{ asset('css/home2.css') }}">
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fff;
        }

        .container { /* for all the sections, including header and footer*/
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img { /* for all the images, mostly used as backgrounds*/
            max-width: 100%;
            height: auto;
        }


        /*------------Logo styles--------------------------------*/
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .logo-image {
            width: 70px;
            height: auto;
        }
        .logo-text {
            display: flex;
            flex-direction: column;
        }


        /*--------------buttons--------------------------------------*/
        .btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .primary-btn {/*usd for: Home*/
            background-color: rgb(255, 153, 0);
            color: white;
        }
        .primary-btn:hover {
            background-color: rgba(255, 153, 0, 0.678);;
            transform: translateY(-2px);
        }

        .secondary-btn {/*used fort: Popular & Home*/
            background-color: transparent;
            border: 2px solid rgb(255, 153, 0);
            color: rgb(255, 153, 0);
        }
        .secondary-btn:hover {/*Used at: Home*/
            background-color: rgba(255, 153, 0, 0.678);;
            color: white;
        }

        .small-btn {/*used for: Locations*/
            padding: 8px 16px;
            font-size: 0.9rem;
            background-color: rgb(255, 153, 0);
            color: white;
        }
        .small-btn:hover {/*used for: Locations*/
            background-color: rgba(255, 153, 0, 0.678);;
            transform: translateY(-2px);
        }
        .large {/*used for: CTA*/
            padding: 15px 40px;
            font-size: 1.2rem;
        }


        .section-title {/*this represents each section*/
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            color: #333;
        }
        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: rgb(255, 153, 0);
            margin: 15px auto 0;
        }


        /* ----------------Header ------------------------------------------*/
        .header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            margin: 0 auto;
        }

        .logo h1 {
            font-family: 'Playfair Display', serif;
            color: rgb(255, 153, 0);
            font-size: 2rem;
            margin: 0;
            letter-spacing: 1px;
        }

        .tagline {
            font-size: 0.9rem;
            color: #777;
            margin-top: -5px;
        }

        .main-nav ul {
            display: flex;
            gap: 30px;
        }
        .main-nav {
            margin-left: auto; /* This will push the nav to the right */
        }
        .main-nav a {
            font-weight: 500;
            position: relative;
            padding: 10px 5px;
        }

        .main-nav a:not(.order-btn) {
            position: relative;
        }

        .main-nav a:not(.order-btn):after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: rgb(255, 153, 0);
            transition: width 0.3s ease;
        }

        .main-nav a:not(.order-btn):hover:after,
        .main-nav a.active:after {
            width: 100%;
        }

        .order-btn {
            background-color:rgb(255, 153, 0);
            color: white;
            padding: 20px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .order-btn:hover {
            background-color: rgba(255, 153, 0, 0.678);
            transform: translateY(-4px);
        }

        /* ---------------home Section----------------------------*/
        .home {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('pic/pizza17.PNG');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            padding-top: 80px; /* Account for fixed header */
        }

        .home-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .home h2 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .home p {
            font-size: 1.5rem;
            margin-bottom: 40px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        }

        .home-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        /*------------------ Features ------------------------------------*/
        .features {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .features .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-box {
            background-color: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .feature-box h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: rgb(255, 153, 0);
        }

        /* -----------------------Popular Items-------------------------*/

        .popular-p {
            font-size: 1.5rem;
            margin-bottom: 40px;
            text-align: center;
        }

        .popular-items {
            padding: 80px 0;
        }

        .pizza-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .pizza-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .pizza-card:hover {
            transform: translateY(-10px);
        }

        .pizza-img {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .pizza-1 {
            background-image: url('pic/pizza14.PNG');
        }

        .pizza-2 {
            background-image: url('pic/pizza18.PNG');
        }

        .pizza-3 {
            background-image: url('pic/pizza19.PNG');
        }

        .pizza-4 {
            background-image: url('pic/pizza4.PNG');
        }

        .pizza-card h3 {
            font-size: 1.3rem;
            margin: 20px 20px 10px;
            color: #333;
        }

        .pizza-card p {
            color: #777;
            margin: 0 20px 15px;
            font-size: 0.9rem;
        }

        .price {
            display: block;
            font-weight: 700;
            color:rgb(255, 153, 0);
            margin: 0 20px 15px;
            font-size: 1.2rem;
        }

        .add-to-cart {
            margin: 0 20px 20px;
            display: block;
            background-color:rgb(255, 153, 0);
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .add-to-cart:hover {
            background-color:rgba(255, 153, 0, 0.678);;
        }

        .view-more {
            text-align: center;
            margin-top: 50px;
        }

        /*---------------------------- About Section -----------------------------------*/
        .about {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .about .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-content {
            text-align: left;
        }

        .about-content .section-title {
            text-align: left;
        }

        .about-content .section-title:after {
            margin-left: 0;
        }

        .about-content p {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .about-image {
            background-image: url('pic/pizza16.PNG');
            background-size: cover;
            background-position: center;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* ------------------------What our customers says ----------------------------------*/
        .section-title2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            color: whitesmoke;
        }
        .testimonials {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        .testimonial-slider {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .testimonial {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 30px;
            max-width: 350px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .quote {
            font-style: italic;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .customer {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .stars {
            color: yellow;
        }

        /* ---------------------Find US/Locations --------------------------------------*/
        .locations {
            padding: 80px 0;
        }
        .locations-p{
            font-size: 1.5rem;
            margin-bottom: 40px;
            text-align: center;
        }

        .locations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .location-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
            text-align: center;
        }

        .location-card h3 {
            color:rgb(255, 153, 0);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .location-card p {
            margin-bottom: 15px;
        }

        .coming-soon {
            border: 2px dashed rgb(255, 153, 0);
            background-color: rgba(231, 76, 60, 0.05);
        }

        .coming-soon h3 {
            margin-bottom: 5px;
        }

        /* ---------------------CTA Section --------------------------------------*/
        .cta {
            padding: 80px 0;
            background-color:rgb(255, 153, 0);
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .cta .primary-btn {
            background-color: white;
            color: rgb(255, 153, 0);
            margin-bottom: 20px;
        }

        .cta .primary-btn:hover {
            background-color: #f9f9f9;
        }

        .phone {
            font-weight: 700;
            border-bottom: 1px dotted white;
        }

        /* ----------------------------Footer -------------------------------*/
        .footer {
            background-color: #222;
            color: #ddd;
            padding: 60px 0 20px;
        }

        .footer-sections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            font-family: 'Playfair Display', serif;
            color:rgb(255, 153, 0);
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .footer-section h4 {
            color: white;
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
        }

        .footer-section h4:after {
            content: '';
            display: block;
            width: 40px;
            height: 3px;
            background-color: rgb(255, 153, 0);
            margin-top: 10px;
        }

        .footer-section p {
            margin-bottom: 10px;
            font-size: 0.95rem;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color:rgb(255, 153, 0);
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #333;
            transition: background-color 0.3s ease;
            font-size: 1.2rem;
        }

        .social-icon:hover {
            background-color: rgb(255, 153, 0);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header .container {
                flex-direction: column;
                padding: 15px;
            }

            .logo {
                margin-bottom: 15px;
                justify-content: center;
            }

            .hero {
                height: 60vh;
                padding-top: 120px;
            }

            .hero h2 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .about .container {
                grid-template-columns: 1fr;
            }

            .about-image {
                order: -1;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .logo-image {
                width: 50px;
            }

            .logo h1 {
                font-size: 1.5rem;
            }

            .pizza-grid {
                grid-template-columns: 1fr;
            }

            .testimonial-slider {
                flex-direction: column;
                align-items: center;
            }

            .locations-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
<div class="homepage">
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="pic/Logo2.1.jpg" alt="Slice of Life Logo" class="logo-image" />
                <div class="logo-text">
                    <h1>Slice of Life</h1>
                    <p class="tagline">Family owned since 1995</p>
                </div>

                <nav class="main-nav">
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'active' : '' }}">Menu</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                        <li><a href="{{ route('order') }}" class="{{ request()->routeIs('order') ? 'active' : '' }}">Order</a></li>

                        @auth
                        <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                            </form>
                        </li>
                        @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth

                        <li><a href="{{ route('menu') }}" class="order-btn">Order Online</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Home Section -->
    <section class="home">
        <div class="container">
            <div class="home-content">
                <h2> Each Slice Is A Taste Of Life</h2>
                <p>Experience an authentic slice from across the world, where each slice can be catered to your liking</p>
                <div class="home-buttons">
                    <a href="menu.php" class="btn primary-btn">Explore menu</a>
                    <a href="checkout.php" class="btn secondary-btn">Order Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="features">
        <div class="container">
            <div class="feature-box">
                <div class="feature-icon">🍕</div>
                <h3>Quality Ingredients</h3>
                <p>We use only the freshest, locally-sourced ingredients for our pizzas.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">🏠</div>
                <h3>Family Tradition</h3>
                <p>Our recipes have been in the family for over three generations.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">🛵</div>
                <h3>Fast Delivery</h3>
                <p>Hot and fresh pizza delivered to your doorstep within 30 minutes.</p>
            </div>
        </div>
    </section>

    <!-- Popular Items -->
    <section class="popular-items">
        <div class="container">
            <h2 class="section-title">Our Most Popular Pizzas</h2>
            <p class="popular-p">These crowd favorites have won the hearts of our customers. Try them yourself and see what the hype is all about!</p>
            <div class="pizza-grid">
                <div class="pizza-card">
                    <div class="pizza-img pizza-1"></div>
                    <h3>Pepperoni</h3>
                    <p>Fresh tomatoes sauce, mozzarella and our homemade pepperoni</p>
                    <span class="price">R119.99</span>
                    <a href="#" class="btn add-to-cart">Add to Cart</a>
                </div>
                <div class="pizza-card">
                    <div class="pizza-img pizza-2"></div>
                    <h3>Neapolitan Margherita</h3>
                    <p>Mozzarella, Fresha tomatoes and basil</p>
                    <span class="price">R99.99</span>
                    <a href="#" class="btn add-to-cart">Add to Cart</a>
                </div>
                <div class="pizza-card">
                    <div class="pizza-img pizza-3"></div>
                    <h3>CPT Margherita</h3>
                    <p>Fresh tomatoes and mozzarella, what more can u ask for</p>
                    <span class="price">R89.99</span>
                    <a href="#" class="btn add-to-cart">Add to Cart</a>
                </div>
                <div class="pizza-card">
                    <div class="pizza-img pizza-4"></div>
                    <h3>Cape Flats</h3>
                    <p>Freshly grounded meat, bell peppers, mozzarella and our secret sauce</p>
                    <span class="price">R129.99</span>
                    <a href="#" class="btn add-to-cart">Add to Cart</a>
                </div>
            </div>
            <div class="view-more">
                <a href="menu.php" class="btn secondary-btn">View the Full Menu</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <h2 class="section-title">Our Story</h2>
                <p>Slice of Life was founded in 1995 by the Rossi family who brought their authentic Italian recipes from Naples to Cape Town. What started as a small corner pizzeria has grown into a beloved local chain, without ever compromising on quality or tradition.</p>
                <p>We're proud to be expanding across the Western Cape while maintaining the same care and attention to detail in every pizza we make.</p>
                <a href="#" class="btn primary-btn">Learn More About Us</a>
            </div>
            <div class="about-image"></div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title2">What Our Customers Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <div class="quote">"Best pizza in Cape Town, hands down! The crust is perfect and the toppings are always fresh."</div>
                    <div class="customer">- Sarah M.</div>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial">
                    <div class="quote">"I've been ordering from Slice of Life for years. Their delivery is always on time and the pizza is still hot!"</div>
                    <div class="customer">- James T.</div>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial">
                    <div class="quote">"The Cape Town Special pizza changed my life. I can't go back to regular pizza anymore!"</div>
                    <div class="customer">- Nomsa K.</div>
                    <div class="stars">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Locations -->
    <section class="locations">
        <div class="container">
            <h2 class="section-title">Find Us</h2>
            <p class="locations-p">We have multiple locations across Cape Town and the Western Cape. Find the one nearest to you!</p>
            <div class="locations-grid">
                <div class="location-card">
                    <h3>Sea Point</h3>
                    <p>123 Main Road<br />Sea Point, Cape Town</p>
                    <p>Open daily: 11am - 10pm</p>
                    <a href="#" class="btn small-btn">Directions</a>
                </div>
                <div class="location-card">
                    <h3>Gardens</h3>
                    <p>45 Kloof Street<br />Gardens, Cape Town</p>
                    <p>Open daily: 11am - 11pm</p>
                    <a href="#" class="btn small-btn">Directions</a>
                </div>
                <div class="location-card">
                    <h3>Woodstock</h3>
                    <p>78 Albert Road<br />Woodstock, Cape Town</p>
                    <p>Open daily: 11am - 10pm</p>
                    <a href="#" class="btn small-btn">Directions</a>
                </div>
                <div class="location-card coming-soon">
                    <h3>Stellenbosch</h3>
                    <p>Coming Soon!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to order your perfect slice?</h2>
            <a href="#" class="btn primary-btn large">Order Online Now</a>
            <p>or call us: <a href="tel:0215550123" class="phone">021 555 0123</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="locatioin.php">Locations</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
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
</div>
</body>
</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home2.css">
</head>

<body>
<div class="homepage">
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="pic/Logo2.1.jpg" alt="Slice of Life Logo" class="logo-image" />
                <div class="logo-text">
                    <h1>Slice of Life</h1>
                    <p class="tagline">Family owned since 1995</p>
                </div>
                <nav class="main-nav">
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'active' : '' }}">Menu</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                        <li><a href="{{ route('order') }}" class="{{ request()->routeIs('order') ? 'active' : '' }}">Order</a></li>

                        @auth
                        <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                            </form>
                        </li>
                        @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth

                        <li><a href="{{ route('menu') }}" class="order-btn">Order Online</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Home Section -->
    <section class="home">
        <div class="container">
            <div class="home-content">
                <h2> Each Slice Is A Taste Of Life</h2>
                <p>Experience an authentic slice from across the world, where each slice can be catered to your liking</p>
                <div class="home-buttons">
                    <a href="menu.php" class="btn primary-btn">Explore menu</a>
                    <a href="checkout.php" class="btn secondary-btn">Order Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="features">
        <div class="container">
            <div class="feature-box">
                <div class="feature-icon">🍕</div>
                <h3>Quality Ingredients</h3>
                <p>We use only the freshest, locally-sourced ingredients for our pizzas.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">🏠</div>
                <h3>Family Tradition</h3>
                <p>Our recipes have been in the family for over three generations.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">🛵</div>
                <h3>Fast Delivery</h3>
                <p>Hot and fresh pizza delivered to your doorstep within 30 minutes.</p>
            </div>
        </div>
    </section>

    <!-- Popular Items -->
    <section class="popular-items">
        <div class="container">
            <h2 class="section-title">Our Most Popular Pizzas</h2>
            <p class="popular-p">These crowd favorites have won the hearts of our customers. Try them yourself and see what the hype is all about!</p>
            <div class="pizza-grid">
                <div class="pizza-card">
                    <div class="pizza-img pizza-1"></div>
                    <h3>Pepperoni</h3>
                    <p>Fresh tomatoes sauce, mozzarella and our homemade pepperoni</p>
                    <span class="price">R119.99</span>
                    <a href="#" class="btn add-to-cart">Add to Cart</a>
                </div>
                <div class="pizza-card">
                    <div class="pizza-img pizza-2"></div>
                    <h3>Neapolitan Margherita</h3>
                    <p>Mozzarella, Fresha tomatoes and basil</p>
                    <span class="price">R99.99</span>
                    <a href="#" class="btn add-to-cart">Add to Cart</a>
                </div>
                <div class="pizza-card">
                    <div class="pizza-img pizza-3"></div>
                    <h3>CPT Margherita</h3>
                    <p>Fresh tomatoes and mozzarella, what more can u ask for</p>
                    <span class="price">R89.99</span>
                    <a href="#" class="btn add-to-cart">Add to Cart</a>
                </div>
                <div class="pizza-card">
                    <div class="pizza-img pizza-4"></div>
                    <h3>Cape Flats</h3>
                    <p>Freshly grounded meat, bell peppers, mozzarella and our secret sauce</p>
                    <span class="price">R129.99</span>
                    <a href="#" class="btn add-to-cart">Add to Cart</a>
                </div>
            </div>
            <div class="view-more">
                <a href="menu.php" class="btn secondary-btn">View the Full Menu</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <h2 class="section-title">Our Story</h2>
                <p>Slice of Life was founded in 1995 by the Rossi family who brought their authentic Italian recipes from Naples to Cape Town. What started as a small corner pizzeria has grown into a beloved local chain, without ever compromising on quality or tradition.</p>
                <p>We're proud to be expanding across the Western Cape while maintaining the same care and attention to detail in every pizza we make.</p>
                <a href="#" class="btn primary-btn">Learn More About Us</a>
            </div>
            <div class="about-image"></div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title2">What Our Customers Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <div class="quote">"Best pizza in Cape Town, hands down! The crust is perfect and the toppings are always fresh."</div>
                    <div class="customer">- Sarah M.</div>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial">
                    <div class="quote">"I've been ordering from Slice of Life for years. Their delivery is always on time and the pizza is still hot!"</div>
                    <div class="customer">- James T.</div>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial">
                    <div class="quote">"The Cape Town Special pizza changed my life. I can't go back to regular pizza anymore!"</div>
                    <div class="customer">- Nomsa K.</div>
                    <div class="stars">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Locations -->
    <section class="locations">
        <div class="container">
            <h2 class="section-title">Find Us</h2>
            <p class="locations-p">We have multiple locations across Cape Town and the Western Cape. Find the one nearest to you!</p>
            <div class="locations-grid">
                <div class="location-card">
                    <h3>Sea Point</h3>
                    <p>123 Main Road<br />Sea Point, Cape Town</p>
                    <p>Open daily: 11am - 10pm</p>
                    <a href="#" class="btn small-btn">Directions</a>
                </div>
                <div class="location-card">
                    <h3>Gardens</h3>
                    <p>45 Kloof Street<br />Gardens, Cape Town</p>
                    <p>Open daily: 11am - 11pm</p>
                    <a href="#" class="btn small-btn">Directions</a>
                </div>
                <div class="location-card">
                    <h3>Woodstock</h3>
                    <p>78 Albert Road<br />Woodstock, Cape Town</p>
                    <p>Open daily: 11am - 10pm</p>
                    <a href="#" class="btn small-btn">Directions</a>
                </div>
                <div class="location-card coming-soon">
                    <h3>Stellenbosch</h3>
                    <p>Coming Soon!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to order your perfect slice?</h2>
            <a href="#" class="btn primary-btn large">Order Online Now</a>
            <p>or call us: <a href="tel:0215550123" class="phone">021 555 0123</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="locatioin.php">Locations</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
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
</div>
</body>
</html>
