@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="contact-card p-5 rounded-4 shadow">
                <h2 class="text-center mb-5 fw-bold" style="color: #6F4E37;">Hubungi Kami</h2>

                <!-- Notifikasi Sukses -->
                @if(session('success'))
                <div class="alert alert-success-custom mb-4 rounded-3">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                </div>
                @endif

                <!-- Notifikasi Error -->
                @if($errors->any())
                <div class="alert alert-danger-custom mb-4 rounded-3">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    
                    <!-- Nama -->
                    <div class="mb-4">
                        <label class="form-label text-coffee">Nama Lengkap</label>
                        <input type="text" 
                               name="name" 
                               class="form-control rounded-pill py-3 @error('name') is-invalid @enderror" 
                               placeholder="Masukkan nama anda"
                               value="{{ old('name') }}"
                               required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <!-- Email -->
                    <div class="mb-4">
                        <label class="form-label text-coffee">Alamat Email</label>
                        <input type="email" 
                               name="email" 
                               class="form-control rounded-pill py-3 @error('email') is-invalid @enderror" 
                               placeholder="contoh@email.com"
                               value="{{ old('email') }}"
                               required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <!-- Pesan -->
                    <div class="mb-4">
                        <label class="form-label text-coffee">Pesan</label>
                        <textarea name="message" 
                                  class="form-control rounded-3 py-3 @error('message') is-invalid @enderror" 
                                  rows="5" 
                                  placeholder="Tulis pesan anda..."
                                  required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <!-- Tombol Submit -->
                    <div class="text-center mt-5">
                        <button type="submit" 
                                class="btn btn-coffee rounded-pill px-5 py-3">
                            <i class="fas fa-paper-plane me-2"></i>
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.contact-card {
    background-color: rgba(255, 248, 240, 0.95);
    border: 2px solid #6F4E37;
    margin-top: 50px;
    margin-bottom: 40px;
}

.text-coffee {
    color: #6F4E37;
    font-weight: 500;
}

.btn-coffee {
    background-color: #6F4E37 !important;
    color: white !important;
    transition: all 0.3s ease;
}

.btn-coffee:hover {
    background-color: #B09B71 !important;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.alert-success-custom {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
    padding: 15px;
    border-left: 5px solid #155724;
}

.alert-danger-custom {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
    padding: 15px;
    border-left: 5px solid #721c24;
}

.form-control:focus {
    border-color: #B09B71;
    box-shadow: 0 0 0 0.25rem rgba(111, 78, 55, 0.25);
}

.invalid-feedback {
    color: #dc3545;
    margin-top: 5px;
    font-size: 0.875em;
}
</style>
@endsection