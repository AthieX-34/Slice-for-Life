<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Slice of Life Pizzeria</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="header bg-white shadow">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="flex items-center space-x-4">
                <img src="pic/Logo2.1.jpg" alt="Slice of Life Logo" class="w-16 h-16 object-contain rounded-full" />
                <div class="logo-text">
                    <h1 class="text-2xl font-bold text-green-700">Slice of Life</h1>
                    <p class="text-gray-500 text-sm">Family owned since 1995</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="main-nav">
                <ul class="flex space-x-6 font-medium">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">Home</a></li>
                    <li><a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">Menu</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">About</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">Contact</a></li>
                    <li><a href="{{ route('order') }}" class="{{ request()->routeIs('order') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">Order</a></li>

                    @auth
                        <li><a href="{{ route('profile.edit') }}" class="hover:text-green-600">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="hover:text-green-600">Log Out</a>
                            </form>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="hover:text-green-600">Login</a></li>
                        <li><a href="{{ route('register') }}" class="hover:text-green-600">Register</a></li>
                    @endauth

                    <li>
                        <a href="{{ route('menu') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Order Online</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- About Section -->
    <section class="container mx-auto my-12 p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-green-700 mb-8">About Slice of Life Pizzeria</h2>
        
        <div class="mb-6">
            <img src="https://images.squarespace-cdn.com/content/v1/59d4f274f6576ec36dca8782/1507154441603-CYFAMNLKB1HH280RDDY4/Andrew-Cebulka--9099.jpg" 
                 alt="Freshly baked pizza" 
                 class="w-full h-72 object-cover rounded-lg">
        </div>

        <?php
            $pizzeria_name = "Slice of Life Pizzeria";
            $about_us = "Welcome to $pizzeria_name, a family-run pizzeria based in the heart of the Western Cape. Since 1995, we've been crafting mouth-watering pizzas made with fresh, local ingredients and traditional family recipes. Our mission has always been to bring people together over great food, laughter, and memories.";
            $our_mission = "We aim to delight every customer by offering authentic flavors, excellent service, and a simple, secure online ordering system. Whether dining in or ordering online, we promise an experience that is warm, delicious, and convenient.";
        ?>
        
        <p class="text-lg text-gray-700 mb-4"><?php echo $about_us; ?></p>
        <p class="text-lg text-gray-700 mb-4"><?php echo $our_mission; ?></p>

        <h3 class="text-2xl font-semibold text-green-700 mt-10 mb-4">Our Story</h3>
        <div class="mb-6">
            <img src="https://i.pinimg.com/originals/e4/98/01/e49801682e8aa6a0dc1184c5f071d62b.jpg" 
                 alt="Wood-fired pizza in oven" 
                 class="w-full h-72 object-cover rounded-lg">
        </div>
        <p class="text-lg text-gray-700 mb-4">
            <?php
                $our_story = "$pizzeria_name began as a small family kitchen, fueled by a love for authentic wood-fired pizza. Over the years, we’ve grown across the Western Cape, but our passion for traditional flavors has never changed. To meet our community’s needs, we built an online ordering system that makes it easier, faster, and more affordable to enjoy our pizzas—without relying on costly third-party apps.";
                echo $our_story;
            ?>
        </p>

        <h3 class="text-2xl font-semibold text-green-700 mt-10 mb-4">Our Values</h3>
        <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
            <?php
                $our_values = [
                    "✅ Quality: Fresh, local ingredients and handmade dough.",
                    "✅ Tradition: Authentic recipes passed down through generations.",
                    "✅ Innovation: Affordable online ordering with zero hassle.",
                    "✅ Community: A welcoming place for families, friends, and pizza lovers.",
                    "✅ Customer First: Fast, friendly, and memorable service every time."
                ];
                foreach ($our_values as $value) {
                    echo "<li>$value</li>";
                }
            ?>
        </ul>
    </section>

    <!-- Footer -->
    <footer class="bg-green-600 text-white p-4 text-center">
        <p>© <?php echo date("Y"); ?> Slice of Life Pizzeria. All rights reserved.</p>
    </footer>
</body>
</html>
