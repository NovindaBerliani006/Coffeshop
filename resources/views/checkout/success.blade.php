@extends('layouts.main')

@section('content')
<div class="container py-5 text-center">
    <div class="card shadow-sm p-5">
        <h1 class="display-4 text-success mb-4">🎉 Pesanan Berhasil! 🎉</h1>
        <p class="lead mb-4">Terima kasih telah memesan di Coffee Shop kami!</p>
        <div class="alert alert-success">
            Kami telah mengirimkan detail pesanan ke email Anda
        </div>
        <a href="/menu" class="btn mt-3" style="background-color: #6F4E37; color: white;">
            Kembali ke Menu
        </a>
    </div>
</div>
@endsection