<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home2.css') }}">
    <style>
        .menu {
            padding: 2rem;
            background: #fefefe;
            text-align: center;

        }
        .menu-title {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #d62828;
            text-align: center; /* Center the title */
        }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        .menu-item {
            border: 1px solid #ddd;
            padding: 1rem;
            border-radius: 12px;
            transition: transform 0.3s;
        }
        .menu-item:hover {
            transform: scale(1.02);
        }
        .menu-item img {
            width: 100%;
            border-radius: 8px;
        }
        .menu-item h3 {
            margin: 0.5rem 0;
            color: #333;
        }
        .menu-item .price {
            display: block;
            margin: 0.5rem 0;
            font-weight: bold;
        }
        .menu-item button {
            padding: 0.5rem 1rem;
            background: #d62828;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.5rem 0;
        }

        .quantity-selector button {
            padding: 0.3rem;
            background: #d62828;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .quantity-selector button:hover {
            background: #a51e1e;
        }

        .quantity-selector .quantity-input {
            width: 25px;
            text-align: center;
            margin: 0 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }


        /*   2nd Menu Display Options
            extra css for the 2nd menu display options
            .filters {
            margin-bottom: 1rem;
            }
            .filters button {
            margin: 0 0.5rem;
            padding: 0.4rem 1rem;
            background: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            }
            .filters button:hover {
            background: #d62828;
            } */
    </style>
</head>

<!--This is the home page -->

<body>

