<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #6F4E37;
            padding: 5px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .main-content {
            height: calc(100% - 120px); /* 80px navbar + 40px footer */
            margin-top: 80px;
            overflow-y: auto;
        }

        .hero-section {
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('/assets/images/bc kopi atas.png');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer {
            background-color: #6F4E37;
            height: 40px;
            position: fixed;
            bottom: 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        /* Style lainnya tetap sama */
        .navbar-brand,
        .nav-link {
            color: #FFF8F0 !important;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #B09B71 !important;
            transform: translateY(-2px);
        }

        .cart-icon {
            position: relative;
            margin-left: 25px;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -12px;
            font-size: 0.75rem;
            padding: 4px 7px;
            background-color: #dc3545;
            border-radius: 50%;
        }

        .hover-effect {
            transition: transform 0.3s ease;
        }

        .hover-effect:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">☕  Localhost Brew </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="{{ route('cart.index') }}" class="nav-link cart-icon hover-effect">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                            @if(count((array) session('cart')) > 0)
                            <span class="cart-badge">
                                {{ count((array) session('cart')) }}
                            </span>
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="">
        @yield('content')
    </div>

    <footer class="text-center text-light" style="background-color: #6F4E37;">
        <div class="">
            <small class="fw-semibold text-light">&copy; {{ date('Y') }} Localhost Brew <i class="fas fa-heart text-danger"></i> by Kelompok 10</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>