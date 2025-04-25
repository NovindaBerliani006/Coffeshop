@extends('layouts.main')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4 pt-3 fw-bold display-5" style="color: #6F4E37;">Our Specialty Menu</h2>
    
    <div class="row g-4">
        @foreach($menu as $item)
        <div class="col-md-4 d-flex">
            <div class="menu-card card w-100 border-0 shadow-sm d-flex flex-column">
                <!-- Image Section -->
                <div class="card-img-top overflow-hidden d-flex justify-content-center align-items-center" 
                     style="height: 250px; background-color: #f8f9fa;">
                    <img src="{{ asset('assets/images/' . $item->image) }}" 
                         class="hover-zoom img-fluid" 
                         alt="{{ $item->name }}"
                         style="max-height: 100%; width: auto; object-fit: contain;">
                </div>

                <!-- Konten Card -->
                <div class="card-body d-flex flex-column flex-grow-1">
                    <h5 class="card-title fw-bold mb-3 text-center" style="color: #6F4E37;">
                        {{ $item->name }}
                    </h5>
                    
                    <div class="description-container mb-3 flex-grow-1">
                        <p class="card-text text-muted text-center mb-0 px-2">
                            {{ $item->description }}
                        </p>
                    </div>

                    <div class="price-container text-center mb-3">
                        <span class="h4 fw-bold" style="color: #B09B71;">
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        </span>
                    </div>

                    <!-- Tombol dengan posisi tetap di bawah -->
                    <div class="button-container mt-auto px-3 pb-3">
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="hidden" name="name" value="{{ $item->name }}">
                            <input type="hidden" name="price" value="{{ $item->price }}">
                            <input type="hidden" name="image" value="{{ $item->image }}">
                            <button type="submit" 
                                    class="btn btn-dark w-100 py-2 d-flex align-items-center justify-content-center gap-2"
                                    style="background-color: #6F4E37; border-radius: 25px;">
                                <i class="fas fa-cart-plus"></i>
                                <span>Add to Cart</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
.menu-card {
    transition: transform 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
}

.menu-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.card-img-container {
    border-bottom: 2px solid #f0f0f0;
}

.object-fit-cover {
    object-fit: cover;
    object-position: center;
}

.description-container {
    min-height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-dark:hover {
    background-color: #B09B71 !important;
    transform: translateY(-2px);
}

.button-container {
    transition: all 0.3s ease;
}
</style>
@endsection