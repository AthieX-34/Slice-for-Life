@extends('layouts.default')

@section('title', 'Order Confirmation - Slice of Life')

@section('header')
@endsection

@section('main')
<div class="container" style="margin-top: 100px; padding: 20px;">
    <h1>Order Confirmation</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @php $order = session('recent_order'); @endphp

    @if($order)
        <div class="congratulation">
            <h2>Congratulations! Your order has been placed successfully.</h2>
            <p>Order ID: {{ $order->id }}</p>
            <p>Status: {{ ucfirst($order->status) }}</p>
            <p>Payment Method: {{ ucfirst($order->payment_method) }}</p>
        </div>

        <h3>Order Details:</h3>
        <table class="order-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>R{{ number_format($item['price'], 2) }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>R{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="order-total">
            <h3>Total: R{{ number_format($order->total, 2) }}</h3>
        </div>

        <p>Thank you for ordering from Slice of Life!</p>
        <a href="{{ route('menu') }}" class="btn primary-btn">Order More</a>
    @else
        <p>No recent order found. <a href="{{ route('menu') }}">Go to Menu</a></p>
    @endif
</div>

<style>
    .footer { display: none; }
    .cta { display: none; }
    .order-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    .order-table th, .order-table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    .order-table th { background-color: #f2f2f2; }
    .order-total { text-align: right; margin-bottom: 20px; }
    .alert { padding: 10px; margin-bottom: 20px; border-radius: 5px; }
    .alert-success { background-color: #d4edda; color: #155724; }
    .congratulation { background-color: #e9ecef; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
    .btn { padding: 10px 20px; background-color: #28a745; color: white; border: none; cursor: pointer; border-radius: 4px; text-decoration: none; }
</style>
@endsection

@section('footer')
@endsection