<div class="homepage"> <!-- Changes wanted: created a header, main and footer  -->


    <!-- tags:
    hmtl(small-(location))
    css(small-btn[79], large[83], section-title[88]) -->

    <!-- Header Section -->

    <header class="header">

        <div class="container">
            <div class="logo">
                <img src="pic/Logo2.1.jpg" alt="Slice of Life Logo" class="logo-image" />
                <div class="logo-text">
                    <h1>Slice of Life</h1>
                    <p className="tagline">Family owned since 1995</p>
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

    <!--
    2-nd Menu Display Options
    <div class="filters">
        <button onclick="filterMenu('all')">All</button>
        <button onclick="filterMenu('veg')">Vegetarian</button>
        <button onclick="filterMenu('meat')">Meat Lovers</button>
    </div>

    <div class="menu-item" data-category="veg"> ... </div>
    <div class="menu-item" data-category="meat"> ... </div>

    <script>
        function filterMenu(category) {
        const items = document.querySelectorAll('.menu-item');
        items.forEach(item => {
          const match = category === 'all' || item.dataset.category === category;
          item.style.display = match ? 'block' : 'none';
        });

    </script>
    } -->


    <script>
        function updateQuantity(button, change) {
            const quantityInput = button.parentElement.querySelector('.quantity-input');
            let currentValue = parseInt(quantityInput.value);
            currentValue = isNaN(currentValue) ? 1 : currentValue;
            const newValue = currentValue + change;
            if (newValue >= 1) {
                quantityInput.value = newValue;
            }
        }

        const toggleButton = document.getElementById('dark-mode-toggle');
        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    </script>



    <!-- menu section -->
    <h2 class="menu-title">Our Menu</h2>

    <section class="menu">
        <h2 class="menu-title">Our Pizzas</h2>
        <div class="menu-grid">
            <div class="menu-item">
                <img src="Test/pic/Pizza2.PNG" alt="Margherita Pizza">
                <h3>Margherita</h3>
                <p>Classic delight with fresh basil and mozzarella.</p>
                <span class="price">R79</span>
                <div class="quantity-selector">
                    <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                </div>
                <button>Add to Cart</button>
            </div>

            <div class="menu-item">
                <img src="Test/pic/Pizza3.PNG" alt="Pepperoni Pizza">
                <h3>Pepperoni</h3>
                <p>Loaded with pepperoni and extra cheese.</p>
                <span class="price">R89</span>
                <div class="quantity-selector">
                    <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                </div>
                <button>Add to Cart</button>
            </div>
            <!-- Add more pizzas -->
            <div class="menu-item">
                <img src="Test/pic/pizza4.PNG" alt="Vegetarian Pizza">
                <h3>Vegetarian</h3>
                <p>A medley of fresh vegetables and cheese.</p>
                <span class="price">R79</span>
                <div class="quantity-selector">
                    <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                </div>
                <button>Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="Test/pic/pizza5.PNG" alt="Meat Lovers Pizza">
                <h3>Meat Lovers</h3>
                <p>Loaded with pepperoni, sausage, and ham.</p>
                <span class="price">R99</span>
                <div class="quantity-selector">
                    <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                </div>
                <button>Add to Cart</button>
            </div>

            <div class="menu-item">
                <img src="Test/pic/pizza6.PNG" alt="Seafood Pizza">
                <h3>Seafood</h3>
                <p>Fresh seafood with a hint of lemon.</p>
                <span class="price">R109</span>
                <div class="quantity-selector">
                    <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                </div>
                <button>Add to Cart</button>
            </div>

            <!-- <div class="menu-item">
                <img src="images/bbq-chicken.jpg" alt="BBQ Chicken Pizza">
                <h3>BBQ Chicken</h3>
                <p>Grilled chicken with BBQ sauce and onions.</p>
                <span class="price">R89</span>
                <div class="quantity-selector">
                    <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                </div>
                <button>Add to Cart</button>
            </div> -->
            <!-- <div class="menu-item">
                <img src="images/cheese.jpg" alt="Cheese Pizza">
                <h3>Cheese</h3>
                <p>Classic cheese pizza with mozzarella.</p>
                <span class="price">R69</span>
                <div class="quantity-selector">
                    <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                </div>
                <button>Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="images/pepperoni.jpg" alt="Pepperoni Pizza">
                <h3>Pepperoni</h3>
                <p>Classic pepperoni with extra cheese.</p>
                <span class="price">R89</span>
                <div class="quantity-selector">
                    <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                </div>
                <button>Add to Cart</button>
            </div> -->

        </div>

        <!-- Drinks Section -->
        <div class="menu-section">
            <h3 class="section-title">Drinks</h3>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="Test/pic/Coca_Cola_Flasche_-_Original_Taste.jpg" alt="Coca-Cola">
                    <h3>Coca-Cola</h3>
                    <p>Refreshing soft drink.</p>
                    <span class="price">R20</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>

                    <button>Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Test/pic/bonaqua.webp" alt="Bottled Water">
                    <h3>Bottled Water</h3>
                    <p>Pure and refreshing.</p>
                    <span class="price">R15</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <!-- <div class="menu-item">
                    <img src="images/sprite.jpg" alt="Sprite">
                    <h3>Sprite</h3>
                    <p>Crisp lemon-lime soda.</p>
                    <span class="price">R20</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>

                    <button>Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="images/fanta.jpg" alt="Fanta">
                    <h3>Fanta</h3>
                    <p>Fruity and refreshing.</p>
                    <span class="price">R20</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div> -->
                <div class="menu-item">
                    <img src="Test/pic/glass-with-fruit-ice-tea.jpg" alt="Iced Tea">
                    <h3>Iced Tea</h3>
                    <p>Chilled and refreshing.</p>
                    <span class="price">R25</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Test/pic/glass-orange-juice-placed-wood.jpg" alt="Fresh Juice">
                    <h3>Fresh Juice</h3>
                    <p>Freshly squeezed juice.</p>
                    <span class="price">R30</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <!-- <div class="menu-item">
                    <img src="images/energy-drink.jpg" alt="Energy Drink">
                    <h3>Energy Drink</h3>
                    <p>Boost your energy.</p>
                    <span class="price">R35</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div> -->
                <div class="menu-item">
                    <img src="Test/pic/five-colorful-smoothies-glass-jars-with-fresh-fruit-garnishes-black-surface.jpg" alt="Smoothie">
                    <h3>Smoothie</h3>
                    <p>Delicious fruit smoothie.</p>
                    <span class="price">R40</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>

            </div>
        </div>

        <!-- Sides Section -->
        <div class="menu-section">
            <h3 class="section-title">Sides</h3>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="Test/pic/closeup-italian-appetizer-bruschettas-with-tomato-sauce-parmesan-cheese-wooden-table-h.jpg" alt="Garlic Bread">
                    <h3>Garlic Bread</h3>
                    <p>Freshly baked with garlic and herbs.</p>
                    <span class="price">R30</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Test/pic/front-view-delicious-vegan-salad-with-fresh-ingredients-plate.jpg" alt="Garden Salad">
                    <h3>Garden Salad</h3>
                    <p>Fresh greens with a light dressing.</p>
                    <span class="price">R40</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Test/pic/baked-chicken-wings-asian-style.jpg" alt="Chicken Wings">
                    <h3>Chicken Wings</h3>
                    <p>Spicy and crispy chicken wings.</p>
                    <span class="price">R50</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Test/pic/crispy-french-fries-with-ketchup-mayonnaise.jpg" alt="French Fries">
                    <h3>French Fries</h3>
                    <p>Crispy and golden fries.</p>
                    <span class="price">R25</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="Test/pic/cheese-sticks-batter-wooden-hemp.jpg" alt="Cheesy Sticks">
                    <h3>Cheesy Sticks</h3>
                    <p>Delicious cheesy breadsticks.</p>
                    <span class="price">R35</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <!-- <div class="menu-item">
                    <img src="images/cheesy-bread.jpg" alt="Cheesy Bread">
                    <h3>Cheesy Bread</h3>
                    <p>Freshly baked with mozzarella.</p>
                    <span class="price">R40</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="images/loaded-fries.jpg" alt="Loaded Fries">
                    <h3>Loaded Fries</h3>
                    <p>Fries topped with cheese and bacon.</p>
                    <span class="price">R45</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <div class="menu-item">
                    <img src="images/cheesy-wedges.jpg" alt="Cheesy Wedges">
                    <h3>Cheesy Wedges</h3>
                    <p>Crispy potato wedges with cheese.</p>
                    <span class="price">R40</span>
                    <div class="quantity-selector">
                        <button class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                -->
                <!-- Add more side items here -->
            </div>
        </div>

    </section>


    <!-----------------------------------Home Section ---------------------------- -->
    <!-- <section class="home">
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
 -->
    <!---------------------------Why Choose Us---------------------------------------->
    <!-- <section class="features">

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

    </section> -->

    <!------------------------------Popular Items ----------------------------->
    <!-- <section class="popular-items">
      <div class="container">
        <h2 class="section-title">Our Most Popular Pizzas</h2> -->
    <!--Need to style this p tag-->
    <!-- <p class="popular-p">These crowd favorites have won the hearts of our customers. Try them yourself and see what the hype is all about!</p>
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
</section> -->

    <!----------------------  About Section ---------------->

    <!-- <section class="about">
      <div class="container">
        <div class="about-content">
          <h2 class="section-title">Our Story</h2>
          <p>Slice of Life was founded in 1995 by the Rossi family who brought their authentic Italian recipes from Naples to Cape Town. What started as a small corner pizzeria has grown into a beloved local chain, without ever compromising on quality or tradition.</p>
          <p>We're proud to be expanding across the Western Cape while maintaining the same care and attention to detail in every pizza we make.</p>
          <a href="#" class="btn primary-btn">Learn More About Us</a>
        </div>
        <div class="about-image"></div>
      </div>
    </section> -->


    <!------------------What our customers say ------------------>

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


    <!--           CTA Section             -->

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
