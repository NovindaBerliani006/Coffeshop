@extends('layouts.main')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 fw-bold" style="color: #6F4E37;">Keranjang Belanja</h2>
    
    @if(count($cartItems) > 0)
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    @foreach($cartItems as $item)
                    <div class="row align-items-center mb-4">
                        <div class="col-3">
                            <img src="{{ asset('assets/images/' . $item['image']) }}" 
                                 class="img-fluid rounded-3" 
                                 alt="{{ $item['name'] }}">
                        </div>
                        <div class="col-5">
                            <h5 class="fw-bold">{{ $item['name'] }}</h5>
                            <p class="text-muted mb-0">Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                        </div>
                        <div class="col-2">
                            <form action="{{ route('cart.update', $item['id']) }}" method="POST">
                                @csrf
                                <input type="number" 
                                       name="quantity" 
                                       value="{{ $item['quantity'] }}" 
                                       min="1" 
                                       class="form-control">
                            </form>
                        </div>
                        <div class="col-2 text-end">
                            <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold mb-4">Ringkasan Pesanan</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Total:</span>
                        <span class="fw-bold">Rp {{ number_format($total, 0, ',', '.') }}</span>
                    </div>
                    <a href="{{ route('checkout.index') }}" class="btn w-100" 
                       style="background-color: #6F4E37; color: white;">
                        Lanjut ke Checkout
                    </a>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="text-center py-5">
        <h4 class="mb-3">Keranjang kamu masih kosong</h4>
        <a href="{{ route('menu') }}" class="btn" style="background-color: #6F4E37; color: white;">
            Lihat Menu
        </a>
    </div>
    @endif
</div>
@endsection