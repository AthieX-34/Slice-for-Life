@extends('layouts.default')

@section('title', 'Cart - Slice of Life')

@section('header')
@endsection

@section('main')
<div class="container" style="margin-top: 100px; padding: 20px;">
    <h1>Your Cart</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif

    @if(empty($cart))
        <p>Your cart is empty. <a href="{{ route('menu') }}">Go to Menu</a></p>
    @else
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $id => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>R{{ number_format($item['price'], 2) }}</td>
                        <td>
                            <form action="{{ route('cart.update', $id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('PUT')
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 60px;">
                                <button type="submit" class="btn">Update</button>
                            </form>
                        </td>
                        <td>R{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                    @php $total += $item['price'] * $item['quantity']; @endphp
                @endforeach
            </tbody>
        </table>

        <div class="cart-total">
            <h3>Total: R{{ number_format($total, 2) }}</h3>
        </div>

        <form action="{{ route('cart.checkout') }}" method="POST">
            @csrf
            <div class="payment-options">
                <h4>Select Payment Method:</h4>
                <label><input type="radio" name="payment_method" value="cash" required> Cash</label>
                <label><input type="radio" name="payment_method" value="card" required> Card</label>
            </div>
            <button type="submit" class="btn primary-btn large">Place Order</button>
        </form>
    @endif
</div>

<style>
    .footer { display: none; }
    .cta { display: none; }
    .cart-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    .cart-table th, .cart-table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    .cart-table th { background-color: #f2f2f2; }
    .cart-total { text-align: right; margin-bottom: 20px; }
    .alert { padding: 10px; margin-bottom: 20px; border-radius: 5px; }
    .alert-success { background-color: #d4edda; color: #155724; }
    .alert-error { background-color: #f8d7da; color: #721c24; }
    .btn { padding: 5px 10px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 4px; }
    .btn-danger { background-color: #dc3545; }
    .primary-btn { background-color: #28a745; }
    .large { padding: 10px 20px; font-size: 16px; }
</style>
@endsection

@section('footer')
@endsection
