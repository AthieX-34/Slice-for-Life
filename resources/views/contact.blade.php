@extends('layouts.default')

@section('title', 'Contact Us')

@section('header')
@endsection

@section('body')
@endsection

@section('main')
<br>
    <div style="padding: 3rem 0; background-color: #f9f9f9;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <h1 style="font-size: 2.5rem; margin-bottom: 2rem; text-align: center; position: relative; color: #333; font-weight: bold;">Contact Us</h1>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div>
                    <img src="{{ asset('images/pizza7.PNG') }}" alt="Delicious Pizza" style="width: 100%; height: auto; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);"/>
                </div>
                <div>

                    <div style="margin-bottom: 1.5rem;">
                        <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: #333;">Address</h3>
                        <p style="color: #777;">123 Pizza Street<br>Cape Town, South Africa<br>8001</p>
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: #333;">Phone</h3>
                        <p style="color: #777;">+27 21 123 4567</p>
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: #333;">Email</h3>
                        <p style="color: #777;">info@sliceforlife.co.za</p>
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: #333;">Hours</h3>
                        <p style="color: #777;">Monday - Friday: 11:00 AM - 10:00 PM<br>Saturday - Sunday: 12:00 PM - 11:00 PM</p>
                    </div>

                    <div style="margin-top: 2rem;">
                        <a href="{{ route('menu') }}" style="display: inline-block; padding: 12px 25px; border-radius: 30px; background-color: #ff9900; color: white; font-weight: 600; text-align: center; transition: all 0.3s ease; cursor: pointer; text-decoration: none;" onmouseover="this.style.backgroundColor='rgba(255, 153, 0, 0.678)'; this.style.transform='translateY(-2px)'" onmouseout="this.style.backgroundColor='#ff9900'; this.style.transform='translateY(0)'">View Our Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
