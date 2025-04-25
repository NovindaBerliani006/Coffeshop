@extends('layouts.main')

@section('content')
<div class="container py-5">
    <!-- Our Story Section -->
    <div class="row align-items-center mb-5">
        <div class="col-md-5">
            <img src="/assets/images/about.png" 
                 class="img-fluid rounded-3 shadow" 
                 alt="Coffee Beans">
        </div>
        
        <div class="col-md-6">
            <h2 class="display-6 mb-4 mt-3 fw-bold" style="color: #6F4E37;">Our Story</h2>
            <p class="lead text-muted mb-5">
            Apa Yang Membuat Kopi Kami Special?
Kami percaya bahwa kopi adalah bahasa universal yang menyatukan berbagai cerita dan inspirasi. Di Brew Haven, kami tidak hanya menyajikan kopi berkualitas, tetapi juga menciptakan ruang di mana ide-ide kreatif mengalir, persahabatan terjalin, dan momen berharga tercipta.

Di sini, Anda akan menemukan kombinasi sempurna antara aroma kopi berkualitas, suasana yang nyaman, dan pelayanan yang ramah. Bersama kami, nikmati momen istimewa Anda ditemani secangkir kopi pilihan.

Kami menantikan kesempatan untuk melayani Anda dan berbagi passion kami tentang kopi. Pintu kami selalu terbuka untuk para pencinta dan penikmat kopi sejati.
            </p>
        </div>
    </div>

    <!-- Barista Team Section -->
    <h2 class="text-center mb-5 fw-bold display-5" style="color: #6F4E37;">Meet Our Baristas</h2>
    
    <div class="row g-4 justify-content-center">
        <!-- Barista 1 -->
        <div class="col-md-4">
            <div class="team-card card border-0 text-center h-100 shadow-sm">
                <img src="/assets/images/nopin 2.jpeg" 
                     class="card-img-top rounded-circle mx-auto mt-4" 
                     alt="Barista Alex"
                     style="width: 200px; height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold mt-3" style="color: #6F4E37;">Novinda Berliani</h5>
                    <p class="text-muted mb-3">Head Barista</p>
                    <p class="card-text text-muted">
                        "Mempunya keahlian dalam menciptakan berbagai minuman kopi dan manual brew yang menjadikan aroma coffe shop sebagai destinasi favorit pencinta kopi."
                    </p>
                </div>
            </div>
        </div>

        <!-- Barista 2 -->
        <div class="col-md-4">
            <div class="team-card card border-0 text-center h-100 shadow-sm">
                <img src="/assets/images/Naila.jpg" 
                     class="card-img-top rounded-circle mx-auto mt-4" 
                     alt="Barista Rio"
                     style="width: 200px; height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold mt-3" style="color: #6F4E37;">Naila Fitria</h5>
                    <p class="text-muted mb-3">Coffee Roaster Expert</p>
                    <p class="card-text text-muted">
                        "Mempunya keahlian dalam teknik brewing dan berpengalaman melayani 100+ pelanggan per hari dengan tetap mempertahankan standar kualitas tinggi."
                    </p>
                </div>
            </div>
        </div>

        <!-- Barista 3 -->
        <div class="col-md-4">
            <div class="team-card card border-0 text-center h-100 shadow-sm">
                <img src="/assets/images/Agna.png" 
                     class="card-img-top rounded-circle mx-auto mt-4" 
                     alt="Barista Maya"
                     style="width: 200px; height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold mt-3" style="color: #6F4E37;">Agna Azka Ashari</h5>
                    <p class="text-muted mb-3">Master of Brewing</p>
                    <p class="card-text text-muted">
                        "Mempunya keahlian dalam menciptakan signature drink yang unik, dan memadukan teknik klasik dengan kreativitas moderen untuk menghadirkan pengalaman baru bagi para pecinta kopi."
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.team-card {
    transition: transform 0.3s, box-shadow 0.3s;
    border-radius: 15px;
    background-color: rgba(255, 248, 240, 0.8);
}

.team-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.social-icons i {
    transition: color 0.3s;
}

.social-icons i:hover {
    color: #6F4E37 !important;
}

.rounded-circle {
    border: 3px solid #B09B71;
    padding: 5px;
}
</style>
@endsection