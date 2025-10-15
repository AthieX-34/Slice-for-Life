<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        return view('order'); // returns a view named "order.blade.php"
    }

    public function cart()
    {
        $cart = session('cart', []);
        return view('cart', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session('cart', []);
        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->quantity;
        } else {
            $cart[$id] = [
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
            ];
        }

        session(['cart' => $cart]);
        return redirect()->route('cart')->with('success', 'Item added to cart!');
    }

    public function updateCart(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session(['cart' => $cart]);
        }

        return redirect()->route('cart')->with('success', 'Cart updated!');
    }

    public function removeFromCart($id)
    {
        $cart = session('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session(['cart' => $cart]);
        }

        return redirect()->route('cart')->with('success', 'Item removed from cart!');
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:cash,card',
        ]);

        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Cart is empty!');
        }

        // Calculate total
        $total = 0;
        $items = [];
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
            $items[] = [
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
            ];
        }

        // Create order
        $order = Order::create([
            'user_id' => Auth::id(),
            'items' => $items,
            'total' => $total,
            'payment_method' => $request->payment_method,
            'status' => $request->payment_method === 'card' ? 'completed' : 'pending',
        ]);

        // Store recent order in session for display
        session(['recent_order' => $order]);

        // Clear cart
        session()->forget('cart');

        return redirect()->route('order')->with('success', 'Order placed successfully!');
    }
}
