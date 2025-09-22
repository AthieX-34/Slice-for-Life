@extends('layouts.default')

@section('title', 'Menu')

@section('body')
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

    <!------------------------- menu section ---------------------->
    <h2 class="menu-title">Our Menu</h2>

    <section class="menu">
        <h2 class="menu-title">Our Pizzas</h2>
        <div class="menu-grid">
            <div class="menu-item">
                <img src="{{ asset('images/Pizza.PNG') }}" alt="Margherita Pizza">
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
                <img src="{{ asset('images/Pizza6.PNG') }}" alt="Pepperoni Pizza">
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
                <img src="{{ asset('images/Pizza3.PNG') }}" alt="Vegetarian Pizza">
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
                <img src="{{ asset('images/Pizza4.PNG') }}" alt="Meat Lovers Pizza">
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
                <img src="{{ asset('images/Pizza5.PNG') }}" alt="Seafood Pizza">
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
        </div>

        <!------------------ Drinks Section ------------------->
        <div class="menu-section">
            <h3 class="section-title">Drinks</h3>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="{{ asset('images/coke.jpeg') }}" alt="Coca-Cola">
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
                    <img src="{{ asset('images/water.jpeg') }}" alt="Bottled Water">
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

                <div class="menu-item">
                    <img src="{{ asset('images/tea.jpg') }}" alt="Iced Tea">
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
                    <img src="{{ asset('images/juice.jpg') }}" alt="Fresh Juice">
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

                <div class="menu-item">
                    <img src="{{ asset('images/smoothie.jpg') }}" alt="Smoothie">
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

        <!---------------------- Sides Section ----------------------------->
        <div class="menu-section">
            <h3 class="section-title">Sides</h3>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="{{ asset('images/garlicBread.jpg') }}" alt="Garlic Bread">
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
                    <img src="{{ asset('images/salad.jpg') }}" alt="Garden Salad">
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
                    <img src="{{ asset('images/wings.jpg') }}" alt="Chicken Wings">
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
                    <img src="{{ asset('images/French_Fries.jpeg') }}" alt="French Fries">
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
                    <img src="{{ asset('images/crispy-cheese-sticks.jpeg') }}" alt="Cheesy Sticks">
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
            </div>
        </div>
    </section>
@endsection
