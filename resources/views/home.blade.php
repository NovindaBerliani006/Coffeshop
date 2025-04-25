@extends('layouts.main')

@section('content')
<div class="hero-section  d-flex align-items-center">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold mb-4 text-shadow">Start Your Day With a Brew Haven</h1>
        <p class="lead mb-5 text-shadow">Selamat datang di ruang nyaman kami, di mana setiap tegukan kopi adalah cerita.
        Di sini, setiap cangkir punya ceritanya sendiri</p>
        <a href="/menu" class="btn btn-lg btn-light rounded-pill px-5 py-3 shadow">Explore Menu</a>
    </div>
</div>

<style>
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                url('/assets/images/bc kopi atas.png');
    background-size: cover;
    background-position: center;
    height: 100vh;
    margin: 0;
    padding: 0;
    width: 100%;
    background-repeat: no-repeat;
}

.text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.btn-light {
    background-color: rgba(255, 255, 255, 0.9);
    transition: all 0.3s;
}

.btn-light:hover {
    background-color: white;
    transform: translateY(-2px);
}
</style>
@endsection