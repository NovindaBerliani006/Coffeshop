@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4 fw-bold" style="color: #6F4E37;">Checkout</h2>
                    
                    <form action="{{ route('checkout.process') }}" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nomor HP</label>
                                <input type="tel" name="phone" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Alamat Pengiriman</label>
                            <textarea name="address" class="form-control" rows="3" required></textarea>
                        </div>
                        
                        <h5 class="mb-3">Ringkasan Pesanan</h5>
                        <div class="table-responsive mb-4">
                            <table class="table">
                                @foreach($cartItems as $item)
                                <tr>
                                    <td>{{ $item['name'] }} x{{ $item['quantity'] }}</td>
                                    <td class="text-end">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                                </tr>
                                @endforeach
                                <tr class="fw-bold">
                                    <td>Total</td>
                                    <td class="text-end">Rp {{ number_format($total, 0, ',', '.') }}</td>
                                </tr>
                            </table>
                        </div>
                        
                        <button type="submit" class="btn w-100" 
                                style="background-color: #6F4E37; color: white;">
                            Konfirmasi Pesanan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection     