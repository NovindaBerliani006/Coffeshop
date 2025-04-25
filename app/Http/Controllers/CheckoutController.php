<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $total = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cartItems));
        
        return view('checkout.index', compact('cartItems', 'total'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:500'
        ]);

        $order = Order::create([
            'customer_name' => $request->name,
            'customer_email' => $request->email,
            'customer_phone' => $request->phone,
            'customer_address' => $request->address,
            'total_amount' => $this->calculateTotal(),
            'status' => 'pending'
        ]);

        foreach(session('cart') as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity']
            ]);
        }

        session()->forget('cart');
        return redirect()->route('checkout.success')->with('success', 'Pesanan berhasil dibuat!');
    }
    
    private function calculateTotal()
    {
        return array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, session('cart')));
    }
    
    public function success()
    {
        return view('checkout.success');
    }
}