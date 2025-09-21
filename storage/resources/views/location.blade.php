@extends('layouts.default')

<!--------------head-----------------------head---------------head-------------->
@section('title', 'Locations')

<!--------------body----------------------body----------------body-------------->
@section('body')

    <!--------------header-----------------------header----------------header-------------->
    @section('header')
        
    @endsection

    <!---------------------------- Locations Section ------------------------>
        <section class="locations">

            <div class="container">
                <br>
                <h2 class="section-title">Find Us</h2>

                <p class="locations-p">We have multiple locations across Cape Town and the Western Cape. Find the one nearest to you!</p>

                <div class="locations-grid">

                    <div class="location-card">
                        <h3>Sea Point</h3>
                        <p>123 Main Road<br />Sea Point, Cape Town</p>
                        <p>Open daily: 11am - 10pm</p>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=123+Main+Road,+Sea+Point,+Cape+Town"
                        target="_blank"
                        class="btn small-btn">Directions</a>
                    </div>

                    <div class="location-card">
                        <h3>Gardens</h3>
                        <p>45 Kloof Street<br />Gardens, Cape Town</p>
                        <p>Open daily: 11am - 11pm</p>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=45+Kloof+Street,+Gardens,+Cape+Town"
                        target="_blank"
                        class="btn small-btn">Directions</a>
                    </div>

                    <div class="location-card">
                        <h3>Woodstock</h3>
                        <p>78 Albert Road<br />Woodstock, Cape Town</p>
                        <p>Open daily: 11am - 10pm</p>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=78+Albert+Road,+Woodstock,+Cape+Town"
                        target="_blank"
                        class="btn small-btn">Directions</a>
                    </div>


                    <div class="location-card coming-soon">
                        <h3>Stellenbosch</h3>
                        <p>Coming Soon!</p>
                    </div>

                </div>
            </div>
        </section>


    <!-----------------main---------------------------main----------------------main---------->
    @section('main')
        
        <!---------------------------- Main Content ------------------------>
        <section class="location-Page-card">
            <h2>Locations</h2>

            <!----------------- Google Map embed ---------------------------->
            <div class="map-container">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019293598982!2d-122.41941548468126!3d37.7749292797597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064d69e82a7%3A0xc8a9ee021ebd6b0!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sza!4v1695373837431!5m2!1sen!2sza"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </section>  
    @endsection

    <!----------------- Footer ------------------------- Footer ------------------------- Footer -------------->
    @section('footer')
        
    @endsection     

@endsection

