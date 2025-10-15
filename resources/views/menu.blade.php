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
    <br>
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
                <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                    @csrf
                    <input type="hidden" name="id" value="margherita">
                    <input type="hidden" name="name" value="Margherita">
                    <input type="hidden" name="price" value="79">
                    <div class="quantity-selector">
                        <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                        <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button type="submit">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="{{ asset('images/Pizza6.PNG') }}" alt="Pepperoni Pizza">
                <h3>Pepperoni</h3>
                <p>Loaded with pepperoni and extra cheese.</p>
                <span class="price">R89</span>
                <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                    @csrf
                    <input type="hidden" name="id" value="pepperoni">
                    <input type="hidden" name="name" value="Pepperoni">
                    <input type="hidden" name="price" value="89">
                    <div class="quantity-selector">
                        <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                        <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <!-- Add more pizzas -->
            <div class="menu-item">
                <img src="{{ asset('images/Pizza3.PNG') }}" alt="Vegetarian Pizza">
                <h3>Vegetarian</h3>
                <p>A medley of fresh vegetables and cheese.</p>
                <span class="price">R79</span>
                <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                    @csrf
                    <input type="hidden" name="id" value="vegetarian">
                    <input type="hidden" name="name" value="Vegetarian">
                    <input type="hidden" name="price" value="79">
                    <div class="quantity-selector">
                        <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                        <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/Pizza4.PNG') }}" alt="Meat Lovers Pizza">
                <h3>Meat Lovers</h3>
                <p>Loaded with pepperoni, sausage, and ham.</p>
                <span class="price">R99</span>
                <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                    @csrf
                    <input type="hidden" name="id" value="meat_lovers">
                    <input type="hidden" name="name" value="Meat Lovers">
                    <input type="hidden" name="price" value="99">
                    <div class="quantity-selector">
                        <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                        <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button type="submit">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="{{ asset('images/Pizza5.PNG') }}" alt="Seafood Pizza">
                <h3>Seafood</h3>
                <p>Fresh seafood with a hint of lemon.</p>
                <span class="price">R109</span>
                <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                    @csrf
                    <input type="hidden" name="id" value="seafood">
                    <input type="hidden" name="name" value="Seafood">
                    <input type="hidden" name="price" value="109">
                    <div class="quantity-selector">
                        <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                        <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                    <button type="submit">Add to Cart</button>
                </form>
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
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="coca_cola">
                        <input type="hidden" name="name" value="Coca-Cola">
                        <input type="hidden" name="price" value="20">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('images/water.jpeg') }}" alt="Bottled Water">
                    <h3>Bottled Water</h3>
                    <p>Pure and refreshing.</p>
                    <span class="price">R15</span>
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="bottled_water">
                        <input type="hidden" name="name" value="Bottled Water">
                        <input type="hidden" name="price" value="15">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>

                <div class="menu-item">
                    <img src="{{ asset('images/tea.jpg') }}" alt="Iced Tea">
                    <h3>Iced Tea</h3>
                    <p>Chilled and refreshing.</p>
                    <span class="price">R25</span>
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="iced_tea">
                        <input type="hidden" name="name" value="Iced Tea">
                        <input type="hidden" name="price" value="25">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('images/juice.jpg') }}" alt="Fresh Juice">
                    <h3>Fresh Juice</h3>
                    <p>Freshly squeezed juice.</p>
                    <span class="price">R30</span>
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="fresh_juice">
                        <input type="hidden" name="name" value="Fresh Juice">
                        <input type="hidden" name="price" value="30">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>

                <div class="menu-item">
                    <img src="{{ asset('images/smoothie.jpg') }}" alt="Smoothie">
                    <h3>Smoothie</h3>
                    <p>Delicious fruit smoothie.</p>
                    <span class="price">R40</span>
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="smoothie">
                        <input type="hidden" name="name" value="Smoothie">
                        <input type="hidden" name="price" value="40">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
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
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="garlic_bread">
                        <input type="hidden" name="name" value="Garlic Bread">
                        <input type="hidden" name="price" value="30">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('images/salad.jpg') }}" alt="Garden Salad">
                    <h3>Garden Salad</h3>
                    <p>Fresh greens with a light dressing.</p>
                    <span class="price">R40</span>
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="garden_salad">
                        <input type="hidden" name="name" value="Garden Salad">
                        <input type="hidden" name="price" value="40">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('images/wings.jpg') }}" alt="Chicken Wings">
                    <h3>Chicken Wings</h3>
                    <p>Spicy and crispy chicken wings.</p>
                    <span class="price">R50</span>
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="chicken_wings">
                        <input type="hidden" name="name" value="Chicken Wings">
                        <input type="hidden" name="price" value="50">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('images/French_Fries.jpeg') }}" alt="French Fries">
                    <h3>French Fries</h3>
                    <p>Crispy and golden fries.</p>
                    <span class="price">R25</span>
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="french_fries">
                        <input type="hidden" name="name" value="French Fries">
                        <input type="hidden" name="price" value="25">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('images/crispy-cheese-sticks.jpeg') }}" alt="Cheesy Sticks">
                    <h3>Cheesy Sticks</h3>
                    <p>Delicious cheesy breadsticks.</p>
                    <span class="price">R35</span>
                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="cheesy_sticks">
                        <input type="hidden" name="name" value="Cheesy Sticks">
                        <input type="hidden" name="price" value="35">
                        <div class="quantity-selector">
                            <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1">
                            <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                        </div>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
