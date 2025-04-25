<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $total = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cartItems));
        
        return view('cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request)
    {
        $product = $request->all();
        $cart = session()->get('cart', []);

        if(isset($cart[$product['id']])) {
            $cart[$product['id']]['quantity']++;
        } else {
            $cart[$product['id']] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1,
                'image' => $product['image']
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Item added to cart!');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart');
        
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }
        
        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        
        return redirect()->route('cart.index');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('cart.index');
    }
}
