@extends('layouts.default')

<!--------------head-----------------------head---------------head-------------->
@section('title', 'About Us')

<style>
/* === Tailwind Replacement CSS === */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9fafb;
    margin: 0;
    padding: 0;
}

/* Container */
.container {
    max-width: 1024px;
    margin: 0 auto;
    padding: 1.5rem;
}

/* Card */
.bg-white {
    background-color: #fff;
}

.rounded-lg {
    border-radius: 0.75rem;
}

.shadow-lg {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

/* Headings */
.text-center { text-align: center; }
.text-green-600 { color: #16a34a; }
.text-3xl { font-size: 1.875rem; font-weight: 700; }
.text-2xl { font-size: 1.5rem; font-weight: 600; }

/* Spacing */
.my-12 { margin: 3rem 0; }
.mt-6 { margin-top: 1.5rem; }
.mb-6 { margin-bottom: 1.5rem; }
.mb-4 { margin-bottom: 1rem; }
.p-6 { padding: 1.5rem; }

/* Typography */
.text-lg { font-size: 1.125rem; }
.text-gray-700 { color: #374151; }

/* === Image Crop Containers === */
.image-crop, .custom-crop {
    width: 100%;
    height: 16rem; /* fixed height for cropping */
    overflow: hidden;
    border-radius: 0.75rem;
    position: relative;
}

/* Default crop: hide top 30% and bottom 30% */
.image-crop img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 50%; /* middle of the image */
    transform: translateY(-0%); /* base position */
}

/* Custom crop: hide top 40%, bottom 20% → show middle 40% */
.custom-crop img {
    width: 100%;
    height: 150%; /* zoom slightly to make crop area cover the frame */
    object-fit: cover;
    object-position: center 60%; /* move focus down slightly */
    transform: translateY(-10%); /* fine-tune */
}

/* List styling */
.list-disc { list-style-type: disc; }
.list-inside { padding-left: 1.25rem; }
</style>

<!--------------body----------------------body----------------body-------------->
@section('body')

    <!--------------header-----------------------header----------------header-------------->
    @section('header')  
    @endsection
    
    <!-----------------main---------------------------main----------------------main---------->
    @section('main')
        <br>
        <section class="container my-12 p-6 bg-white rounded-lg shadow-lg">
            <br><br>
            <h2 class="text-3xl text-center text-green-600 mb-6">About Slice of Life Pizzeria</h2>
        
            <!-- First Image (hide 30% top & bottom) -->
            <div class="mb-6 image-crop">
                <img src="https://images.squarespace-cdn.com/content/v1/59d4f274f6576ec36dca8782/1507154441603-CYFAMNLKB1HH280RDDY4/Andrew-Cebulka--9099.jpg" alt="Delicious pizza">
            </div>

            <?php
                $pizzeria_name = "Slice of Life Pizzeria";
                $about_us = "Welcome to $pizzeria_name, a family-run pizzeria in the Western Cape. We've been passionate about creating delicious pizzas with diverse flavors and traditional recipes, making every visit special for our community.";
                $our_mission = "We aim to make our customers happy by offering a simple and secure online ordering system, with fast service and an easy-to-use experience, while staying true to our traditional roots.";
            ?>

            <p class="text-lg text-gray-700 mb-4"><?php echo $about_us; ?></p>
            <p class="text-lg text-gray-700 mb-4"><?php echo $our_mission; ?></p>

            <h3 class="text-2xl text-green-600 mt-6 mb-4">Our Story</h3>

            <!-- Second Image (hide 40% top & 20% bottom) -->
            <div class="mb-6 custom-crop">
                <img src="https://i.pinimg.com/originals/e4/98/01/e49801682e8aa6a0dc1184c5f071d62b.jpg" alt="Wood-fired pizza">
            </div>

            <p class="text-lg text-gray-700">
                <?php
                    $our_story = "$pizzeria_name started as a small family pizzeria with a love for authentic pizza. As we grew across the Western Cape, we built our own online ordering system to make ordering easier, reduce mistakes, and offer a better experience without relying on expensive third-party apps.";
                    echo $our_story;
                ?>
            </p>

            <h3 class="text-2xl text-green-600 mt-6 mb-4">Our Values</h3>
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