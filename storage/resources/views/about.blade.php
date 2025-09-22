@extends('layouts.default')

<!--------------head-----------------------head---------------head-------------->
@section('title', 'About Us')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!--------------body----------------------body----------------body-------------->
@section('body')

    <!--------------header-----------------------header----------------header-------------->
    @section('header')
        
    @endsection
    
    <!-----------------main---------------------------main----------------------main---------->
    @section('main')
        <br>
        <section class="container mx-auto my-12 p-6 bg-white rounded-lg shadow-lg">
            <br>
            <h1>hello</h1>
            <br>
            <h2 class="text-3xl font-bold text-center text-green-600 mb-6">About Slice of Life Pizzeria</h2>
        
            <div class="mb-6">
                <img src="https://images.squarespace-cdn.com/content/v1/59d4f274f6576ec36dca8782/1507154441603-CYFAMNLKB1HH280RDDY4/Andrew-Cebulka--9099.jpg" alt="Delicious pizza" class="w-full h-64 object-cover rounded-lg">
            </div>
            <?php
                $pizzeria_name = "Slice of Life Pizzeria";
                $about_us = "Welcome to $pizzeria_name, a family-run pizzeria in the Western Cape.We've been passionate about creating delicious pizzas with diverse flavors and traditional recipes, making every visit special for our community.";
                $our_mission = "We aim to make our customers happy by offering a simple and secure online ordering system, with fast service and an easy-to-use experience, while staying true to our traditional roots.";
            ?>
            <p class="text-lg text-gray-700 mb-4"><?php echo $about_us; ?></p>
            <p class="text-lg text-gray-700 mb-4"><?php echo $our_mission; ?></p>
            <h3 class="text-2xl font-semibold text-green-600 mt-6 mb-4">Our Story</h3>
        
            <div class="mb-6">
                <img src="https://i.pinimg.com/originals/e4/98/01/e49801682e8aa6a0dc1184c5f071d62b.jpg" alt="Wood-fired pizza" class="w-full h-64 object-cover rounded-lg">
            </div>
            <p class="text-lg text-gray-700">
                <?php
                    $our_story = "$pizzeria_name started as a small family pizzeria with a love for authentic pizza. As we grew across the Western Cape, we built our own online ordering system to make ordering easier, reduce mistakes, and offer a better experience without relying on expensive third-party apps.";
                    echo $our_story;
                ?>
            </p>
            <h3 class="text-2xl font-semibold text-green-600 mt-6 mb-4">Our Values</h3>
            <ul class="list-disc list-inside text-lg text-gray-700">
                <?php
                    $our_values = [
                        "Quality: We use fresh, local ingredients to make every pizza exceptional.",
                        "Tradition: We stick to authentic family recipes that honor our heritage.",
                        "Innovation: We use affordable technology to make ordering smooth and easy.",
                        "Community: We create a warm, welcoming space for families and pizza lovers.",
                        "Customer Focus: We prioritize fast, easy, and satisfying experiences for our customers."
                    ];
                    foreach ($our_values as $value) {
                        echo "<li>$value</li>";
                    }
                ?>
            </ul>
        </section>
        <br>
    @endsection
    
    <!----------------- Footer ------------------------- Footer ------------------------- Footer -------------->
    @section('footer')
        
    @endsection   

@endsection
   